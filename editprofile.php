<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"tender");
 session_start();
if(isset($_SESSION['user_id']))
 {
	
  $mail=$_SESSION['user_id'];
   $n=$_SESSION['username'];
 } else {

 ?>
<script>
  alert('You are not logged In !! Please Login to access this page');
  alert(window.location='index.php');
 </script>
 <?php
 }
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Open Tender For wcu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"><!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
 <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css1/mystyle1.min.css">
   <script src="js1/jquery.min.js"></script>
      <script src="js1/script.min.js"></script>
 <link href="css/animate/animate.min.css" rel="stylesheet">
 <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">
  <script src="lib/wow/wow.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/login33.css">
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:560px;color: #fff; }
  #section2 {padding-top:50px;height:700px;color: #fff;}
  #section3 {padding-top:50px;height:700px;color: #fff; background-color: #FFFFF0;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section42 {padding-top:50px;height:1260px;color: #fff;background-color:#F0F8FF }
 
.prof{
border-radius:50px;
height:700px;
}

.use{font-size:18px;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
     <h3> <a class="navbar-brand1" href="#">Web Based Open Tender system</a></h3>
     <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
	
           <li> <a href="administrator.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
  <li><a href="userregister.php"  >User Registration</a></li>
      <li> <a href="blockaccount.php" target="iframe2">List of Active Account</a></li>
    <li><a href="deactivateaccount.php" target="iframe2">List of Blocked Account</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofile.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
              
			   	    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<?php
//session_start();
$n=$_SESSION['username'];
?>

<div class="container" style="margin-top:30px;"><center>
<?php 
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
	    $sql ="SELECT * FROM users WHERE username='$n' AND status='1'";
	    $result = mysqli_query($mysql,$sql); 
		if(!$result){
			echo'<script> alert("user  not found or it is blocked!");</script>';
			//die("Username not found!".mysqli_error($mysql));
			}
		$rowCheck = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$imagepath = "images/";
$id=$row['user_id'];
$username=$row['username'];
$password=$row['password'];
$fname=$row['firstname'];
$lname=$row['lastname'];
$age=$row['Age'];
$sex=$row['Sex'];
$usertype=$row['usertype'];


$file=$row['profile'];
$email=$row['email'];
$phone_no=$row['phonenumber'];



?>
<div class="login-wrap">

  <div class="login-html">
    <!--<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>-->
	<h5>Click here to view  Form</h5>
    <input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab">&nbsp;&nbsp;&nbsp&nbsp;User Sign Up Form</label>
    <div class="login-form">
     
	  
      <form class="sign-up-htm" action="update.php" method="POST" name="account" enctype="multipart/form-data" onsubmit="return validateForm();">
        <div class="group ">
          <label for="user" class="label">Id</label>
          <input id="id" name="id" type="text" class="input" onKeyPress="return ValidateAlpha1(event)" value="<?php echo $id?>"; required>
        </div>
		<div class="group ">
          <label for="user" class="label">Firstname</label>
          <input id="username" name="fname" type="text" class="input" onKeyPress="return ValidateAlpha1(event)" value="<?php echo $fname?>";  required>
        </div>
		<div class="group ">
          <label for="user" class="label">Last Name</label>
          <input id="lname" name="lname" type="text" class="input" onKeyPress="return ValidateAlpha1(event)" value="<?php echo $lname?>" ; required>
		 
        </div>
		<div class="group ">
          <label for="user" class="label">Age</label>
          <input id="age" name="age" type="text" class="input" onKeyPress="return isNumberKey(event)" value="<?php echo $age?>"; required>
		 
        </div>
		 <div class="group">
          <label for="sex" class="label">Sex</label>
		  <input id="sex" name="sex" type="text" class="input" onKeyPress="return ValidateAlpha1(event)"value="<?php echo $sex?>";  required>
		</div>
		<div class="group ">
          <label for="user" class="label">Phone number</label>
          <input id="phone" name="phone_no" type="text" class="input" onKeyPress="return isNumberKey(event)" value="<?php echo $phone_no?>" ; required>
		 
        </div><div class="group ">
          <label for="email" class="label">Email</label>
          <input id="email" type="email" class="input" data-type="email" name="email" onKeyPress="return validateForm()" value="<?php echo $email?>" ; required >
        </div>
		
		
		<div class="group ">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input" onKeyPress="return validateForm()" value="<?php echo $username?>";  required>
		 
        </div>
        <div class="group ">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" onKeyPress="return validateForm()" value="<?php echo $password?>"; required>
		  
        </div>
      
        
         <div class="group">
          <label for="username" class="label">User Type</label>
		  <input id="usertype" type="text" class="input" data-type="text" name="usertype" onKeyPress="return validateForm()" value="<?php echo $usertype?>"; required >
        </div>
        
        
		<div id="profile" >
            <span style="color:red;font-family:'times new roman';font-size:16px;">Profile_image:</span></div>
			<input class="input" style="color:green" type="file"  style="top:389px;width:200px;height:31px;" id="profile" name="image1" id="image" value="<?php echo base64_encode($file ); ?>"accept="image/*" required> 
		 <div class="group">
           <button type="submit" class="button" name="update"style="top:688px;width:140px;height:30px;">Update</button>
		    <button type="reset" class="button" name="reset"style="top:698px;width:140px;height:30px;">Clear Form</button>
        </div>
		 
		 <div id="wb_EditProfileShape1" style="position:absolute;left:-380px;top:-120px;width:459px;height:350px;z-index:20;">
       <!--<img src="images/fg.png" id="EditProfileShape1" alt="" style="border-width:0;width:157px;height:150px;">-->
	   <?php 
      echo'<table border=0 style="position:absolute;left:0px;top:0px;width:159px;height:148px;z-index:20;">';
    echo'</tr>';
	echo'<td>'.'<img src="data:image/jpg;base64,'.base64_encode($file ).'" height="348" border-radius="50px" width="288"  />'.'</td>';
    
	 echo'</tr>';
	 echo'</table>';?>
	   </div>
        <div class="hr"></div>
      </form>
	      <?php
 }
 ?>
</div>
  </div>



</div>
</div>
</div>



<footer id="footer">
   

    <div class="container">
      <div class="copyright">
      © Copyright <strong>Wachemo University Open Tender system | 2024</strong>. All Rights Reserved
      </div>
      <div class="credits"> 
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
     <!-- Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade--> 
      </div>
   
    </div>
  </footer>
	 
</body>

</html>
