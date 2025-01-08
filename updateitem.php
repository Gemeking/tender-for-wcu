<?php
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_POST["updateitem"])) {
	$rdate=$_POST['date'];
$no=$_POST['no'];
$r=$_POST['reason'];
$itemname=$_POST['itemname'];
$d=$_POST['itemmodel'];
$up=$_POST['unitprice'];
$tp=$_POST['totalprice'];
$na=$_POST['winnername'];
$qu=$_POST['quantity'];
$sql="update items set no='$no', register_date='$rdate',item_name='$itemname',
Discription='$d',quantity='$qu',unitprice='$up',totalprice='$tp',winnername='$na',reason='$r' where no='$no' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult){
echo'<script>
alert("item update succesful!!");
  </script>'.mysqli_error($mysql);
     echo"<script>window.open('displayitem.php','_self')</script>";
}elseif($sqlresult>1){
		echo "update fail!";}
    else {
   echo '<script type="text/javascript">alert(" data not updated");</script>'.mysqli_error($mysql);
   //echo"<script>window.open('displayitem.php','_self')</script>";}
}}
?>