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
    <!-- <script src="jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css">
   <script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/stylee.css">--->
  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:560px;color: #fff; }

 
.prof{
border-radius:50px;
height:700px;
}

.use{font-size:18px;}
table{
color:black;

}
.modal-body{
	color:#343455;
	
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
      <h3><a class="navbar-brand1" href="#">Web Based Open Tender System</a></h3>
      <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>

    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu ">
	
           <li> <a href="propertydepartment.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		     <li><a href="searchitem.php" >Search Item</a></li>
		  <li>  <a href="#myModal" data-toggle="modal">Register item</a></li>
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
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<center><h2 style="color:black;margin-top:40px;"> Items that are registered</h2></center>
		<hr>
		<div class="aaa">
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Item</button>
		</div>
		<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><center><h4 color="blue"> Form for Registration of purchased items</h2></center></h4></div>
<form name="request" class="form-horizontal" action="itemregister.php" method="POST">
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Item Id:</i></label>

<input class="form-control" type="text" id="no"name="no" required></div>

<div class="form-group"><br><br>
<label class="control-label col-sm-2" for="registerdate"><i>register Date:</i></label>

<input style="width:380px;" class="form-control" type="date"id="date1" name="date"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>

<input class="form-control" type="text" id="iname1"name="itemname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Discription:</i></label>

<input class="form-control" type="text" id="imodel2"name="itemmodel" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>quantity:</i></label>

<input class="form-control" type="text" id="quantity"name="quantity" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>unitprice:</i></label>

<input class="form-control" type="text" id="unitprice"name="unitprice" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>totalprice:</i></label>

<input class="form-control" type="text" id="totalprice"name="totalprice" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>winnername:</i></label>

<input class="form-control" type="text" id="winnername"name="winnername" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>reason:</i></label>

<input class="form-control" type="text" id="reason"name="reason" required></div>
<div class="form-group">
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

</div>
<div class="modal-footer">
<button type="submit"  class="btn btn-success active"  name="register" >Save Data</button>
<button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button></div></form>
  </div>
</div></div>
		<br><br>
 <table border="1" width="900" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>no </th>
<th>Register Date </th> 
<th> Item Name </th><th>Discription</th><th>quantity</th><th>unitprice</th><th>totalprice</th><th>winnername</th><th>reason</th><th> Edit</th><th> Delete</th>
            </tr>
			  <?php
			  $result = mysqli_query($mysql," SELECT * FROM items ");
			  if($result === false){
    echo '<script> alert("Please try again")</sccript>'.mysqli_error($mysql);
	$i=0;
}
while($row = mysqli_fetch_array($result)){
	$no=$row['no'];$date=$row['register_date'];
		$itemname=$row['item_name'];
		$d=$row['Discription'];
		$up=$row['unitprice'];
		$tp=$row['totalprice'];
		$qu=$row['quantity'];
		$wn=$row['winnername'];
		$r=$row['reason'];
		?>
		       
		<tr>	
<td><?php echo $no ;?></td>
<td><?php echo $date; ?></td><td><?php echo $itemname; ?></td>
<td><?php echo $d;?></td>
<td><?php echo $qu;?></td>
<td><?php echo $up;?></td>
<td><?php echo $tp;?></td>
<td><?php echo $wn;?></td>
<td><?php echo $r;?></td>
<td style="color:blue;"><button type="button" class="btn btn-primary active   updatebtn">Edit</button></td>
<td style="color:blue;"><button type="button" class="btn btn-primary active   deletebtn">Delete</button></td>


<?php
  }	
  $sql="SELECT * FROM items";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	
	 echo '<script> alert("No item found")</sccript>'.mysqli_error($mysql);
	}
    ?>
	 <tr>
              <td align="center" colspan="15" ><?php echo "Total ".$records." items registered"; ?> </td>
            </tr>
			<?php

?></table>
<!-- register modal%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%--->


<!--edit modal%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%5--->
<div id="editmodal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><center><h4 color="blue"> Form edit items</h4></center></h4></div>
<form name="request" class="form-horizontal" action="updateitem.php" method="POST">
<div class="modal-body">
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>item id:</i></label>
<input class="form-control" type="text"id="no2" name="no"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>register Date:</i></label>

<input style="width:380px;"class="form-control" type="date"id="date2" name="date"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>

<input class="form-control" type="text" id="iname2"name="itemname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Discription:</i></label>

<input class="form-control" type="text" id="itemmodel2"name="itemmodel" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>quantity:</i></label>

<input class="form-control" type="text" id="quantity2"name="quantity" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>unitprice:</i></label>

<input class="form-control" type="text" id="unitprice2"name="unitprice" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>totalprice:</i></label>

<input class="form-control" type="text" id="totalprice2" name="totalprice" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>winnername:</i></label>

<input class="form-control" type="text" id="winnername2"name="winnername" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>reason:</i></label>

<input class="form-control" type="text" id="reason2"name="reason" required></div>
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

<h4 class="modal-title"><center><h4 color="blue"> Delete items</h2></center></h4></div>
<form name="request" class="form-horizontal" action="deleteitem.php" method="POST"><div class="modal-body">
<input type="hidden" name="delete_no" id ="delete_no">
<h3>Are you sure to delete this item?</h3>
</div>
<div class="modal-footer"><button type="submit" name="deletedata" class="btn btn-success active" >ok!delete it.</button><button type="button" class="btn btn-danger active" data-dismiss="modal">NO</button></div></form></div>
</div></div>
<script>
$(document).ready(function(){
	$('.savebtn').on('click',function(){
		$('#addmodal').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			
			$('#no2').val(data[0]);
			$('#date2').val(data[1]);
			$('#iname2').val(data[2]);
			$('#itemmodel2').val(data[3]);
			$('#quantity2').val(data[4]);
			$('#unitprice2').val(data[5]);
			$('#totalprice2').val(data[6]);
			$('#winnername2').val(data[7]);
			$('#reason2').val(data[8]);
				
							
							
								
	});
});
</script>
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
			$('#quantity2').val(data[4]);
			$('#unitprice2').val(data[5]);
			$('#totalprice2').val(data[6]);
			$('#winnername2').val(data[7]);
			$('#reason2').val(data[8]);
				
							
							
								
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
</div>
<footer id="footer" >
   

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
 
	 <div id="myModal" class="modal fade" role="dialog"><div class="modal-dialog modal-md"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"><center><h4 color="blue"> Form for Registration of purchased items</h2></center></h4></div>
<form name="request" class="form-horizontal" action="itemregister.php" method="POST">
<div class="modal-body">
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>No:</i></label>

<input class="form-control" type="text"id="no" name="no"  required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>register Date:</i></label>

<input style="width:380px;"  class="form-control" type="date"id="date1" name="date" required ></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>

<input class="form-control" type="text" id="iname1"name="itemname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>Discription:</i></label>

<input class="form-control" type="text" id="imodel1"name="itemmodel" required></div> </div>
<div class="modal-footer">
<button  class="btn btn-success" type="submit" name="register" >Register</button>
<button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button></div></form>
 
</div></div></div>
</body>

</html>
