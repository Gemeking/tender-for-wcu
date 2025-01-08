<?php
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_POST["update"])) {
$id=$_POST['user_id'];
	//$fname=$_POST['fname'];
//$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
//$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//$image = $_POST['image'];
//$image=$_FILES['image1']['name'];
 //move_uploaded_file($_FILES["image1"]["tmp_name"],"images/". $_FILES["image1"]["name"]);
//$image1=base64_encode($image);



		
$sql="update users set username='$username',
password='$password',usertype='$usertype',status='1' where user_id='$id' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult){
echo'<script>
alert("Account update succesful!!");
  </script>';
   echo "<script>window.open('blockaccount.php','_self')</script>";
}
 else {
	//header("location:.html");
	//echo"User could not be added to the database!";
   echo '<script type="text/javascript">alert("failed to update");</script>'.mysqli_error($mysql);
  // echo "<script>window.open('blockaccount.php','_self')</script>";
}
}
?>