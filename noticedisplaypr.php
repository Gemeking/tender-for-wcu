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
     <script src="js/float-panel.js"></script>
  <link rel="stylesheet" type="text/css" href="css/login33.css">
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:560px;color: #fff; overflow-x:none;}

 
.prof{
border-radius:50px;
height:700px;
}
table{
	
	margin-top:50px;
	color:black;
	font-family:san serif;
	outline:none;
	
}
td{
	
	
}
hr{
	border:0.8px solid black;
}
.mmm{width:1210px;
margin-left:70px;
        overflow-y: scroll;
		 overflow-x: hidden;
      height:500px;
}
.cc{height:2px;}
.bb{
	border:none;
 outline: none;

}
form{outline: none;}
input:focus {outline: none; }
.fff{
	background-color:#ECF0F1 	;
width:900px;
	
	}
.request_form{
	background-color:#F8F9F9  ;
	margin-top:70px;
	
}
.short{
	width:1200px;

	
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
     <h3> <a class="navbar-brand1" href="#">Web Based Open Tender Managment</a></h3>

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
              <li><a href="editprofilepr.php">Edit&nbsp;profile</a></li>
             
			   	  <li>  <a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>   
  

<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div class="request_form">
<center>
<?php 
$mysql=mysqli_connect('localhost','root','',"tender");
$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database"); 
			  $result = mysqli_query($mysql," SELECT * FROM notice ");
			  if($result === false){
    echo '<script> alert("Please try again")</sccript>'.mysqli_error($mysql);
	$i=0;
}
while($row = mysqli_fetch_array($result)){
		$tar=$row['target'];
		$title=$row['title'];
		$no=$row['reg_no'];
		$m=$row['message'];
		$date=$row['date'];
		$from=$row['post_by'];
?>	
<div class="short">	  
<table border="0" ><tr class="fff">
<td><h2>Wachemo university</h2>
<form class="form-inline" action="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<font><input style="border: none;color:green;font-size:30px;font-family:san serif;" readonly type="text"  value="<?php echo $from; ?>"></font></form><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</h1> </td><td><img src="images/ww.png" width="100px"></td> <td><h3 style="float:right;">ዋቸሞ ዩኒቨርሲቲ<h3></td></tr>
<tr>
<td colspan="3" class="cc"><hr></td></tr><tr>
<td colspan="2">
<form class="form-inline"action="">
<label>For</label><input style="border: none;border-bottom:black 0.5px solid;;"readonly  class="bb"name="target"type="text"  value="<?php echo $tar; ?>"></form></td>
<td>
<form class="form-inline" action="">
<label>Re.No/ቁጥር/WCU/</label><input style="border: none;" readonly type="text"  value="<?php echo $no; ?>"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Date</label><input style="border: none;"readonly type="text"  value="<?php echo $date; ?>"></form></td></tr>
<tr><td colspan="2"><form class="form-inline" action="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label>Titile</label><input style="border: none;border-bottom:black 0.5px solid;;"class="bb" readonly type="text"  value="<?php echo $title; ?>"></form></td><td></td></tr>
<tr><td colspan="3" class="">
<div class="mmm">
<?php echo $m; ?>
</div>
</td></tr>
</table></div>
<br><br>
<?php
}
?>
</center>

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
