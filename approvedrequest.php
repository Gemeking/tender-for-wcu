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
  #section1 {padding-top:50px;height:570px;color: #fff; }

 
.prof{
border-radius:50px;
height:700px;
}
.img-thumnail{border-radius:450px;}
.use{font-size:18px;}

table {
color:black;
  background:DDffe;
  border: 1px solid #C5B798;
  margin-top: 40px;
  margin-bottom: 0px;
}
td {
  border-bottom: 2px solid gray;
  padding: 5px;
  width:1900px;
}
th {
  font-family: "Trebuchet MS", Arial, Verdana;
  font-size: 18px;
  padding: 5px;
  border-bottom-width: 3px;
  border-bottom-style: solid;
  border-bottom-color: #CDC1A7;
  background-color: #CDC1A7;
  color: black;
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

<table style="margin-top:90px;"border="1" width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>rid </th>
<th>Name </th> <th> date </th><th>Reason</th>
<th> itemkind </th><th> itemmodel</th><th> measure </th>
<th> quantity </th><th> unitprice </th><th> totalprice </th><th> status </th>
<th colspan="2">Prepare</th><th colspan="3">View</th>
            </tr>
			  <?php
			  $result = mysqli_query($mysql," SELECT * FROM request WHERE status='approved' and approve='accept' ");
			  if($result === false){
    echo "the error is".mysqli_error($mysql);
}
while($show = mysqli_fetch_array($result)){
		$rid=$show['rid'];$name=$show['name'];$date=$show['date'];
		$reason=$show['reason'];$itemkind=$show['itemkind'];
		$itemmodel=$show['Discription'];$measure=$show['measure'];
		$quantity=$show['quantity'];$unitprice=$show['unitprice'];
		$totalprice=$show['totalprice'];$status=$show['status'];
		?>
		       
		<tr>	
<td><?php echo $rid ?></td><td><?php echo $name ?></td> 
<td><?php echo $date ?></td><td><?php echo $reason ?></td>
<td><?php echo $itemkind  ?></td><td><?php echo $itemmodel?></td>
<td><?php echo $measure ?></td><td><?php echo $quantity?></td>
<td><?php echo $unitprice ?></td><td><?php echo $totalprice?></td><td style="color:green;"><?php echo $status?></td>
<td><a href="biddocument.php?id=<?php echo $show['rid'] ?>">
<button class="btn btn-primary"> Bid Document </button></a></td>

<td>
<button type="button" class="btn btn-primary detailbtn"> Detail </button></td>
<td><a href="check.php?id=<?php echo $show['rid'] ?>">
<button class="btn btn-primary"> Check </button></a></td>
<td><a href="deletecheckedrequest.php?id=<?php echo $show['rid'] ?>">
<button class="btn btn-danger"> Delete </button></a></td>
</tr>
<?php
  }	
  $sql="SELECT * FROM request WHERE status='approved' and approve='accept'";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	echo "the error is".mysqli_error($mysql);}
    ?>
	 <tr>
              <td align="center" colspan="17s" ><?php echo "Total ".$records." approved requests"; ?> </td>
            </tr>
			<?php
print( "</table>");
?>
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

<input  disabled class="form-control" type="text"id="rid" name="rid"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>Name</i></label>

<input disabled class="form-control" type="text"id="name" name="name"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>Date</i></label>

<input style="width:380px;"disabled class="form-control" type="date"id="date" name="date"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>

<input disabled class="form-control" type="text" id="itemname" name="itemname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>item Model:</i></label>

<input disabled class="form-control" type="text" id="itemmodel"name="itemmodel" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="measure"><i>Measure:</i></label>

<input disabled class="form-control" type="text" id="measure"name="measure" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="quantity"><i>Quantity:</i></label>

<input disabled class="form-control" type="text" id="quantity"name="quantity" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Unit price:</i></label>

<input disabled class="form-control" type="text" id="unitprice"name="unitprice" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Total price:</i></label>

<input disabled class="form-control" type="text" id="totalprice"name="totalprice" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>Reason</i></label>

<textarea style="width:380px;" disabled class="form-control" type="textarea"id="reason" name="reason"  required></textarea></div>
<div class="modal-footer">
<!--<a href="feedback.html"><button type="button" class="btn btn-success" target="iframe1">Feedback</button></a>--->
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
