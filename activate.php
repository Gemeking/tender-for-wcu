<?php 
session_start();
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		if(isset($_GET['id'])){
		$id = $_GET['id'];
$sql="UPDATE users set status='1' WHERE user_id='$id' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult==1){
echo'<script>
alert("Successfully activate account  !!");
  alert(window.location="deactivateaccount.php");</script>';
}
else{
echo" not successfully activated ";
}
}
?>