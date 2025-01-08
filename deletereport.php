<?php
$a=mysqli_connect("localhost","root","");
if(!$a){die('not connet'.mysqli_error($a));}
$d=mysqli_select_db($a,"tender");
if(!$d){die('not select'.mysqli_error($a));}
if(isset($_POST['deletedata'])){
	$id=$_POST['delete_report'];
$query="DELETE FROM report WHERE rid='$id'";
$result=mysqli_query($a,$query);
if(!$result)
{
echo "<script type='text/javascript'>alert('not deleted !!?');window.open('viewreport.php','_SELF');</script>".mysqli_error($a);
}
else
echo "<script type='text/javascript'>alert('Are you sure to delete?');window.open('viewreport.php','_SELF');</script>";

}
?>