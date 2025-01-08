<?php 
include('config.php');
if(isset($_POST['sub'])){
	$n=$_POST['t1'];
	$e=$_POST['t2'];
	$m=$_POST['t3'];
	$sql="insert into  balance(paybirr,email,returnbirr) values('$n','$e','$m')";
	$query=mysqli_query($link,$sql);
	if($query){
		echo'<script>
		alert("sucessfully pay to winner supplier"); </script>';
		 echo "<script>window.open('supplierwins.php','_self')</script>";
		//header("location:supplierwins.php");
		
	}else{
				echo'<script>
		alert(" not pay to winner please try again"); </script>'.mysqli_error($link);
			 //echo "<script>window.open('supplierwins.php','_self')</script>";
			//header("location:supplierwins.php");
	}
	
	
	
}

?>