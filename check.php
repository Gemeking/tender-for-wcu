<?php 
session_start();
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_GET['id'])){
		$id = $_GET['id'];
$sql="Update  request set checked='yes' WHERE rid='$id'"; 
$sqlresult=mysqli_query($mysql,$sql);
  if($sqlresult==1){
  echo'<script>
alert("Succeesfully checked  !!");
  alert(window.location="approvedrequest.php");</script>';
}
else
{
echo"";
echo'<script>
alert("not  cheked try !!");
  alert(window.location="approvedrequest.php");</script>'.mysqli_error($mysql);;
}
}

?>