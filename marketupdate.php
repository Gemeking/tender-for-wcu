<?php 
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_POST['fill'])){
$no=$_POST['no'];
$iname=$_POST['itemname'];
$mb=$_POST['mbirr'];
$imodel=$_POST['imodel'];
$sql="update registerdsupplier set market_birr='$mb' where item_name='$iname' and item_model='$imodel' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult){
echo'<script>
alert(" market study birr inserted succesfully!!");
  alert(window.location="disregisterdsup.php");</script>';
}
    else {
		echo'<script>
alert(" market study birr not inserted!!");
  alert(window.location="disregisterdsup.php");</script>';
  // echo '<script type="text/javascript">alert(" data not updated" );</script>';
	}
}?>
	