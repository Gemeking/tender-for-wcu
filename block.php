<?php 
session_start();
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		if(isset($_GET['id'])){
		$id = $_GET['id'];
$sql="UPDATE users set status='0' WHERE user_id='$id' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult==1){
echo'<script>
alert("Successfully block account  !!");
  alert(window.location="blockaccount.php");</script>';
}
else{
echo" not successfully accepted ";
}
}
?>