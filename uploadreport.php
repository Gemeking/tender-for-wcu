<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'tender');
$sql = "SELECT * FROM report";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the person file
	$name=$_POST['name'];
//$date=$_POST['date'];
$ab=$_POST['abstract'];
	
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
		echo "<script>alert('You file extension must be .zip, .pdf or .docx');window.open('upload.php','_self');</script>";
        //echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        		echo "<script>alert('File too large!');window.open('upload.php','_self');</script>";

		//echo "File too large!";
    } else {
		  
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO report (uploaded_by,file_name, size,date,abstraction, downloads) VALUES ('$name','$filename', $size,now(),'$ab', 0)";
            if (mysqli_query($conn, $sql)) {
				
                echo "<script>alert('File uploaded successfully');window.open('upload.php','_self');</script>";
            }
        } else {
			echo "<script>alert('Failed to upload file.');window.open('upload.php','_self');</script>";
       
        }
    }
}
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM report WHERE rid=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE report SET downloads=$newCount WHERE rid=$id";
        mysqli_query($conn, $updateQuery);
        exit;
}}