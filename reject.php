<?php 
session_start();
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_GET['id'])){
		$id = $_GET['id'];
$sql="Update  request set approve='reject', status='0' WHERE rid='$id'"; 
$sqlresult=mysqli_query($mysql,$sql);
  if($sqlresult==1){
  echo'<script>
alert("Succeesfully deleted  !!");
  alert(window.location="viewrequestsc.php");</script>';
}
else
{
echo'<script>
alert("not rejected  !!");
  alert(window.location="viewrequestsc.php");</script>';
}
}

?>