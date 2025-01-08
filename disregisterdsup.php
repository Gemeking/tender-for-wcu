<?php
// Database connection
$mysql = mysqli_connect("localhost", "root", "", "tender");

// Check if user is logged in
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
} else {
    $mail = $_SESSION['user_id'];
    $n = $_SESSION['username'];
}

// Check tender close dates and update status if necessary
$current_date = date('Y-m-d');
$query = "SELECT * FROM request WHERE status = 'pending...'";
$result = mysqli_query($mysql, $query);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $close_date = $row['close_date'];
        $tender_id = $row['tender_id'];
        if ($current_date >= $close_date) {
            // Update status to "Open" in the database if the close date has passed
            mysqli_query($mysql, "UPDATE request SET status = 'Open' WHERE tender_id = $tender_id");
        } else {
            // Update status to "Closed" in the database if the close date is in the future
            mysqli_query($mysql, "UPDATE request SET status = 'Closed' WHERE tender_id = $tender_id");
        }
    }
} else {
    echo "Error: " . mysqli_error($mysql);
}

// Your HTML and PHP code continues...
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
table{
	color:black;
	
}
th{
	font-size:18px;
	height:50px;
	color:teal;
}
td{
	height:40px;
		font-size:16px;
}
  </style>
  <script>
        function enableButton2() {
			
            document.getElementById("button2").disabled= false;
		
        }
    </script>
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
$b=$row['close_date'];
?>
	 <h4 style="color:black;">Tender for the Item &nbsp;&nbsp;&nbsp;&nbsp;
 <?php echo $a;?> is closed at <?php echo $b?></h4>
<?php }?>
	 <div class="right">
	 <input type="button" id="button1" class="btn btn-success active btn-sm" value="Fill" onclick="enableButton2()" />
	 <button type="button" class="btn btn-info active btn-sm" data-toggle="modal" data-target="#myModal">Close</button></div>
	 <!--<a href="statussearch.html#myModal" data-toggle="modal" class="btn btn-primary"><button type="button" class="btn btn-info btn-lg" >Close</button></a>
	<a href="statussearch.html#myModal" data-toggle="modal"> <button type="button" class="btn btn-info btn-lg" >Close</button></a>-->
<!--	<a href="statussearch.html?id=<?php echo $row['no'] ?>"><input type="button" name="update" id="button1" value="Close" onclick="enableButton2()"/></a></div>-->

 <table border="2" width="1600" align="center" cellpadding="6" class="mytable" cellspacing="3">
                <tr>
<th>Campany Name </th><th>TIN_NO </th><th>City</th><th>Email </th><th>Telephone </th><th>FAX_NO </th><th>No </th>
<th>Prepare_Date</th> <th> Item_Name</th><th>Discription</th>
<th> market_birr</th><th>supplier_birr</th><th> open_date </th>
<th> close_date </th><th> Fill_Date </th><th>Status</th>

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
</tr>

<?php
  }	
  $sql="SELECT * FROM  registerdsupplier";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	echo "the error is".mysqli_error($mysql);}
    ?>
              <td align="center" colspan="14" ><?php echo "Total ".$records.
              " suppliers registered"; ?> </td>
			  <!--<td colspan="2"><a href="marketfill.php?id=<?php echo $row['no'] ?>"><input type="button" class="bbb" name="study" id="button2" value="Market_study_birr"  disabled  /></a></td>-->
			  <td colspan="2"><a><button type="button" class="btn btn-info active"
         data-toggle="modal" data-target="#modal"name="study" id="button2" disabled  >Market_study_birr</button></a></td>
            </tr>
			<?php

?></table></fieldset>
</fieldset>

</form></div></center>
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

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center><h3>If you want close the tender search item name by no.</h3></center></h4>
      </div>
      <div class="modal-body">


<form name="renew" method="POST" action="statusfillupdate.php">

<tr><td>NO<input class="form-control" type="text" name="no" 
onKeyPress="return ValidateAlpha(event)"required></div>



 
<div class="modal-footer">
<button type="submit" name="search" class="btn btn-primary active">Search</button>
        <button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>

      </div>
  </form><br><br><br><br>
 </div>
  </div>
</div></div>
	
 <div id="modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center><h3>I.please enter the no to fill market study birr.

</h3></center></h4>
      </div>
      <div class="modal-body">


<form name="renew" method="POST" action="marketstudyfill.php">

<tr><td>NO<input class="form-control" type="text" name="id" onKeyPress="return 
ValidateAlpha(event)"required>


  </div>
<div class="modal-footer">
<button type="submit" name="update" class="btn btn-primary active">Search</button>
        <button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>

      </div>
  </form><br><br><br><br>

  </div>
</div></div>
</body>

</html>
