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


.bb{margin-left:0px;
margin-top:0px;
color:black;
font-size:24px;
font-family:san serif;
}
.cc{margin-left:700px;
margin-top:-260px;
color:black;
font-size:24px;
font-family:san serif;
}
.dd{margin-left:990px;
margin-top:-260px;
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
.hh{margin-left:110px;
margin-top:-30px;
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
	
           <li> <a href="procurementteam.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		    
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
            <li><a href="disregisterdsup.php" >Registered supplier</a></li>
			 <li><a href="approvedrequest.php" >approved request</a></li>
			<li> <a href="supplierwin.php" >winner</a></li>
     <li> <a href="feedbackpr.php" >Feedback</a></li>
		
            </ul>
          </li>
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Notify <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
         <li> <a href="supplierwin.php" >winner supplier</a></li>
      <li><a href="supplierfail.php" >suppliers fail</a></li>
            </ul>
          </li>
		    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Report <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
         <li> <a href="gensupplier.php" > Generate Registered Suppliers</a></li>
      <li><a href="genitems.php" > Generate Purchased items</a></li>
	  <li><a href="upload.php" > upload generated report</a></li>
            </ul>
          </li>
		     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Post <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
         <li> <a href="post.php" > News</a></li>
      <li><a href="notice.php" > Notice</a></li>
	  
            </ul>
          </li>
		     <li> <a href="searchsup.php" >Search</a></li>
			 <li><a href="assess.php" >Assess</a></li>
		
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofileppt.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
            
			   	    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
  
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<table border="1" style="color:black;margin-top:70px;" width="900" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>fid </th>
<th>First Name </th> <th>Last Name </th><th>Email </th><th> date </th><th>Feedback</th>
<th colspan="2">View</th>
            </tr>
			  <?php
			  $result = mysqli_query($con,"SELECT * FROM feedbackpr");
			  if($result === false){
     echo '<script> alert("please try again")</sccript>'.mysqli_error($con);
}
while($show = mysqli_fetch_array($result)){
	if(!$show){    echo "the wrong".mysqli_error($con);}
		$fid=$show['fid'];$firstname=$show['firstname'];$email=$show['email'];$date=$show['date'];
		$feedback=$show['message'];$lastname=$show['lastname'];
		?>
		       
		<tr>	
<td><?php echo $fid ?></td><td><?php echo $firstname ?></td> <td><?php echo $lastname ?></td>
<td><?php echo $email ?></td>
<td><?php echo $date ?></td>
<td><?php echo $feedback ?></td>
<td><!---<a href="accept.php?id=<?php echo $show['rid'] ?>">-->
<button type="button" class="btn btn-primary detailbtn"> Detail </button></td>
<td style="color:blue;"><button type="button" class="btn btn-primary active   deletebtn">Delete</button></td>
</tr>
<?php
  }	
  $sql="SELECT * FROM feedbackpr ";
  $result=mysqli_query($con,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	 echo '<script> alert("No feedback found")</sccript>'.mysqli_error($con);}
    ?>
	 <tr>
              <td align="center" colspan="15" ><?php echo "Total ".$records." feedback"; ?> </td>
            </tr>
			<?php
print( "</table>");
?>




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

	<div id="detailmodal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h2 class="modal-title"><center><i><h2 color="blue"> view Information</h2></i></center></h2></div>
<form action="read.php" name="request" class="form-horizontal"  method="POST">
<div class="modal-body">
<div class="form-group">
<label class="control-label col-sm-2" for="rid"><i>fId:</i></label>

<input readonly class="form-control" type="text"id="fid" name="fid"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="firstname"><i>First Name</i></label>

<input disabled class="form-control" type="text"id="fname" name="fname"  required></div>

<div class="form-group">
<label class="control-label col-sm-2" for="lastname"><i>Last name:</i></label>

<input disabled class="form-control" type="text" id="lname" name="lname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="email"><i>Email:</i></label>

<input disabled class="form-control" type="text" id="email"name="email" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="date"><i>Date</i></label>

<input style="width:380px;"disabled class="form-control" type="date"id="date" name="date"  required></div>

<div class="form-group">
<label class="control-label col-sm-2" for="feedback"><i>Feedback</i></label>

<textarea style="width:380px;" disabled class="form-control" type="textarea"id="feedback" name="feedback"  required></textarea></div>
<div class="modal-footer">
<button type="submit" name="readdata" class="btn btn-info active" data-dismiss="modal"> ok,read! </button>
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close </button></div></form></div></div></div>
</div></div>
<div id="DeleteModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

<h2 class="modal-title"><center><h4 color="blue"> Delete items</h4></h2></center></h4></div>
<form name="request" class="form-horizontal" action="deletefeedbackpr.php" method="POST">
<div class="modal-body">
<input type="hidden" name="delete_id" id ="delete_id">
<h3>Are you sure to delete this item?</h3>

<div class="modal-footer"><button type="submit" name="deletedata" class="btn btn-success active" >ok!delete it.</button><button type="button" class="btn btn-danger active" data-dismiss="modal">NO</butto</div></form></div>
</div></div></div>

<script>
$(document).ready(function(){
	$('.detailbtn').on('click',function(){
		$('#detailmodal').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			$('#fid').val(data[0]);
			$('#fname').val(data[1]);
			$('#lname').val(data[2]);
			$('#email').val(data[3]);
			$('#date').val(data[4]);
			$('#feedback').val(data[5]);
			
				
							
							
								
	});
});
</script>
<script>
$(document).ready(function(){
	$('.deletebtn').on('click',function(){
		$('#DeleteModal').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			$('#delete_id').val(data[0]);
			
				
							
							
								
	});
});
</script>
</body>

</html>
