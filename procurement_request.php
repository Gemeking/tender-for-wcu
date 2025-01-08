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
 			<?php 

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"tender");
$result = mysqli_query($con,"SELECT * FROM feedbackfin where status='pending...' "); 
//$num_rows = mysqli_num_rows($result); 
$count1=($result? mysqli_affected_rows($con):0);


?>
<?php 

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"tender");
$result = mysqli_query($con,"SELECT * FROM feedback where status='pending...' "); 
$count=($result? mysqli_affected_rows($con):0);


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
 
  <link rel="stylesheet" href="css1/mystyle1.min.css">
   <script src="js1/jquery.min.js"></script>
      <script src="js1/script.min.js"></script>
 <link href="css/animate/animate.min.css" rel="stylesheet">
 <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">
  <script src="lib/wow/wow.min.js"></script>
     <script src="js/float-panel.js"></script>
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

 


table{
	font-size:11px;
	margin-top:-15px;
	margin-left:-10px;
	color:black;

}


.bb{margin-left:0px;
margin-top:-20px;
color:black;
font-size:24px;
font-family:san serif;
}
.cc{margin-left:700px;
margin-top:-300px;
color:black;
font-size:24px;
font-family:san serif;
}
.dd{margin-left:950px;
margin-top:-300px;
color:black;
font-size:24px;
font-family:san serif;
}
.ee{margin-left:0px;
margin-top:-70px;
color:black;
font-size:24px;
font-family:san serif;
}
.ff{margin-left:650px;
margin-top:-300px;
color:black;
font-size:24px;
font-family:san serif;
}
.gg{margin-left:950px;
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
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="backtop">&#9650;</div>
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
	
          
        <li> <a href="procurement_request.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="prbiddocument.php" target="iframe2">Bid_Document</a></li>
 <li>  <a href="noticedisplaypr.php" target="iframe2">Notice</a></li>
	 <li> <a href="viewrequest.php" target="iframe2">Request</a></li>
	  <li> <a href="viewfeedback.php" target="iframe2"> Feedback From Property_Depa(<?php echo"<strong><font color='red'>$count</font></strong>";?>)
	  
	  </a></li>
      <li> <a href="viewfeedbackfinance.php" target="iframe2">Feedback From finance(<?php echo"<strong><font color='red'>$count1</font></strong>";?>)</a></li>
        
            </ul>
			 
          </li>
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Send <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>  <a href="request_form.php" target="iframe2">Request</a>
     </li>
    <li>   <a href="prfeedback.php" target="iframe2">Feedback</a></li>
	 
        
            </ul>
			 
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofilepr.php"><span class="glyphicon glyphicon-edit"></span>Editprofile</a></li>
             
			   	  <li>  <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
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
<div class="profile-left">
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
<p><font color="green"  >Welcome:<b></font></b>&nbsp;&nbsp;&nbsp;&nbsp;
<font color="green" ><?php echo $type;?></font></p><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><font color="#d45"><?php echo $row['firstname'] ;?></font></b>


</div>
</div>
 <div class="bb">
 <a href="prbiddocument.php"><img class="zoom" src="images/bd.png" width="200px" height="200px"></a><br><br>
<p> View Bid document</p>
 </div>
 <div class="cc">
 <a href="viewrequest.php"><img class="zoom"  src="images/vr.png" width="200px" height="200px"></a><br><br>
<p>  View Request</p>
 </div>
  <div class="dd">
 <a href="viewfeedback.php"><img class="zoom"  src="images/vf.png" width="200px" height="200px"></a><br><br>
<p>  View feeback property </p>
 </div><br><br>
   <div class="ee">
  <a href="viewfeedbackfinance.php"><img class="zoom"  src="images/vff.png" width="200px" height="200px"></a><br><br>
<p>    view feedback finance</p>
 </div>
 <div class="ff">
  <a href="request_form.php"><img class="zoom"  src="images/srr.png" width="200px" height="200px"></a><br><br>
<p>    Send Request</p>
 </div>
 <div class="gg">
  <a href="prfeedback.php"><img class="zoom"  src="images/fs.png" width="200px" height="200px"></a><br><br>
<p>    Send Feedback to pro_team</p>
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
   
	 
</body>

</html>
