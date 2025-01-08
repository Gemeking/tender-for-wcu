<?php
session_start();
if(isset($_POST["post"])){
$mess=$_POST['message'];	
//$date=$_POST['date'];
$title=$_POST['title'];
$no=$_POST['no'];
$tar=$_POST['target'];
$p=$_POST['postt'];
$mysql=mysqli_connect('localhost','root','',"tender");
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		
$sql="INSERT INTO notice (date,reg_no,target,title,post_by,message) 
VALUES(now(),'$no','$tar','$title','$p','$mess')";
$sqlresult=mysqli_query($mysql,$sql);
if(!$sqlresult){echo "".mysqli_error($mysql);}
if($sqlresult){

// echo'<script type="text/javascript">alert(" post sucessfully!");</script>';
 echo'<script>
alert(" post sucessfully!!!");
  alert(window.location="notice.php");</script>'.mysqli_error($mysql);;}
  

    else {
	 echo'<script>
alert(" please try  again!!!");
  alert(window.location="notice.php");</script>'.mysqli_error($mysql);}
   //echo '<script type="text/javascript">alert(" ");</script>'.mysqli_error($mysql);
}

?>