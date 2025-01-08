<?php 
include('config.php');
if(isset($_POST['update'])){
	$n=$_POST['id'];
	$e=$_POST['price'];
	$sql="INSERT INTO `bidsecurity`(`NO`, `price`) values('$n','$e')";
	$query=mysqli_query($link,$sql);
	if($query){
		echo'<script>
		alert("supplier sucessfully pay bid security price "); </script>';
		 echo "<script>window.open('sregister.php','_self')</script>";
		//header("location:supplierwins.php");
		
	}else{
				echo'<script>
		alert(" not pay bid security price please try again"); </script>'.mysqli_error($link);
			 //echo "<script>window.open('supplierwins.php','_self')</script>";
			//header("location:supplierwins.php");
	}
	
	
	
}

?>