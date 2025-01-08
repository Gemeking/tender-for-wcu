<?php
session_start();
if(isset($_POST["submit"])){
	$iname=$_POST['itemname'];
	$imodel=$_POST['imodel'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
//$date=$_POST['date'];
$message=$_POST['message'];

$mysql=mysqli_connect('localhost','root','',"tender");
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		if(!$mysql){ echo "not connet".mysqli_error($mysql);}
$sql="INSERT INTO feedback (itemname,itemmodel,firstname,lastname,email,date,message,status) 
VALUES('$iname','$imodel','$firstname','$lastname','$email',now(),'$message','1')";

$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult){
//echo "feedback succesfully send!";
 //echo'<script type="text/javascript">alert(" data is  inserted");</script>';
echo"<script type='text/javascript'>alert('feedback send sucessfully!!!');window.open('feedbackpd.php','_self')</script>".mysqli_error($mysql);

  
}elseif($sqlresult>1){
		echo "A feedback send fail!";}
    else {
	//header("location:.html");
	//echo"User could not be added to the database!";
			//echo "A feedback send fail!".mysqli_error($mysql);
   //echo '<script type="text/javascript">alert(" data is not inserted");</script>'.mysqli_error($mysql);
 echo"<script type='text/javascript'>alert('data not   inserted');window.open('feedbackpd.php','_self')</script>".mysqli_error($mysql);

}
}
?>