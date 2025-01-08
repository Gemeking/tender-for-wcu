<?php 
include('config.php');
if(isset($_POST['sub'])){
	$m=$_POST['t3'];
	$e=$_POST['t2'];
	$n=$_POST['t1'];
	$sql="insert into  balance(returnbirr,email,paybirr) values('$m','$e','$n')";
	$query=mysqli_query($link,$sql);
	if($query){
		echo'<script>
		alert("sucessfully return  to failer supplier"); </script>';
		 echo "<script>window.open('supplierfails.php','_self')</script>";
		//header("location:supplierfails.php");
		
	}else{
				echo'<script>
		alert(" not return to failer please try again"); </script>'.mysqli_error($link);
			 //echo "<script>window.open('supplierfails.php','_self')</script>";
			//header("location:supplierfails.php");
	}
	
	
	
}

?>