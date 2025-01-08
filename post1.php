<?php 

$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_POST['btn'])){

$sql="update news set status='0' where status='1'";
$sqlresult=mysqli_query($mysql,$sql);
if(!$sqlresult){
echo'<script>
alert(" try again?");
  alert(window.location="index.php");</script>';
}else{
		echo'<script>
alert(" ok finish!!");
  alert(window.location="index.php");</script>'.mysqli_error($mysql);}
    
}?>