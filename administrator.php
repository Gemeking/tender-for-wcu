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
  <meta name="viewport" content="width=device-width, initial-scale=1"><!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
 <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css1/mystyle1.min.css">
   <script src="js1/jquery.min.js"></script>
      <script src="notify.js"></script>
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
overflow-y:none;	  
  }
  #section1 {padding-top:50px;height:550px;color: #fff; }
  #section2 {padding-top:50px;height:700px;color: #fff;}
  #section3 {padding-top:50px;height:700px;color: #fff; background-color: #FFFFF0;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section42 {padding-top:50px;height:1260px;color: #fff;background-color:#F0F8FF }
 


table{
	font-size:11px;
	margin-top:-15px;
	margin-left:-10px;
	color:black;

}


.bb{margin-left:-20px;
color:black;
margin-top:100px;
font-size:24px;
font-family:san serif;
}
.cc{margin-left:630px;
margin-top:-290px;
color:black;
font-size:24px;
font-family:san serif;
}
.dd{margin-left:860px;
margin-top:-300px;
color:black;
font-size:24px;
font-family:san serif;
}
.ee{margin-left:1050px;
margin-top:-300px;
color:black;
font-size:24px;
font-family:san serif;
}
.hr{margin-left:650px;
color:black;


}
.pull-left{
	width:400px;
	height:800px;
	
}
.profile-left{
	float:left;
	width:300px;
border:solid 1px black;
}
.prof{	
margin-top:300px;
	margin-left:-300px;
font-size:26px;
float:left;font-family:san serif;
}



  </style>
  
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" style="overflow-y:none;">

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
  <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
     <h3> <a class="navbar-brand1" href="#">Web Based Open tender system</a></h3>
     <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
	
           <li> <a href="administrator.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
  <li><a href="userregister.php"  >User Registration</a></li>
  
      <li> <a href="blockaccount.php" target="iframe2">Active Account</a></li>
    <li><a href="deactivateaccount.php" target="iframe2">Blocked Account</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofile.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
             
			   	  <li> <a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
  



  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div class="pull-left">
<div class="profile-left" style="margin-left:-10px;">
  <?php 
include("login33.php");
 $r=$_SESSION['user_id'];
$logout_query=mysqli_query($con,"select * from users where user_id='$r'");
$row=mysqli_fetch_array($logout_query);
$u=$row['username'];
$p=$row['password'];
$type=$row['usertype'];
$con = mysqli_connect("localhost","root","");
$p=mysqli_select_db($con,"tender");
if(!$p){echo "error".mysqli_error($con);}
	 $query = "SELECT * FROM users where user_id='$r' ";
   $result_set=mysqli_query($con,$query);
   if(!$result_set){echo "eror".mysqli_error($con);}
   $rowCheck = mysqli_num_rows($result_set);
		while($row=mysqli_fetch_array($result_set)){
            $rr=$row['profile'];
echo'<img src="data:image/jpg;base64,'.base64_encode($rr ).'" height="300"  width="300" class="img-thumnail" /> ';
		
		}
 ?>
 <div class="overlay">
    <div class="text">
	<?php
//session_start();
$r=$_SESSION['user_id'];
$logout_query=mysqli_query($con,"select firstname,lastname from users where user_id='$r'");
$row=mysqli_fetch_array($logout_query);
$fn=$row['firstname'];
$ln=$row['lastname'];
?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>

<font color="#071AF2 bold" size="20px" ><?php echo $fn;?></font></p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>
<font color="#071AF2 bold" size="20px"><?php echo $ln ;?></font></b>

	
			</div>
  </div>
   </div>
<div class="prof">
<?php
//session_start();
$r=$_SESSION['user_id'];
$logout_query=mysqli_query($con,"select * from users where user_id='$r'");
$row=mysqli_fetch_array($logout_query);
$u=$row['username'];
$p=$row['password'];
$type=$row['usertype'];
?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><font color="green "  >Welcome:<b></font></b>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="green" ><?php echo $type;?></font></p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#d45"><?php echo $row['firstname'] ;?></font></b>


</div>
</div>



 <div class="bb">
 <a href="userregister.php"><img class="zoom" src="images/q.jfif" width="200px" height="200px"></a><br><br>
<p> User Registration</p>
 </div>
 <div class="cc">
 <a href="blockaccount.php"><img class="zoom" src="images/l.png" width="200px" height="200px"></a><br><br>
<p>  Active Account</p>
 </div>
  <div class="dd">
 <a href="deactivateaccount.php"><img class="zoom" src="images/bu.jfif" width="200px" height="200px"></a><br><br>
<p>   Blocked Account</p>
 </div>
   <div class="ee">
  <a href="editprofile.php"><img class="zoom" src="images/ep.png" width="200px" height="200px"></a><br><br>
<p>    &nbsp;&nbsp;&nbsp&nbsp;&nbsp;Edit profile</p>
 </div>
<div class="hr">
<hr>
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
    
	 <!--
	<?php
//session_start();
$r=$_SESSION['user_id'];
$logout_query=mysqli_query($con,"select * from users where user_id='$r'");
$row=mysqli_fetch_array($logout_query);
$f=$row['firstname'];
$u=$row['username'];
$p=$row['password'];
$type=$row['usertype'];
?><div data-notify="container" class="col-xs-11 col-sm-4 alert alert-info alert-with-icon animated fadeInDown" role="alert" data-notify-position="top-right" 
	 style="width:600px;height:200px;display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; top: 20px; right: 20px;">
	 <button type="button" aria-hidden="true" class="close" data-notify="dismiss" style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1033;">×</button>
	 <span data-notify="icon" class="pe-7s-gift"></span> <span data-notify="title"></span> 
	 <span data-notify="message"><b><center>
	 </b><h1 color="green">Welcome <?php echo $f;?><br><br>You Login As <?php echo $type;?></h1></center>
	 </b></span><b>
	 <a href="#" target="_blank" data-notify="url"></a></b>
	
	 </div>-->
</body>

</html>
