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
  #section1 {padding-top:50px;height:560px;color: #fff; }

 
.prof{
border-radius:50px;
height:700px;
}
.img-thumnail{border-radius:450px;}
.use{font-size:18px;}
.label{
	font-size:19px;
	width:70px;
	
}
.inputt.input{width:500px;}
.request_form{margin-top:50px;}
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
	
           <li> <a href="procurement_request.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="prbiddocument.php" target="iframe2">Bid_Document</a></li>

	 <li> <a href="viewrequest.php" target="iframe2">Request</a></li>
	  <li> <a href="viewfeedback.php" target="iframe2">From Property_Depa(<?php echo"<strong><font color='red'>$count</font></strong>";?>)
	  
	  </a></li>
      <li> <a href="viewfeedbackfinance.php" target="iframe2">From finance(<?php echo"<strong><font color='red'>$count1</font></strong>";?>)</a></li>
        
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
              <li><a href="editprofilepr.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
             
			   	  <li>  <a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
  



  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">

<center><!---
<div class="request_form">
<form class="form-inline" name="request" action="send_request.php" method="POST">
<fieldset>
    <legend>Wollo University Procuremnt request Form</legend>
  <fieldset>
  

   &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp
&nbsp;&nbsp;&nbsp
<span class="label label-info">*Name:</span>
    <input class="inputt" type="text" name="name" placeholder="enter name" required><br><br><!---
<span class="label label-info">*Date:</span>
    <input class="form-control" type="date" name="date" placeholder="enter date" required><br><br>

   <span class="label label-info">*Reason :</span> &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp
&nbsp;&nbsp;&nbsp
   <textarea style="height:50px;"class="input" class="textarea" name="message" rows="10" cols="30" required>
please enter the reason
</textarea></fieldset><br><br>
<fieldset>
<legend>Item Discription</legend>
&nbsp;&nbsp;&nbsp*<span class="label label-info">Item name:</span><input type="text" name="itemkind" placeholder="" required><br><br>
&nbsp;&nbsp;&nbsp;<span class="label label-info">*Measurement</span>:<input class="11"type="text" name="measure" placeholder="" required><br><br>
&nbsp;&nbsp;&nbsp;<span class="label label-info">*quantity</span>: <input class="input" type="text" name="quantity" placeholder="how many items you want" required><br><br>
&nbsp;&nbsp;&nbsp;<span class="label label-info">*Unit Price</span>:<input class="input" type="text" name="unitprice" placeholder="unit price  of item" required><br><br>
  &nbsp;&nbsp;&nbsp;<span class="label label-info">Department</span>: <select style="width:380px" name="dep" class="form-control selectpicker">
      <option value="">Select your department</option>
      <option>Computer science</option>
      <option>Information system</option>
      <option >information technology</option>
      <option >software enginnering</option>
      <option >elecrical enginering</option>
      <option >chemical enginering</option>
      <option >mechanical enginering</option>
      <option >lether </option>
      <option >textile enginering</option>
	  <option > libary    </option>
	  <option >  cafe  </option>
	  <option > registrar    </option>
	  <option > student dean   </option>
	  <option > garder    </option>
	  <option >water enginering     </option>
	  <option > civil enginering   </option>
	  	  <option > procter  </option>
    </select><br><br>
&nbsp;&nbsp;&nbsp;<span class="label label-info">*Total price</span>:<input class="input"type="text" name="totalprice" placeholder="total price for all item" required><br>
&nbsp;&nbsp;&nbsp;<span class="label label-info">*description</span>:<textarea style="height:50px;" type="textarea" name="itemmodel" placeholder="" required></textarea><br><br>

</fieldset>
    <button type="submit" class="btn btn-info" name="submit">Send requewst</button>
	<!--<input type="submit" value="SendRequest" name="submit">&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp

	<button type="reset" class="btn btn-danger">Reset</button>
  </fieldset> 
</form>
</div>-->
<div class="container">

    <form class="well form-horizontal" action="send_request.php " method="post"  id="contact_form" onsubmit="#contact-form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>request  Form</b></h2></center></legend><br>
<legend>Please fill the forms correctly!:</legend>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="name" placeholder=" Name" class="form-control"  type="text"required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Reason</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
  <textarea  name="message" placeholder="reason" class="form-control"  type="textarea" required></textarea>
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >item Name</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-item"></i></span>
  <input name="itemkind" placeholder="enter item Name" class="form-control"  type="text"required>
    </div>
  </div>
</div>
  <div class="form-group">
  <label class="col-md-4 control-label">measurment</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="measure" placeholder="enter measurment" class="form-control"  type="text"required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">quantity</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="quantity" placeholder="enter quantity" class="form-control"  type="text"required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">unit price</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="unitprice" placeholder="enter unit price" class="form-control"  type="text"required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Total  price</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="totalprice" placeholder="enter total price" class="form-control"  type="text"required>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">department</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
  <input name="dep" placeholder=" enter you department" class="form-control"  type="text"required>
  
    </div>
	
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label">Discription</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
  <textarea  name="itemmodel" class="form-control"  type="textarea" placeholder="enter detail discription of the item"required></textarea>
    </div>
  </div>
</div>
  
<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button name="submit" type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSend <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
	
	<button type="reset" class="btn btn-danger">Reset</button>
  
  </div>
</div>

</fieldset>
</form>
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
