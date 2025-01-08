<?php
$a=mysqli_connect("localhost","root","");
if(!$a){die('not connet'.mysqli_error($a));}
$d=mysqli_select_db($a,"tender");
if(!$d){die('not select'.mysqli_error($a));}
if(isset($_POST['deletedata'])){
	$id=$_POST['delete_no'];
$query="DELETE FROM notice WHERE nid='$id'";
$result=mysqli_query($a,$query);
if(!$result)
{
echo "<script type='text/javascript'>alert('not deleted !!?');window.open('ptnotice.php','_SELF');</script>".mysqli_error($a);

//echo "<script type='text/javascript'>alert('not deleted !!?');window.open('ptbiddocument.php','_SELF');</script>".mysqli_error($a);
}
else
	echo "<script type='text/javascript'>alert('sucessfully deleted !!?');window.open('ptnotice.php','_SELF');</script>";

//echo "<script type='text/javascript'>alert('sucessfully deleted');window.open('ptbiddocument.php','_SELF');</script>";

}
?>