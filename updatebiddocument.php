<?php
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_POST["updateitem"])) {
	$rdate=$_POST['date'];
$no=$_POST['no'];
$itemname=$_POST['itemname'];
$d=$_POST['itemmodel'];
$mbirr=$_POST['mbirr'];
$sbirr=$_POST['sbirr'];
$odate=$_POST['odate'];
$cdate=$_POST['cdate'];
$s=$_POST['status'];
$sql="update biddocument set no='$no',date='$rdate',item_name='$itemname',
market_birr='$mbirr',supplier_birr='$sbirr',open_date='$odate',close_date='$cdate',status='$s' where no='$no' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult){
echo'<script>
alert("item update succesful!!");
  </script>'.mysqli_error($mysql);
  echo"<script>window.open('ptbiddocument.php','_self')</script>";
}elseif($sqlresult>1){
		echo "update fail!";}
    else {
   echo '<script type="text/javascript">alert(" data not updated");</script>'.mysqli_error($mysql);
   //echo"<script>window.open('displayitem.php','_self')</script>";}
}}
?>