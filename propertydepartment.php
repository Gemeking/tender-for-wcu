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
  #section1 {padding-top:50px;height:570px;color: #fff; }

 
.prof{
border-radius:50px;
height:700px;
}

.use{font-size:18px;}


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
	width:400px;
	height:800px;
	
}
.profile-left{
	float:left;
	width:300px;

}
.prof{	
margin-top:300px;
	margin-left:-300px;
font-size:26px;
float:left;font-family:san serif;
}
.form-control{width:500px;}

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
	
           <li> <a href="propertydepartment.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		     <li><a href="searchitem.php" >Search Item</a></li>
		  <li>  <a href="#myModal" data-toggle="modal">Register item</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="displayitem.php" >Registered_Items</a></li>
     <li> <a href="viewrequestpd.php" target="iframe2">Request
	    (<?php echo"<strong><font color='red'>$count1</font></strong>";?>)</a></li>
            </ul>
          </li>
		
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Send <span class="caret"></span></a>
            <ul class="dropdown-menu">
        
    <li>   <a href="feedbackpd.php">Feedback</a></li>
	 
        
            </ul>
			 
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofilepd.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
             <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
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


<div class="ttt">

<i>Tasks performed  by Property Department</i>
<hr>
 </div>
 <div class="bb">
 <a href="displayitem.php"><img class="zoom"  src="images/vr.jfif" width="200px" height="200px"></a><br><br>
<p> View Items</p>
 </div>
 <div class="cc">
 <a href="viewrequestpd.php"><img class="zoom"  src="images/vr.png" width="200px" height="200px"></a><br><br>
<p>  View Request</p>
 </div>
  <div class="dd">
 <a href="searchitem.php"><img class="zoom"  src="images/sitem.jfif" width="200px" height="200px"></a><br><br>
<p>  Search Item </p>
 </div>
   <div class="ee">
  <a href="#myModal" data-toggle="modal""><img class="zoom" src="images/aditem.jfif" width="200px" height="200px"></a><br><br>
<p>    Add Items</p>
 </div>
 
 <div class="ff">
  <a href="feedbackpd.php"><img class="zoom"  src="images/fs.png" width="200px" height="200px"></a><br><br>
<p>    Send Feedback to pro request</p>
 </div>
 <div class="gg">
  <a href="editprofilepd.php"><img class="zoom"  src="images/ep.png" width="200px" height="200px"></a><br><br>
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
     
	<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><center><h4 color="blue"> Form for Registration of purchased items</h2></center></h4></div>
<form name="request" class="form-horizontal" action="itemregister.php" method="POST">
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Item Id:</i></label>

<input class="form-control" type="text" id="no"name="no" required></div>
<!--
<div class="form-group"><br><br>
<label class="control-label col-sm-2" for="registerdate"><i>Date:</i></label>

<input style="width:380px;" class="form-control" type="date"id="date1" name="date"  required></div>-->
<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>

<input class="form-control" type="text" id="iname1"name="itemname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Discription:</i></label>

<textarea style="width:380px;" class="form-control" type="text" id="itemmodel"name="itemmodel" required></textarea></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>quantity:</i></label>

<input class="form-control" type="text" id="quantity"name="quantity" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>unit price:</i></label>

<input class="form-control" type="text" id="unitprice"name="unitprice" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Total price:</i></label>

<input class="form-control" type="text" id="totalprice"name="totalprice" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Winner Name:</i></label>

<input class="form-control" type="text" id="name"name="name" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Reason:</i></label>

<textarea style="width:380px;" class="form-control" type="text" id="reason"name="reason" required></textarea></div>
<div class="form-group">
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
<div class="modal-footer">
<button type="submit"  class="btn btn-success active"  name="register" >Save Data</button>
<button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button></div></form>
  </div>
</div></div>
</body>

</html>
