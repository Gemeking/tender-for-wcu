<?php
session_start();
if(isset($_POST["register"])){
$no=$_POST['no'];
$r=$_POST['reason'];
$itemname=$_POST['itemname'];
$d=$_POST['Discription'];
$up=$_POST['unitprice'];
$tp=$_POST['totalprice'];
//$na=$_POST['name'];
$qu=$_POST['quantity'];
$ab=$_POST['abstraction'];
$wn=$_POST['winnername'];
$mysql=mysqli_connect('localhost','root','',"tender");
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		
$sql="INSERT INTO purchaseditems (no,item_name,Discription,quantity,unitprice,totalprice,winnername,reason,abstraction) 
		VALUES('$no','$itemname','$d','$qu','$up','$tp','$wn','$r','$ab')";
$sqlresult=mysqli_query($mysql,$sql);
if(!$sqlresult){echo "".mysqli_error($mysql);}
if($sqlresult){
echo'<script>
alert(" item registered sucessfully!");
  alert(window.location="procurement_Approving_committee.php");</script>';

  
}elseif($sqlresult>1){
		echo "registration   fail!";}
    else {
	//header("location:.html");
	//echo"User could not be added to the database!";
   echo '<script type="text/javascript">alert(" data is not inserted");</script>'.mysqli_error($mysql);
}
}
?>