<?php
session_start();
if(isset($_POST["submit"])){
$name=$_POST['name'];
//$date=$_POST['date'];
$d=$_POST['dep'];
$reason=$_POST['message'];
$itemkind=$_POST['itemkind'];
$itemmodel=$_POST['itemmodel'];
$measure=$_POST['measure'];
$quantity=$_POST['quantity'];
$unitprice=$_POST['unitprice'];
$totalprice=$_POST['totalprice'];
$mysql=mysqli_connect('localhost','root','',"tender");
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		
$sql="INSERT INTO request (name,date,reason,itemkind,discription,measure,quantity,unitprice,totalprice,department,status,approve,checked) 
VALUES('$name',now(),'$reason','$itemkind','$itemmodel','$measure','$quantity','$unitprice','$totalprice','$d','pending...','not approve','No')";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult){
echo "Request succesful send!";
 echo"<script type='text/javascript'>alert('data is  inserted');window.open('procurement_request.php','_self')</script>";
  //echo "<script>window.open('procurement_request.php','_self')</script>";
}elseif($sqlresult>1){
		echo "A request send fail!";}
    else {
	//header("location:.html");
	//echo"User could not be added to the database!";
echo"<script type='text/javascript'>alert('data is  inserted');window.open('prfeedback.php','_self')</script>".mysqli_error($mysql);
}
}
?>