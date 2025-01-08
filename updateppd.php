<?php
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_POST["update"])) {
$id=$_POST['id'];
	$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$file = addslashes(file_get_contents($_FILES["image1"]["tmp_name"]));
//$image = $_POST['image'];
//$image=$_FILES['image1']['name'];
 //move_uploaded_file($_FILES["image1"]["tmp_name"],"images/". $_FILES["image1"]["name"]);
//$image1=base64_encode($image);

$phone_no=$_POST['phone_no'];

		
$sql="update users set profile='$file',firstname='$fname', lastname='$lname',username='$username',
password='$password',Age='$age',

phonenumber='$phone_no',Sex='$sex',usertype='$usertype',status='1' where user_id='$id' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult){
echo'<script>
alert("Account update succesful!!");
  </script>';
   echo "<script>window.open('propertydepartment.php','_self')</script>";
}elseif($sqlresult>1){
		echo "Account create fail!";}
    else {
	//header("location:.html");
	echo"User could not be added to the database!";
   echo '<script type="text/javascript">alert(" data not updated");</script>'.mysqli_error($mysql);
}
}
?>