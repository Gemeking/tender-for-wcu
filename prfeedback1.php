<?php
session_start();
$con=mysqli_connect('localhost','root','',"tender");
		$db_selected=mysqli_select_db($con,"tender") or die("couldnot select database");
if(isset($_POST["submit"])){
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
//$date=$_POST['date'];
$message=$_POST['message'];


		if(!$con){ echo "not connet".mysqli_error();}
$sql="INSERT INTO feedbackpr (firstname,lastname,email,date,message) 
VALUES('$firstname','$lastname','$email',now(),'$message')";

$sqlresult=mysqli_query($con,$sql);
if($sqlresult){
echo "feedback succesfully send!";
 //echo'<script type="text/javascript">alert(" data is  inserted");</script>';
   echo"<script type='text/javascript'>alert('data is  inserted');window.open('prfeedback.php','_self')</script>";
}elseif($sqlresult>1){
		echo "A feedback send fail!";}
    else {
	//header("location:.html");
	//echo"User could not be added to the database!";
			//echo "A feedback send fail!".mysqli_error($mysql);
   echo"<script type='text/javascript'>alert('data not   inserted');window.open('prfeedback.php','_self')</script>".mysqli_error($con);
}
}
?>