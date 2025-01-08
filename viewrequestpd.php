
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
<link rel="stylesheet" type="text/css" href="css/stylee.css">
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
table{
	margin-top:90px;
	
	}


  #section1 {padding-top:50px;height:880px;color: #fff; }
  #section2 {padding-top:50px;height:700px;color: #fff;}
  #section3 {padding-top:50px;height:700px;color: #fff; background-color: #FFFFF0;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section42 {padding-top:50px;height:1260px;color: #fff;background-color:#F0F8FF }
 

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
	
           <li> <a href="propertydepartment.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		     <li><a href="searchitem.php" >Search Item</a></li>
		
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="displayitem.php" >Registered_Items</a></li>
     <li> <a href="viewrequestpd.php" target="iframe2">Request
	    (<?php echo"<strong><font color='red'>$count1</font></strong>";?>)</a></li>
            </ul>
          </li>
		
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Send <span class="caret"></span></a>
            <ul class="dropdown-menu">
        
    <li>   <a href="feedbackpd.php">Feedback</a></li>
	 
        
            </ul>
			 
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
        <li><a href="editprofilepd.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
             
			   	   <li> <a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>   
  



  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div class="hhh" style="margin-top:80px;">
<?php 
//session_start();
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
		?>
 <table border="1" width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>rid </th>
<th>Name </th> <th> date </th><th>Reason</th>
<th> itemname </th><th> Discription</th><th> measure </th>
<th> quantity </th><th> unitprice </th><th> totalprice </th><th> department </th><th> status </th>
<th colspan="2">View</th>
            </tr>
			  <?php
			  $result = mysqli_query($mysql," SELECT * FROM request ");
			  if($result === false){
    echo "the error is".mysqli_error($mysql);
	$i=0;
}
while($row = mysqli_fetch_array($result)){
		$rid=$row['rid'];$name=$row['name'];$date=$row['date'];
		$reason=$row['reason'];$itemkind=$row['itemkind'];
		$itemmodel=$row['Discription'];$measure=$row['measure'];
		$quantity=$row['quantity'];$unitprice=$row['unitprice'];
		$totalprice=$row['totalprice'];
		$d=$row['department'];
				$status=$row['status'];
		$i=$rid;
		?>
		       
		<tr>	
<td><?php echo $rid ;?></td><td><?php echo $name; ?></td> 
<td><?php echo $date; ?></td><td><?php echo $reason; ?></td>
<td><?php echo $itemkind;  ?></td><td><?php echo $itemmodel;?></td>
<td><?php echo $measure; ?></td><td><?php echo $quantity;?></td>
<td><?php echo $unitprice ;?></td><td><?php echo $totalprice;?></td><td><?php echo $d;?></td><td style="color:red;"><?php echo $status;?></td>
<td>
<button type="button" class="btn btn-success active detailbtn"> Detail </button></td>
<?php
  }	
  $sql="SELECT * FROM request ";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	echo "the error is".mysqli_error($mysql);}
    ?>
	 <tr>
              <td align="center" colspan="15" ><?php echo "Total ".$records." applicants send request"; ?> </td>
            </tr>
			<?php
print( "</table>");
?>
</div></div>
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

<input disabled class="form-control" type="text"id="date" name="date"  required></div>

<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>

<input readonly class="form-control" type="text" id="itemname" name="itemname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>item Model:</i></label>

<input readonly class="form-control" type="text" id="itemmodel"name="itemmodel" required></div>
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

<input readonly class="form-control" type="text" id="totalprice"name="totalprice" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>Reason</i></label>

<textarea disabled class="" type="textarea"id="reason" name="reason"  required></textarea></div></div>
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
     <a href="#" class="back-to-top" style=""><i class="fa fa-chevron-up"></i></a>  
	 
</body>

</html>

