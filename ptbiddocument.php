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
     <h3> <a class="navbar-brand1" href="#">Web Based Open tender</a></h3>
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
			 <li><a href="ptbiddocument.php" >Bid document</a></li>
			 <li><a href="approvedrequest.php" >approved request</a></li>
			<li> <a href="supplierwin.php" >winner</a></li>
     <li> <a href="viewfeedbackpr.php" >Feedback</a></li>
	 <li> <a href="viewnotice.php" >Notice</a></li>
		
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

 <table border="1" style="margin-top:80px;color:black"width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>No </th>
<th>Date</th> <th> Item_Name</th><th>Discription</th>
<th> market_birr</th><th>supplier_birr</th><th> open_date </th>
<th> close_date </th><th> status </th>
<th colspan="2">View</th>
            </tr>
			  <?php
			  $result = mysqli_query($con," SELECT * FROM biddocument ");
			  if($result === false){
    echo "the error is".mysqli_error($con);
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
<td style="color:blue;"><button type="button" class="btn btn-primary active   updatebtn">Edit</button></td>
<td style="color:blue;"><button type="button" class="btn btn-primary active   deletebtn">Delete</button></td><!--<td><a href="supsearch.php?id=<?php echo $row['no'] ?>"><button type="button" name="btn" class="btn btn-sucess" > register </button></a></td>--->
</tr>

<?php
  }	
  $sql="SELECT * FROM  biddocument";
  $result=mysqli_query($con,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	echo "the error is".mysqli_error($con);}
    ?>
	 <tr>
              <td align="center" colspan="15" ><?php echo "Total ".$records." biddocument prepared"; ?> </td>
            </tr>
			<?php

?></table>



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
<!--edit modal%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%5--->
<div id="editmodal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><center><h4 color="blue"> Form edit Biddocument</h4></center></h4></div>
<form name="request" class="form-horizontal" action="updatebiddocument.php" method="POST">
<div class="modal-body">
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>No:</i></label>
<input class="form-control" type="text"id="no2" name="no"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="date"><i> Date:</i></label>

<input style="width:380px;"class="form-control" type="date"id="date2" name="date"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>

<input class="form-control" type="text" id="iname2"name="itemname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Discription:</i></label>

<input class="form-control" type="text" id="itemmodel2"name="itemmodel" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="mbirr"><i>Market_birr:</i></label>

<input class="form-control" type="text" id="mbirr"name="mbirr" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="sbirr"><i>Supplier_birr:</i></label>

<input class="form-control" type="text" id="sbirr"name="sbirr" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Open Date:</i></label>

<input class="form-control" style="width:380px;type="date" id="odate" name="odate" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="close date"><i>close date:</i></label>

<input class="form-control" style="width:380px;"type="date" id="cdate"name="cdate" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="status"><i>status:</i></label>

<input class="form-control" type="text" id="status"name="status" required></div>
<div class="form-group">
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div></div>
<div class="modal-footer"><button type="submit" name="updateitem" class="btn btn-success active">Update Data</button>
<button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>
</div></form>
  </div>
</div></div>
<!--delete modal %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%555-->
<div id="DeleteModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"><center><h4 color="blue"> Delete Biddocument</h2></center></h4></div>
<form name="request" class="form-horizontal" action="deletebiddocument.php" method="POST"><div class="modal-body">
<input type="hidden" name="delete_no" id ="delete_no">
<h3>Are you sure to delete this Bid document?</h3>
</div>
<div class="modal-footer"><button type="submit" name="deletedata" class="btn btn-success active" >ok!delete it.</button><button type="button" class="btn btn-danger active" data-dismiss="modal">NO</button></div></form></div>
</div></div>
	<script>
$(document).ready(function(){
	$('.updatebtn').on('click',function(){
		$('#editmodal').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			
				$('#no2').val(data[0]);
			$('#date2').val(data[1]);
			$('#iname2').val(data[2]);
			$('#itemmodel2').val(data[3]);
			$('#mbirr').val(data[4]);
			$('#sbirr').val(data[5]);
			$('#odate').val(data[6]);
			$('#cdate').val(data[7]);
			$('#status').val(data[8]);
				
							
							
								
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
			$('#delete_no').val(data[0]);
			
				
							
							
								
	});
});
</script>
</body>

</html>
