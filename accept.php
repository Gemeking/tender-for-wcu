<?php 
session_start();
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		if(!$db_selected){die("couldnot select database");}
		if(isset($_GET['id'])){
		$id = $_GET['id'];
$sql="UPDATE request set status='approved', approve='accept' WHERE rid='$id' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult==1){
echo'<script>
alert("Successfully accepted !!");
  alert(window.location="viewrequestsc.php");</script>';
}
else{
echo'<script>
alert("not accepted !!");
  alert(window.location="viewrequestsc.php");</script>';
}
}

?>
