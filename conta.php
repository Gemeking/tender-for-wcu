<?php 
include('config.php');
if(isset($_POST['sub'])){
	$n=$_POST['t1'];
	$e=$_POST['t3'];
	$m=$_POST['t5'];
	$sub=$_POST['t2'];
	$sql="insert into  contact(name,email,subject,message) values('$n','$e','$sub','$m')";
	$query=mysqli_query($link,$sql);
	if($query){
		echo'<script>
		alert(" Message sucessfully send"); </script>';
		 echo "<script>window.open('index.php','_self')</script>";
		//header("location:index.php");
		
	}else{
				echo'<script>
		alert(" Message not sent"); </script>'.mysqli_error($link);
			 //echo "<script>window.open('index.php','_self')</script>";
			//header("location:index.php");
	}
	
	
	
}

?>