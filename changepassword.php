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
  <title>Open Tender For WCU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/mystyle1.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/script.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/login33.css">
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/administrator.css">
  <link rel="stylesheet" type="text/css" href="css/request_form.css">
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:1400px;color: #fff; }
  #section2 {padding-top:50px;height:700px;color: #fff;}
  #section3 {padding-top:50px;height:700px;color: #fff; background-color: #FFFFF0;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section42 {padding-top:50px;height:1260px;color: #fff;background-color:#F0F8FF }
 
.prof{
border-radius:50px;
height:700px;
}
.img-thumnail{border-radius:450px;}
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
      <a class="navbar-brand1" href="#">Web Based Open Tender System</a>
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
              <li><a href="editprofile.php">Edit&nbsp;profile</a></li>
              <li><a href="changepassword.html">ChangePassword</a></li>
			   	    <a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</a>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
  



  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div class="request">
<link rel="stylesheet" type="text/css" href="style3.css">
<table border="1"   align="center" cellpadding="3"  cellspacing="0"align="center" bgcolnor=pink width="200"><tr><th colspan="2">
<h3><center><font color="5424787"> You to change your password for better security!!!</font></center></h3></th>

    <form  bgcolor="DDffe" action="changepassword11.php" method='POST' name='Form' target="_top"onsubmit='return validate(this)' id='form'style="box-shadow:rgba(0,0,0,0.3) 0px 0px 10px; border-radius:20px;color:blue; text-shadow:0px 0px 10px #99ccff;">
      <h3 align='center'> 
    <tr><td class="label"> &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;*Enter Old Password:</td>
 <td> <input class="input" type="password" name="oldpass" placeholder="enter old password"size="10"required> </td></tr>
 <tr> <td class="label">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;*Enter New Password:</td>
  <td><input class="input"  type="password" name="newpass" placeholder=" enter new password"size="10"required ></td></tr>
  <tr><td class="label">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;*Re Enter New Password:</td>
 <td> <input class="input" type="password" name="repeatnewpass" placeholder="Re enter newpassword:" size="10"required></td></tr>
  <tr> <td><font color="pink"><input class="inputt" type="submit" name="submit" value="Change"/></td>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
   <td><input  class="inputt" type="reset" name="submit" value="clear"/></font></td></tr>
   
  </tr>
</table></center>
</div>
</div>



<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          

        </div>
      </div>
    </div>

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
     <a href="#" class="back-to-top" style=""><i class="fa fa-chevron-up"></i></a>  
	 
</body>

</html>
