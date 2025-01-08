<?php 

$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_POST['fill'])){
$no=$_POST['no'];
$iname=$_POST['itemname'];
$imodel=$_POST['itemmodel'];
$sql="update registerdsupplier set status='closed'  where item_name='$iname' and item_model='$imodel' and Status='open' ";
$sqlresult=mysqli_query($mysql,$sql);
if(!$sqlresult){
echo'<script>
alert(" There is no opend tender!!");
  alert(window.location="disregisterdsup.php");</script>';
}else{
		echo'<script>
alert(" tender  closed succesfully!!");
  alert(window.location="disregisterdsup.php");</script>'.mysqli_error($mysql);}
    
}?>
	