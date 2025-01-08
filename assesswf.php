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
  #section1 {padding-top:50px;height:590px;color: #fff; }

.prof{
border-radius:50px;
height:700px;
}
.img-thumnail{border-radius:450px;}
.use{font-size:18px;}
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
     <h3> <a class="navbar-brand1" href="#">Web Based Open Tender system</a></h3>
	 <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
	
           <li> <a href="procurement_Approving_committee.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		    
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
          
    <li>  <a href="assesswf.php" target="iframe2">Assessd supplier</a></li>
            </ul>
          </li>
	
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofileppa.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
            
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
<form name="request" action="//biddocument.php" method="POST">
<fieldset>
    <legend>Assessed suppliers:</legend>

	
   &nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp
&nbsp;&nbsp;&nbsp
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp&nbsp;
   &nbsp&nbsp;&nbsp;&nbsp :&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp
   
  	  <?php
			  $result = mysqli_query($mysql," SELECT * FROM biddocument ");
			  if($result == false){
    echo "".mysqli_error($mysql);
	
}
while($row = mysqli_fetch_array($result)){
$n=$row['no'];
$a=$row['item_name'];
$b=$row['close_date'];}
?>
	 <h4 color="blue">Please click approve button to approve the supplier as winner or fail</h4>

	
	 <!--<a href="statussearch.html#myModal" data-toggle="modal" class="btn btn-primary"><button type="button" class="btn btn-info btn-lg" >Close</button></a>
	<a href="statussearch.html#myModal" data-toggle="modal"> <button type="button" class="btn btn-info btn-lg" >Close</button></a>-->
<!--	<a href="statussearch.html?id=<?php echo $row['no'] ?>"><input type="button" name="update" id="button1" value="Close" onclick="enableButton2()"/></a></div>-->

 <table border="2" width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <th colspan="20"> winner supplier assessd by procurement team</th>
				<tr>
				<th>Id </th>
<th>Campany Name </th><th>TIN_NO </th><th>City</th><th>Email </th><th>Telephone </th><th>FAX_NO </th><th>No </th>
<th>Prepare_Date</th> <th> Item_Name</th><th>Item_Model</th>
<th> market_birr</th><th>supplier_birr</th><th> open_date </th>
<th> close_date </th><th> Assess_Date </th><th>Reason</th><th>Result</th><th>Status</th><th colspan="2">Approve</th>

            </tr>
			  <?php
			  
			  $query = mysqli_query($mysql," SELECT * FROM assessdsupplier where assess='Winner'");
			  if(!empty($query)){
while($row = mysqli_fetch_array($query)){
$id=$row['id'];
	$cname=$row['campany_name'];$tin=$row['tin_no'];$city=$row['city'];$email=$row['email'];$tele=$row['telephone'];$fax=$row['fax_no'];
		$no=$row['no'];$date=$row['prepare_date'];$cdate=$row['close_date'];$odate=$row['open_date'];
		$adate=$row['assess_date'];$itemname=$row['item_name'];
		$itemmodel=$row['item_model'];$mbirr=$row['market_birr'];
		$supbirr=$row['supplier_birr'];
		$result=$row['assess'];$reason=$row['reason'];
		$status=$row['status'];
		?>
		       
		<tr>	
		<td><?php echo $id ;?></td>
		<td><?php echo $cname ;?></td><td><?php echo $tin ;?></td><td><?php echo $city ;?></td>
		<td><?php echo $email ;?></td><td><?php echo $tele ;?></td><td><?php echo $fax ;?></td>
<td><?php echo $no ;?></td><td><?php echo $date; ?></td> 
<td><?php echo $itemname; ?></td><td><?php echo $itemmodel; ?></td>
<td><?php echo $mbirr;  ?></td><td><?php echo $supbirr;?></td>
<td><?php echo $odate; ?></td><td><?php echo $cdate;?></td>
<td><?php echo $adate;?></td><td><?php echo $reason;?></td><td><?php echo $result;?></td><td <?php if($status == "Approved" || $status == "not approved" ): ?> style="color:green;" <?php endif; ?><?php if($status == "pending..."): ?> style="color:red;" <?php endif; ?>><?php echo $status;?></td>
<td style="color:green;"><button type="button" class="btn btn-primary btn-sm active  editbtn"  onclick="return confirm('please check and click accept or reject!')">Approve</button></td>
</tr>

<?php
			  }
  $sql="SELECT * FROM  assessdsupplier where assess='Winner'";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	$sql="SELECT * FROM  assessdsupplier where assess='Winner' And status='Approved'";
  $res=mysqli_query($mysql,$sql);
	$rec = mysqli_num_rows($res);
	if(!$records){
	echo " no assessd supplier";
	}
    ?>
	 <tr>
             <td align="center" colspan="20" style="color:blue;"><i> <?php echo "Total ".$records." winner suppliers"; ?><?php echo","?> <?php echo $rec." approved"; ?></marquee></h4></i></td>
			  
            </tr>
			<?php
	}
			  else{
				  echo"<script> alert('There is no  winner assessd supplier please wait  the team assess...');</script>";
				  
			  }
?></table></fieldset></form>
<!--- 2nd table $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$4-->
<table border="2" width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
                  <th colspan="20">supplier not win assessed by procurement team</th>
				<tr>
				<th>Id </th>
<th>Campany Name </th><th>TIN_NO </th><th>City</th><th>Email </th><th>Telephone </th><th>FAX_NO </th><th>No </th>
<th>Prepare_Date</th> <th> Item_Name</th><th>Item_Model</th>
<th> market_birr</th><th>supplier_birr</th><th> open_date </th>
<th> close_date </th><th> Assess_Date </th><th>Reason</th><th>Result</th><th>Status</th><th colspan="2">Approve</th>

            </tr>
			  <?php
			  $query = mysqli_query($mysql," SELECT * FROM assessdsupplier where assess='Fail'"); 
	if(!empty($query)){
  while($row = mysqli_fetch_array( $query)){
	$id=$row['id'];
	$cname=$row['campany_name'];$tin=$row['tin_no'];$city=$row['city'];$email=$row['email'];$tele=$row['telephone'];$fax=$row['fax_no'];
		$no=$row['no'];$date=$row['prepare_date'];$cdate=$row['close_date'];$odate=$row['open_date'];
		$adate=$row['assess_date'];$itemname=$row['item_name'];
		$itemmodel=$row['item_model'];$mbirr=$row['market_birr'];
		$supbirr=$row['supplier_birr'];
		$result=$row['assess'];$reason=$row['reason'];$status=$row['status'];
		
		?>
		       
		<tr>	
			<td><?php echo $id ;?></td>
		<td><?php echo $cname ;?></td><td><?php echo $tin ;?></td><td><?php echo $city ;?></td>
		<td><?php echo $email ;?></td><td><?php echo $tele ;?></td><td><?php echo $fax ;?></td>
<td><?php echo $no ;?></td><td><?php echo $date; ?></td> 
<td><?php echo $itemname; ?></td><td><?php echo $itemmodel; ?></td>
<td><?php echo $mbirr;  ?></td><td><?php echo $supbirr;?></td>
<td><?php echo $odate; ?></td><td><?php echo $cdate;?></td>
<td><?php echo $adate;?></td><td><?php echo $reason;?></td><td><?php echo $result;?></td><td <?php if($status == "Approved" || $status == "not approved" ): ?> style="color:green;" <?php endif; ?><?php if($status == "pending..."): ?> style="color:red;" <?php endif; ?>><?php echo $status;?></td>
<td style="color:green;"><button type="button" class="btn btn-primary active   approvebtn"  onclick="return confirm('please check and click accept or reject!')">Approve</button></td>
</tr>

<?php
  }	
  $sql="SELECT * FROM  assessdsupplier where assess='Fail'";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	$sql="SELECT * FROM  assessdsupplier where assess='Fail' and status='Approved'";
	//$sq="SELECT * FROM  assessdsupplier where result='Fail' and status='not approved'";
  $res=mysqli_query($mysql,$sql);
 // $r=mysqli_query($mysql,$sq);
	$rec = mysqli_num_rows($res);
	//$re = mysqli_num_rows($r);
	if(!$records){
	echo "the error is".mysqli_error($mysql);}
    ?>
	 <tr>
              <td align="center" colspan="20" style="color:blue;"><i><h4><?php echo "Total ".$records." suppliers are fail"; ?> <?php echo","?><?php echo $rec."approve"; ?></marquee></h4></i></td>
			  
            </tr>
			<?php
	}
else{
				  echo"<script> alert('There is no fail assessd supplier please wait  the team assess...');</script>";
		
			  }
?></table></fieldset></form>
<!--1st mdal#########################################################################################################---->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center><h4 color="blue"> Form for approve winner supplier</h2></center></h4>
      </div>
<form name="request" class="form-horizontal" action="updatestatusapprove.php" method="POST">
      <div class="modal-body">




<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>ID</i></label>

<input readonly class="form-control"type="text" id="id" name="id"  required></div>
<div class="form-group">
<label  class="control-label col-sm-2" for="no"><i>Campany Name:</i></label>

<input readonly class="form-control"type="text" id="cname" name="cname"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>TIN NO:</i></label>

<input readonly readonly class="form-control" type="text"id="tinno" name="tinno"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>City:</i></label>

<input readonly class="form-control" type="text" id="city"name="city"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Email:</i></label>

<input readonly style="width:380px;"class="form-control" type="email" id="email"name="email" value="<?php echo $email?>" ></div>
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

<input readonly style="width:380px;" class="form-control" type="date"id="date" name="date"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Item name:</i></label>

<input readonly class="form-control" type="text" id="iname"name="itemname"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>item Model:</i></label>

<input readonly class="form-control" type="text" id="imodel"name="itemmodel"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Market Study Birr:</i></label>

<input readonly class="form-control" type="text" id="mbirr"name="mbirr"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Supplier Birr:</i></label>

<input readonly class="form-control" type="text"id="supbirr" name="supbirr" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Open Date:</i></label>

<input readonly class="form-control" type="text"id="odate" name="odate" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Close Date:</i></label>

<input readonly class="form-control" type="text" id="cdate"name="cdate"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Assess Date:</i></label>

<input readonly style="width:380px;"class="form-control" type="date" id="adate" name="adate"  required></div>
<div class="form-group">
    <label class="control-label col-sm-2" for="assess_date"><i>approved Date:</i></label>
    <input style="width:380px" class="form-control" type="date" name="adate" value="<?php echo date('Y-m-d'); ?>" readonly>
</div>

<div class="form-group">
<label class="control-label col-sm-2" for="result"><i>Result:</i></label>

<select style="width:380px;"class="form-control" id="result" name="resultt"  required=" ">
  <option value="-1">Please select user type</option>
  <option value="Winner">Winner</option>
  <option value="Fail">Failer</option>
</select>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="reason"><i>Reason:</i></label>

<textarea style="width:380px;"class="form-control" id="reason" name="reason" rows="10" cols="30">
 write the reason
</textarea></div>



&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</fieldset>

</div>


<div class="modal-footer">
<button  class="btn btn-success active" type="submit" name="register" >Accept</button>
<button class="btn btn-info active" type="submit" name="reject" >Reject</button>
        <button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>
      </div></form>
    

  </div>
</div></div></div>
<!--2nd modal &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
<div id="myModall" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center><h4 color="blue"> Form for approve  suppliers fail</h2></center></h4>
      </div>
<form name="request" class="form-horizontal" action="updatestatusapprove.php" method="POST">
      <div class="modal-body">




<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>ID</i></label>

<input readonly class="form-control"type="text" id="id1" name="id"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Campany Name:</i></label>

<input readonly class="form-control"type="text" id="cname1" name="cname"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>TIN NO:</i></label>

<input readonly class="form-control" type="text"id="tinno1" name="tinno"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>City:</i></label>

<input readonly class="form-control" type="text" id="city1"name="city"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Email:</i></label>

<input readonly style="width:380px;"class="form-control" type="email" id="email1"name="email" value="<?php echo $email?>" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Telephone:</i></label>

<input readonly class="form-control" type="text"id="tele1" name="telephone" value="<?php echo $tele?>" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Fax No:</i></label>

<input readonly class="form-control" type="text" id="fax1"name="fax" value="<?php echo $fax?>" ></div>
<div class="form-group">

<label class="control-label col-sm-2" for="no"><i>No:</i></label>

<input readonly class="form-control" type="text" id="no1" name="no"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Prepare Date:</i></label>

<input readonly style="width:380px;"class="form-control" type="date"id="date1" name="date"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Item name:</i></label>

<input readonly class="form-control" type="text" id="iname1"name="itemname"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>item Model:</i></label>

<input readonly class="form-control" type="text" id="imodel1"name="itemmodel"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Market Study Birr:</i></label>

<input readonly class="form-control" type="text" id="mbirr1"name="mbirr"  ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Supplier Birr:</i></label>

<input readonly class="form-control" type="text"id="supbirr1" name="supbirr" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Open Date:</i></label>

<input readonly class="form-control" type="text"id="odate1" name="odate" ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Close Date:</i></label>

<input readonly class="form-control" type="text" id="cdate1"name="cdate"  ></div>
<div class="form-group">
    <label class="control-label col-sm-2" for="assess_date"><i>Assess Date:</i></label>
    <input style="width:380px" class="form-control" type="date" name="adate" value="<?php echo date('Y-m-d'); ?>" readonly>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="no">approved Date<i>:</i></label>

<input style="width:380px;"class="form-control" type="date" id="adate" name="adate"  required></div>

<div class="form-group">
<label class="control-label col-sm-2" for="result"><i>Result:</i></label>

<select style="width:380px;"class="form-control" id="result1" name="resultt"  required=" ">
  <option value="-1">Please select user type</option>
  <option value="Winner">Winner</option>
  <option value="Fail">Failer</option>
</select>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="reason"><i>Reason:</i></label>

<textarea style="width:380px;"class="form-control" id="reason1" name="reason" rows="10" cols="30">
 
</textarea></div>



&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</fieldset>

</div>


<div class="modal-footer">
<button  class="btn btn-success active" type="submit" name="register">Accept</button>
<button class="btn btn-info active" type="submit" name="reject" >Reject</button>
        <button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>
      </div></form>
    

  </div>
</div></div></div>


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

	 <!---end of  2nd modal ***************************************************************************************************-->

<!--- script for first modal******************************************************************************-->
<script>
$(document).ready(function(){
	$('.editbtn').on('click',function(){
		$('#myModal').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			$('#id').val(data[0]);
			$('#cname').val(data[1]);
			$('#tinno').val(data[2]);
			$('#city').val(data[3]);
			$('#email').val(data[4]);
			$('#tele').val(data[5]);
			$('#fax').val(data[6]);
			$('#no').val(data[7]);
			$('#date').val(data[8]);
			$('#iname').val(data[9]);
			$('#imodel').val(data[10]);
				$('#mbirr').val(data[11]);
					$('#supbirr').val(data[12]);
						$('#odate').val(data[13]);
						$('#cdate').val(data[14]);
							$('#adate').val(data[15]);
							$('#reason').val(data[16]);
							$('#result').val(data[17]);
							
							
								
	});
});
</script>
<!--script for 2nd modal********************************************************************************-->

<script>
$(document).ready(function(){
	$('.approvebtn').on('click',function(){
		$('#myModall').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			$('#id1').val(data[0]);
			$('#cname1').val(data[1]);
			$('#tinno1').val(data[2]);
			$('#city1').val(data[3]);
			$('#email1').val(data[4]);
			$('#tele1').val(data[5]);
			$('#fax1').val(data[6]);
			$('#no1').val(data[7]);
			$('#date1').val(data[8]);
			$('#iname1').val(data[9]);
			$('#imodel1').val(data[10]);
				$('#mbirr1').val(data[11]);
					$('#supbirr1').val(data[12]);
						$('#odate1').val(data[13]);
						$('#cdate1').val(data[14]);
							$('#adate1').val(data[15]);
							$('#reason1').val(data[16]);
							$('#result1').val(data[17]);
							
							
								
	});
});

</script>
</body>

</html>
