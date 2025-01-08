<?php
if(isset($_POST["register"])) {
$id=$_POST['id'];
	$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
	$sq="select status from assessdsupplier  where id='$id' ";	
	$sqlresult=mysqli_query($mysql,$sq);
	if($row=mysqli_fetch_array($sqlresult)){
		if($row['status']=='Approved'){
			echo'<script>
alert(" this supplier already approved!!");
  alert(window.location="assesswf.php");</script>';
			
		}
	else{	
$sql="update assessdsupplier set status='Approved'  where id='$id' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult){
echo'<script>
alert("approved succesful!!");
  alert(window.location="assesswf.php");</script>';
}elseif($sqlresult>1){
		echo'<script>
alert("already approved");
alert(window.location="assesswf.php");</script>';}
    else {
	echo'<script>
alert("unable to approved")window.open(assesswf.php");</script>'.mysqli_error($mysql);
}
}}}
if(isset($_POST["reject"])) {
$id=$_POST['id'];

	$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
 $sq="select status from assessdsupplier  where id='$id' ";	
	$sqlresult=mysqli_query($mysql,$sq);
	if($row=mysqli_fetch_array($sqlresult)){
		if($row['status']=='Approved'){
			echo'<script>
alert(" this supplier fail  already Rejected!!");
  alert(window.location="assesswf.php");</script>';
			
		}	
else{		
$sql="update assessdsupplier set status='not approved'  where id='$id' ";
$sqlresult=mysqli_query($mysql,$sql);
if($sqlresult){
echo'<script>
alert("rejected succesful!!");
  alert(window.location="assesswf.php");</script>';
}elseif($sqlresult>1){
		echo'<script>
alert("already rejected");
alert(window.location="assesswf.php");</script>';}
    else {
	echo'<script>
alert("unable to reject")window.open(assesswf.php");</script>'.mysqli_error($mysql);
}
}}}
?>