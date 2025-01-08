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
$result = mysqli_query($con,"SELECT * FROM request where status='pending...' "); 
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
  
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:570px;color: #fff; }

 
.prof{
border-radius:50px;
height:700px;
}

.use{font-size:18px;}
.ttt{margin-left:750px;
color:black;
margin-top:70px;
font-size:24px;
font-family:san serif;
}

.bb{margin-left:0px;
margin-top:20px;
color:black;
font-size:24px;
font-family:san serif;
}
.cc{margin-left:700px;
margin-top:-270px;
color:black;
font-size:24px;
font-family:san serif;
}
.dd{margin-left:950px;
margin-top:-270px;
color:black;
font-size:24px;
font-family:san serif;
}
.ee{margin-left:0px;
margin-top:0px;
color:black;
font-size:24px;
font-family:san serif;
}
.ff{margin-left:650px;
margin-top:-280px;
color:black;
font-size:24px;
font-family:san serif;
}
.gg{margin-left:950px;
margin-top:-290px;
color:black;
font-size:24px;
font-family:san serif;
}
.hr{margin-left:650px;
color:black;


}
.pull-left{
	width:500px;
	height:800px;
	
}
.profile-left{
	margin-top:0px;
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
.overlay{
	margin-top:60px;
	
}
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
     <h3> <a class="navbar-brand1" href="#">Web Based Open Tender System</a></h3>
     <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
	
           <li> <a href="supplier.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		    
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
          
    <li> <a href="sbiddocument.php"  >Bid_Document</a></li>
 <li> <a href="noticedisplay.php"  >Notice</a></li>
      <li><a href="supplierwins.php" >Winner supplier</a></li>
	  <li> <a href="supplierfails.php" >supplier Fail</a></li>
		
            </ul>
          </li>
	
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofileps.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
            
			   	    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
  

<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">

<div class="pull-left">
<div class="profile-left" style="margin-top:70px;">
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
 <div class="overlay"style="height:410px; margin-top:30px;" >
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
 <a href="sbiddocument.php"><img class="zoom"  src="images/bd.png" width="200px" height="200px"></a><br><br>
<p> View Biddocument</p>
 </div>
 <div class="cc">
 <a href="supplierwins.php"><img class="zoom"  src="images/winn.jfif" width="200px" height="200px"></a><br><br>
<p>  View  winners</p>
 </div>
  
 

 <div class="dd">
  <a href="editprofileps.php"><img class="zoom"  src="images/ep.png" width="200px" height="200px"></a><br><br>
<p>    Update Profile</p>
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
