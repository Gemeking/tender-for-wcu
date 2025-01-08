<?php
session_start();
if(isset($_POST["submit"])){
$mess=$_POST['message'];	
$mysql=mysqli_connect('localhost','root','',"tender");
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");

$sql="INSERT INTO news (message,status) 
VALUES('$mess','1')";
$sqlresult=mysqli_query($mysql,$sql);
if(!$sqlresult){echo "".mysqli_error($mysql);}
if($sqlresult){

// echo'<script type="text/javascript">alert(" post sucessfully!");</script>';
 echo'<script>
alert(" post sucessfully!!!");
  alert(window.location="post.php");</script>';}
  

    else {
	 echo'<script>
alert(" try  again!!!");
  alert(window.location="post.php");</script>'.mysqli_error($mysql);}
   //echo '<script type="text/javascript">alert(" ");</script>'.mysqli_error($mysql);
}

	


?>