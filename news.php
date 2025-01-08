
<!DOCTYPE html>
<?php

include("login33.php");
?>
<html>
<head>
  <title>Open Tender For WCU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"><!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>--->
  <link rel="stylesheet" href
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
  #section1 {padding-top:50px;height:900px;color: #fff; }
  #section2 {padding-top:50px;height:700px;color: #fff;}
  #section3 {padding-top:50px;height:700px;color: #fff; background-color: #FFFFF0;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section42 {padding-top:50px;height:1260px;color: #fff;background-color:#F0F8FF }
 
.prof{
border-radius:50px;
height:700px;
}
table{
	width:700px;
	margin-top:50px;
	color:black;
	font-family:san serif;
	outline:none;
	
}
hr{
	border:0.8px solid black;
}
.mmm{width:1200px;
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
	background-color:#ECF0F1    ;
  width:1100px;
  margin-left:700px;
  padding-left:400x;
}
.request_form{
	background-color:#F8F9F9  ;
	margin-top:70px;
	
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
     <h3> <a class="navbar-brand1" href="#">Web Based Open tender system</a></h3>
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
<table border="0" style="width:700px;" bgcolor="yellow" ><tr class="fff">
<td><h3>Wachemo university</h3>
<form class="form-inline" action="">
<font><input style="border: none;color:green;font-size:30px;font-family:san serif;" readonly type="text"  value="<?php echo $from; ?>"></font></form><br>

</h1> </td><td><img src="images/ww.png" width="100px"></td> <td><h3 style="float:right;">ዋቸሞ ዩኒቨርሲቲ<h3></td></tr>
<tr>

<td colspan="2" >
<form class="form-inline"action="">
<label  >For </label><input style="border: none;border-bottom:black 0.5px solid;;"readonly  class="bb"name="target"type="text"  value="<?php echo $tar; ?>"></form></td>
<td>
<form class="form-inline" action="">  &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp
&nbsp;&nbsp;&nbsp
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<label style="margin-left:200px;">Re.No/ቁጥር/WCU/</label><input style="border: none;margin-left:-30px" readonly type="text"  value="<?php echo $no; ?>"><br>
<label style="margin-left:300px;">Date</label><input style="border: none;"readonly type="text"  value="<?php echo $date; ?>"></form></td></tr>
<tr><td colspan="4"><form class="form-inline" action="">
<label style="margin-left:400px;">Titile</label><input style="border: none;border-bottom:black 0.5px solid;;"class="bb" readonly type="text"  value="<?php echo $title; ?>"></form></td></tr>
<tr><td colspan="3" class="">
<div class="mmm">
<?php echo $m; ?>
</div>
</td></tr>
</table>
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
="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css1/mystyle1.min.css">
   <script src="js1/jquery.min.js"></script>
      <script src="js1/script.min.js"></script>
<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="css/animate/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/login33.css">
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:900px;color: #fff;}
  #section2 {padding-top:50px;height:700px;color: #fff;}
  #section3 {padding-top:50px;height:700px;color: #fff; background-color: #FFFFF0;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section42 {padding-top:50px;height:1260px;color: #fff; }
 

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
     <h3> <a class="navbar-brand1" href="#">WebBased Open Tender</a></h3>
     <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
          <li class="current-menu-item"><a href="index.php" ><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;Home</a></li>
             <li><a href="#section2" ><span class="glyphicon glyphicon-aboutus"></span>AboutUs</a>
            </li>
            <li><a href="#contact" ><span class="glyphicon glyphicon-earphone"></span>Contact Us</a></li>
			
			<li><a href="news.php" ><span class="glyphicon glyphicon-quationmark"></span>News</a></li>
			<li><a href="#helpmodal"data-toggle="modal" ><span class="glyphicon glyphicon-question-sign"></span>Help</a></li>
            
             <li><a href="#myModal"data-toggle="modal" data-target="#myModal" ><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;login</li></a>
          
        </ul>
      </div>
    </div>
  </div>
</nav>    
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<center>
  <div class="notice" style="color:black;font-family:san serif;font-size:20px;">

          <p> Notice</p>
 <hr>
			  <?php 
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
			  $query = mysqli_query($mysql," SELECT * FROM news ORDER BY nid DESC 
                        LIMIT 1");
		
			 if(!empty($query)){
				 
				  while($row=mysqli_fetch_array($query)){
			 $new=$row['message'];
			 echo $new;
			 
			 }}
			 else{
				 
				
			echo"<script>alert('no posted news!');</script>".mysqli_error($mysql);
			 
			 }
			
			 
			
			?>	  




</div></center>
</div>
<div id="section41" class="container-fluid">

</div>
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            

            <div id="social"> 
           </a><p><a href="#"> </a><a class="facebookBtn smGlobalBtn" style="height:5px, width:5px" href="https://www.facebook.com/WachemoUniversity111/?ref=br_rs" target="_blank"></a>
			<a class="twitterBtn smGlobalBtn" href="#" target="_blank"></a>
			<a class="googleplusBtn smGlobalBtn"></a>
		<a class="youtubeBtn smGlobalBtn" href="#" target="_parent"></a>
		</p>
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
    </div><div style="width: 100%;">  <a href="developer.php" style="color: red "><b> Developer</b></a>
                        </div>
  </footer>
     
</body>

</html>
