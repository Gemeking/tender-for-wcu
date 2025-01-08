<?php
session_start();
if(isset($_POST["register"])){
$cname=$_POST['cname'];	
$tinno=$_POST['tinno'];
$city=$_POST['city'];
$email=$_POST['email'];
$tele=$_POST['telephone'];
$fax=$_POST['fax'];
$no=$_POST['no'];
$date=$_POST['date'];
$itemname=$_POST['itemname'];
$itemmodel=$_POST['itemmodel'];
$odate=$_POST['odate'];
$cdate=$_POST['cdate'];
$mbirr=$_POST['mbirr'];
$supbirr=$_POST['supbirr'];
//$fdate=$_POST['fdate'];
$status=$_POST['status'];
$mysql=mysqli_connect('localhost','root','',"tender");
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		
$sql="INSERT INTO registerdsupplier (campany_name,tin_no,city,email,telephone,fax_no,no,prepare_date,item_name,item_model,market_birr,supplier_birr,open_date,close_date,fill_date,status) 
VALUES('$cname','$tinno','$city','$email','$tele','$fax','$no','$date','$itemname','$itemmodel','$mbirr','$supbirr','$odate','$cdate',now(),'$status')";
$sqlresult=mysqli_query($mysql,$sql);
if(!$sqlresult){echo "".mysqli_error($mysql);}
if($sqlresult){
echo"<script>alert('Sucessfully registerd');window.open('sbiddocument.php','_self')</script>";
}
    else {
   echo"<script type='text/javascript'>alert('not registerd');window.open('sbiddocument.php','_self')</script>".mysqli_error($mysql);
}
}
?>