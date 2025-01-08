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

<html>
<head>
 <title>Open Tender For WCU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"><!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
 <link rel="stylesheet" href="css3/bootstrap.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css1/mystyle1.min.css">
   <script src="js1/jquery.min.js"></script>
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
      <script src="js1/script.min.js"></script>
 <link href="css/animate/animate.min.css" rel="stylesheet">
 <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
<style>
table{
width:300px;
background-color:DDGFe;
}
.disc{
float:left;
}
.disc .input{
width:200px;

}
.ww{
background-color:inherit;
width:100px;
font-size:20px;
}
</style>
<style>
p{
	font-size:18px;
	color:blue;
	
	
}
modal fade{background-color:DDfef}

h1{
	background-color:gray;
	text-align:center;
	font-size:40px;
	margin-top:10px;
}
hr{width:40px;};
table{margin-top:40px;}
</style>
  <style>

  #section1 {padding-top:50px;height:570px;color: #fff; }
 
 
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
     <h3> <a class="navbar-brand1" href="#">Web Based Open Tender system</a></h3>
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
             
			     <li> <a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>   
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<?php 
//session_start();
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		?>
<center>
<div class="request_form">
<form name="request" action="biddocument.php" method="POST">
<fieldset>
    <legend>Wachemo University Open Tender Request Form:</legend>
  <fieldset>
    <legend>Suppliers  Procedure</legend>
	
   
   <label>Procedure</label>
   <textarea type="text" class="textarea" name="procedure" rows="100" cols="30" required>
	 1.Suppliers only fill the birr in the bid document prepared by the procurement team .
	 2.Any bids document is forbidden after tender closed.
	 3.Winner supplier must be  made contract with the university.
	 4.Winner suppliers  must come the items by your own transport to  the university.
	 </textarea><br><br></fieldset>
<fieldset>
<legend>Item Discription</legend>
 <table border="1" width="900" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>No </th>
<th>Date</th> <th> Item_Name</th><th> itemmodel</th>
<th> market_birr</th><th>supplier_birr</th><th> open_date </th>
<th> close_date </th><th> status </th>
            </tr>
			  <?php
			  $result = mysqli_query($mysql," SELECT * FROM biddocument ");
			  if($result === false){
    echo "the error is".mysqli_error($mysql);
}
while($row = mysqli_fetch_array($result)){
		$no=$row['no'];$date=$row['date'];$cdate=$row['close_date'];$odate=$row['open_date'];
		$pro=$row['instruction'];$itemname=$row['item_name'];
		$itemmodel=$row['item_model'];$mbirr=$row['market_birr'];
		$supbirr=$row['supplier_birr'];
		$status=$row['status'];
		?>
		       
		<tr>	
<td><?php echo $no ;?></td><td><?php echo $date; ?></td> 
<td><?php echo $itemname; ?></td><td><?php echo $itemmodel; ?></td>
<td><?php echo $mbirr;  ?></td><td><?php echo $supbirr;?></td>
<td><?php echo $odate; ?></td><td><?php echo $cdate;?></td>
<td style="color:red;"><?php echo $status;?></td>
</tr>

<?php
  }	
  $sql="SELECT * FROM  biddocument";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	echo "the error is".mysqli_error($mysql);}
    ?>
	 <tr>
              <td align="center" colspan="15" ><?php echo "Total ".$records." biddocument prepared"; ?> </td>
            </tr>
			<?php

?></table></fieldset>
</fieldset>

</form></div></center>

</div>
<div id="detailmodal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h2 class="modal-title"><center><i><h2 color="blue"> view Information</h2></i></center></h2></div>
<form name="request" class="form-horizontal"  method="POST">
<div class="modal-body">
<div class="form-group">
<label class="control-label col-sm-2" for="rid"><i>RId:</i></label>
<div class="col-sm-10">
<input  disabled class="form-control" type="text"id="rid" name="rid"  required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="name"><i>Name</i></label>
<div class="col-sm-10">
<input disabled class="form-control" type="text"id="name" name="name"  required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>Date</i></label>
<div class="col-sm-10">
<input disabled class="form-control" type="date"id="date" name="date"  required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>
<div class="col-sm-10">
<input readonly class="form-control" type="text" id="itemname" name="itemname" required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>item Model:</i></label>
<div class="col-sm-10">
<input readonly class="form-control" type="text" id="itemmodel"name="itemmodel" required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="measure"><i>Measure:</i></label>
<div class="col-sm-10">
<input disabled class="form-control" type="text" id="measure"name="measure" required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="quantity"><i>Quantity:</i></label>
<div class="col-sm-10">
<input disabled class="form-control" type="text" id="quantity"name="quantity" required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Unit price:</i></label>
<div class="col-sm-10">
<input disabled class="form-control" type="text" id="unitprice"name="unitprice" required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Total price:</i></label>
<div class="col-sm-10">
<input readonly class="form-control" type="text" id="totalprice"name="totalprice" required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>Reason</i></label>
<div class="col-sm-10">
<textarea disabled class="form-control" type="textarea"id="reason" name="reason"  required></textarea></div></div>
<div class="modal-footer">
<!--<a href="feedbackk.php"><button type="button" name="feed" class="btn btn-success" target="iframe1">Feedback</button></a>-->
<button type="button" class="btn btn-danger" data-dismiss="modal"> Close </button></div></form></div></div></div>
</div>
<script>
$(document).ready(function(){
	$('.detailbtn').on('click',function(){
		$('#detailmodal').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			$('#rid').val(data[0]);
			$('#name').val(data[1]);
			$('#date').val(data[2]);
			$('#itemname').val(data[4]);
			$('#itemmodel').val(data[5]);
			$('#measure').val(data[6]);
			$('#quantity').val(data[7]);
			$('#unitprice').val(data[9]);
			$('#totalprice').val(data[9]);
			$('#reason').val(data[3]);
				
							
							
								
	});
});
</script>
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

