<?php
session_start();
if(isset($_POST["submit"])){
$no=$_POST['no'];
//$date=$_POST['date'];
$itemname=$_POST['itemname'];
$pro=$_POST['procedure'];
$itemmodel=$_POST['itemmodel'];
$odate=$_POST['odate'];
$cdate=$_POST['cdate'];
$mbirr=$_POST['mbirr'];
$supbirr=$_POST['supbirr'];
$mysql=mysqli_connect('localhost','root','',"tender");
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		
    $sql = "INSERT INTO biddocument (date, item_name, item_model, market_birr, supplier_birr, open_date, close_date, instruction, status) 
    VALUES (now(), '$itemname', '$itemmodel', '$mbirr', '$supbirr', '$odate', '$cdate', '$pro', 'open')";
    


$sqlresult=mysqli_query($mysql,$sql);
if(!$sqlresult){echo "".mysqli_error($mysql);}
if($sqlresult){
	echo'<script>
alert(" Biddocumet prepared sucessfully!!!");
  alert(window.location="approvedrequest.php");</script>';

 //echo'<script type="text/javascript">alert(" data is  inserted");</script>';
  
}
    else {
		echo'<script>
alert(" Biddocumet prepared sucessfully!!!");
  alert(window.location="approvedrequest.php");</script>'.mysqli_error($mysql);
}
}
?>