<?php
$currentDateTime = date('Y-m-d H:i:s'); // Get current date and time

$mysql = mysqli_connect("localhost","root","");
mysqli_select_db($mysql,"tender");
session_start();
if(isset($_SESSION['user_id'])) {
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
.img-thumnail{border-radius:450px;}
.use{font-size:18px;}
#section1{
	color:black;
}

th{height:40px;
font-size:20px;
background-color:#D2B48C;
}
td{height:40px;
font-size:20px;
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
<center>
<div class="request_form">
<form name="request" action="biddocument.php" method="POST">
<fieldset>
    <legend>Registered suppliers:</legend>

	
   &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp
&nbsp;&nbsp;&nbsp
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
   &nbsp&nbsp;&nbsp;&nbsp :&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp
   
  	  <?php
			  $result = mysqli_query($mysql," SELECT * FROM biddocument ");
			  if($result == false){
    echo "the error is".mysqli_error($mysql);
	
}
while($row = mysqli_fetch_array($result)){
$n=$row['no'];
$a=$row['item_name'];
$b=$row['close_date'];}
?>
	 <h4 color="blue">Please click assess button to evaluat the supplier as win or not</h4>

	
<!--<a href="statussearch.html#myModal" data-toggle="modal" class="btn btn-primary"><button type="button" class="btn btn-info btn-lg" >Close</button></a>
	<a href="statussearch.html#myModal" data-toggle="modal"> <button type="button" class="btn btn-info btn-lg" >Close</button></a>-->
<!--	<a href="statussearch.html?id=<?php echo $row['no'] ?>"><input type="button" name="update" id="button1" value="Close" onclick="enableButton2()"/></a></div>-->

 <table border="2" width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
				
<th>Campany Name </th><th>TIN_NO </th><th>City</th><th>Email </th><th>Telephone </th><th>FAX_NO </th><th>No </th>
<th>Prepare_Date</th> <th> Item_Name</th><th>Item_Model</th>
<th> market_birr</th><th>supplier_birr</th><th> open_date </th>
<th> close_date </th><th> Fill_Date </th><th>Status</th><th colspan="2"></th>

            </tr>
			  <?php
			  $result = mysqli_query($mysql," SELECT * FROM registerdsupplier ");
			  if($result === false){
    echo "the error is".mysqli_error($mysql);
}
while($row = mysqli_fetch_array($result)){
	
	$cname=$row['campany_name'];$tin=$row['tin_no'];$city=$row['city'];$email=$row['email'];$tele=$row['telephone'];$fax=$row['fax_no'];
		$no=$row['no'];$date=$row['prepare_date'];$cdate=$row['close_date'];$odate=$row['open_date'];
		$fdate=$row['fill_date'];$itemname=$row['item_name'];
		$itemmodel=$row['item_model'];$mbirr=$row['market_birr'];
		$supbirr=$row['supplier_birr'];
		$status=$row['status'];
		
		?>
		       
		<tr>	
		
		<td><?php echo $cname ;?></td><td><?php echo $tin ;?></td><td><?php echo $city ;?></td>
		<td><?php echo $email ;?></td><td><?php echo $tele ;?></td><td><?php echo $fax ;?></td>
<td><?php echo $no ;?></td><td><?php echo $date; ?></td> 
<td><?php echo $itemname; ?></td><td><?php echo $itemmodel; ?></td>
<td><?php echo $mbirr;  ?></td><td><?php echo $supbirr;?></td>
<td><?php echo $odate; ?></td><td><?php echo $cdate;?></td>
<td><?php echo $fdate;?></td><td style="color:red;"><?php echo $status;?></td>

<td>
    <?php 
        if($status == 'closed') {
            // If the status is closed, disable the button
            echo '<button type="button" class="btn btn-success editbtn active" disabled onclick="return confirm(\'please check market study birr filled!\')">Assess</button>';
        } else {
            // Otherwise, keep the button enabled
            echo '<button type="button" class="btn btn-success editbtn active" onclick="return confirm(\'please check market study birr filled!\')">Assess</button>';
        }
    ?>
</td>
</tr>

<?php
  }	
  $sql="SELECT * FROM  registerdsupplier";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	echo "".mysqli_error($mysql);}
    ?>
	 <tr>
              <td align="center" colspan="18" ><?php echo "Total ".$records." suppliers registered"; ?> </td>
			  
            </tr>
			<?php

?></table></fieldset></form></div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center><h4 color="blue"> Form for Supplier Evaluation</h2></center></h4>
      </div>
<form name="request" class="form-horizontal" action="assesssupreg.php" method="POST">
      <div class="modal-body">




<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;

<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Campany Name:</i></label>

<input readonly class="form-control"type="text" id="cname" name="cname"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>TIN NO:</i></label>

<input readonly class="form-control" type="text"id="tinno" name="tinno"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>City:</i></label>

<input readonly class="form-control" type="text" id="city"name="city"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Email:</i></label>

<input readonly style="width:380px"class="form-control" type="email" id="email"name="email" value="<?php echo $email?>" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Telephone:</i></label>

<input readonly class="form-control" type="text"id="tele" name="telephone" value="<?php echo $tele?>" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Fax No:</i></label>

<input readonly class="form-control" type="text" id="fax"name="fax" value="<?php echo $fax?>" ></div>
<div class="form-group">

<label class="control-label col-sm-2" for="no"><i>No:</i></label>

<input readonly class="form-control" type="text" id="no" name="no"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Prepare Date:</i></label>

<input readonly style="width:380px" class="form-control" type="date"id="date" name="date"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Item name:</i></label>

<input readonly class="form-control" type="text" id="iname"name="itemname"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>item_model:</i></label>

<input readonly class="form-control" type="text" id="imodel"name="itemmodel"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Market Study Birr:</i></label>

<input class="form-control" type="text" id="mbirr"name="mbirr"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Supplier Birr:</i></label>

<input readonly class="form-control" type="text"id="supbirr" name="supbirr" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Open Date:</i></label>

<input readonly style="width:380px" class="form-control" type="text"id="odate" name="odate" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Close Date:</i></label>

<input readonly style="width:380px" class="form-control" type="text" id="cdate"name="cdate"  ></div>
<div class="form-group">
    <label class="control-label col-sm-2" for="assess_date"><i>Assess Date:</i></label>
    <input style="width:380px" class="form-control" type="date" name="adate" value="<?php echo date('Y-m-d'); ?>" readonly>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="result"><i>Result:</i></label>


<select style="width:380px"class="form-control" name="resultt"  required>
  <option value="-1">Please select user type</option>
  <option value="Winner">Winner</option>
  <option value="Fail">Failer</option>
</select>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="reason"><i>Reason:</i></label>

<textarea class="" name="reason" rows="10" cols="30">
 
</textarea></div>
<!--
<input  class="btn btn-default" type="submit" name="register" value="Register">

&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input class="btn btn-default" type="reset" name="reset" value="Reset">-->
</fieldset>

</div>


<div class="modal-footer">
  <button type="submit" name="register" class="btn btn-sucess active" >Register</button>
  <button type="reset" name="reset" class="btn btn-info active" >Reset</button></form>
        <button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>
      </div>
    

  </div>
</div></div>

<script>
$(document).ready(function(){
	$('.editbtn').on('click',function(){
		$('#myModal').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			
			$('#cname').val(data[0]);
			$('#tinno').val(data[1]);
			$('#city').val(data[2]);
			$('#email').val(data[3]);
			$('#tele').val(data[4]);
			$('#fax').val(data[5]);
			$('#no').val(data[6]);
			$('#date').val(data[7]);
			$('#iname').val(data[8]);
			$('#imodel').val(data[9]);
				$('#mbirr').val(data[10]);
					$('#supbirr').val(data[11]);
						$('#odate').val(data[12]);
							$('#cdate').val(data[13]);
								
	});
});

</script>

</div>

<footer id="footer">
   

    <div class="container">
      <div class="copyright">
        © Copyright <strong>Wachemo University Open Tender system | 2024</strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- #footer -->

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="vendor/counterup/counterup.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/venobox/venobox.min.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="vendor/typed.js/typed.min.js"></script>
  <script src="vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
<script src="js2/main.min.js"></script>
<script src="js2/jquery.min.js"></script>
<script src="js2/bootstrap.min.js"></script>
<script src="js2/script.min.js"></script>
</body>
</html>

