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
  #section1 {padding-top:50px;height:580px;color: #fff; }

 
.prof{
border-radius:50px;
height:700px;
}

.use{font-size:18px;}
.ttt{margin-left:1150px;
color:black;
margin-top:70px;
font-size:24px;
font-family:san serif;
}

.bb{margin-left:0px;
margin-top:0px;
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
	margin-top:30px;
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
#footer{margin-bottom:-100px;}
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
     <h3> <a class="navbar-brand1" href="#">Web Based Open tender system</a></h3>
     <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
    </div>
    
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
	
           <li> <a href="scientificdirector.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		    
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">  
     <li> <a href="viewrequestsc.php" >Request
	    (<?php echo"<strong><font color='red'>$count1</font></strong>";?>)</a></li>
		<li><a href="viewreport.php" >Report</a></li>
		<li><a href="#" ></a></li>
		     <li> <a href="viewfeedbacksc.php" >feedback From Property_Depa</a></li>
			 <li><a href="viewfeedbackfsc.php" >feedback From finance</a></li>
		
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofilepsc.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
            
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
 <a href="viewrequestsc.php"><img class="zoom"src="images/vr.png" width="200px" height="200px"></a><br><br>
<p>  View Request</p>
 </div>
  
 
 <div class="cc">
 <a href="viewfeedbacksc.php"><img class="zoom" src="images/vf.png" width="200px" height="200px"></a><br><br>
<p>  View feeback property </p>
 </div>
   <div class="dd">
  <a href="viewfeedbackfsc.php"><img class="zoom" src="images/vff.png" width="200px" height="200px"></a><br><br>
<p>    view feedback finance</p>
 </div>
 <div class="ee">
  <a href="editprofilepsc.php"><img class="zoom" src="images/ep.png" width="200px" height="200px"></a><br><br>
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
     
   
                        </div>
						   
  </footer>

	 <div id="myModal" class="modal fade" role="dialog"><div class="modal-dialog modal-md"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"><center><h4 color="blue"> Form for Registration of purchased items</h2></center></h4></div>
<form name="request" class="form-horizontal" action="itemregister.php" method="POST"><div class="modal-body"><label class="control-label col-sm-2" for="no"><i>No:</i></label>
<div class="col-sm-10">
<input class="form-control" type="text"id="no" name="no"  required></div></div><br><br>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>register Date:</i></label>
<div class="col-sm-10">
<input class="form-control" type="date"id="date1" name="date" required ></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>
<div class="col-sm-10">
<input class="form-control" type="text" id="iname1"name="itemname" required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>item Model:</i></label>
<div class="col-sm-10">
<input class="form-control" type="text" id="imodel1"name="itemmodel" required></div></div>
<div class="modal-footer">
<button  class="btn btn-success" type="submit" name="register" >Register</button>
<button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button></div></form>
  </div>
</div></div>
</body>

</html>
