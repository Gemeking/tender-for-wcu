<?php
$mysql = mysqli_connect("localhost","root","");
mysqli_select_db($mysql,"tender");
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
   <title>Open Tender For ASU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"><!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
 <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css1/bootstrap.min.css">
   <script src="js1/jquery.min.js"></script>
      <script src="js1/bootstrap.min.js"></script>
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
.img-thumnail{border-radius:450px;}
.use{font-size:18px;}
.request_form{color:black;}
table{
	margin-top:150px;
	font-size:14px;
	
}
th{font-size:18px;
width:90px;
}
td{
	width:70px;
	font-size:16px;
	
}
.request_form{
	color:black;
}
img{margin-top:90px;}
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
	  	<img src="images/ww.jfif" width="90px" height="80px" style="margin-top:0px;margin-left:-540px;"alt="Assosa university">

    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
	
          
		    
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
  
  

      <li><a href="supplierwins.php"  target="iframe2">Winner supplier</a></li>
	  <li> <a href="supplierfails.php"  target="iframe2">supplier Fail</a></li>
		
            </ul>
          </li>
	
         
        </ul>
      </div>
    </div>
  </div>
</nav>    
     
  
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<center>

<div class="request_form">

<form name="request" action="//biddocument.php" method="POST">
<fieldset>
 <legend>winner suppliers </legend>
 <table border="2" width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
			
<th>Campany Name </th><th>TIN_NO </th><th>City</th><th>Email </th><th>Telephone </th><th>FAX_NO </th><th>No </th>
<th>Prepare_Date</th> <th> Item_Name</th><th>Discription</th>
<th> market_birr</th><th>supplier_birr</th><th> open_date </th>
<th> close_date </th><th> Assess_Date </th><th>Reason</th><th>Result</th><th>Status</th>

            </tr>
			  <?php
			  
			  $query = mysqli_query($mysql," SELECT * FROM assessdsupplier where assess='Winner' and status='Approved'");
			  if($query === false){
    echo "the error is".mysqli_error($mysql);
}
while($row = mysqli_fetch_array($query)){

	$cname=$row['campany_name'];$tin=$row['tin_no'];$city=$row['city'];$email=$row['email'];$tele=$row['telephone'];$fax=$row['fax_no'];
		$no=$row['no'];$date=$row['prepare_date'];$cdate=$row['close_date'];$odate=$row['open_date'];
		$adate=$row['assess_date'];$itemname=$row['item_name'];
		$itemmodel=$row['item_model'];$mbirr=$row['market_birr'];
		$supbirr=$row['supplier_birr'];
		$result=$row['assess'];$reason=$row['reason'];
		$status=$row['status'];
		?>
		       
		<tr>	
		
		<td><?php echo $cname ;?></td><td><?php echo $tin ;?></td><td><?php echo $city ;?></td>
		<td><?php echo $email ;?></td><td><?php echo $tele ;?></td><td><?php echo $fax ;?></td>
<td><?php echo $no ;?></td><td><?php echo $date; ?></td> 
<td><?php echo $itemname; ?></td><td><?php echo $itemmodel; ?></td>
<td><?php echo $mbirr;  ?></td><td><?php echo $supbirr;?></td>
<td><?php echo $odate; ?></td><td><?php echo $cdate;?></td>
<td><?php echo $adate;?></td><td><?php echo $reason;?></td><td><?php echo $result;?></td><td <?php if($status == "Approved" || $status == "not approved" ): ?> style="color:green;" <?php endif; ?><?php if($status == "pending..."): ?> style="color:red;" <?php endif; ?>><?php echo $status;?></td>
</tr>

<?php
  }	

	$sql="SELECT * FROM  assessdsupplier where assess='Winner' And status='Approved'";
  $res=mysqli_query($mysql,$sql);
	$rec = mysqli_num_rows($res);
	if(!$rec){
	echo "".mysqli_error($mysql);}
    ?>
	 <tr>
             <td align="center" colspan="20" style="color:blue;"><i> <h4><?php echo "Total ".$rec."  approved winner suppliers"; ?></h4></i></td>
			  
            </tr>
			<?php

?></table></fieldset></form></div></center></div>


<footer id="footer">
   

    <div class="container">
      <div class="copyright">
        © Copyright <strong>Assosa University Open Tender system | 2020</strong>. All Rights Reserved
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
