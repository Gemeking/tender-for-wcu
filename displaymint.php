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
margin-top:-20px;
color:black;
font-size:24px;
font-family:san serif;
}
.cc{margin-left:700px;
margin-top:-270px;
color:black;
font-size:24px;
font-family:san serif;
}
.dd{margin-left:950px;
margin-top:-270px;
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
.hr{margin-left:650px;
color:black;


}
.pull-left{
	width:500px;
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
	
           <li> <a href="finance.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		    
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="displayitemf.php" >Registered_Items</a></li>
     <li> <a href="viewrequestf.php" target="iframe2">Request
	    (<?php echo"<strong><font color='red'>$count1</font></strong>";?>)</a></li>
            </ul>
          </li>
		
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Send <span class="caret"></span></a>
            <ul class="dropdown-menu">
        
    <li>   <a href="feedbackfinance.php">Feedback</a></li>
	 
        
            </ul>
			 
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofilepf.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
            
			   	    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
  


<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div style="background-color:#E5E4E2;margin-top:60px;color:black;">
				<form action="displaymint.php" method="POST">
				<label>select Date</label>
<select name="date">
<option> Select Date</option>
<?php
$con = mysqli_connect("localhost","root","");
$p=mysqli_select_db($con,"tender");
$query = "SELECT * FROM approveditems ";
   $result_set=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result_set)){
	   $dd=$row['date'];
   

?>
<option> <?php echo $dd ?></option>
   <?php }?>
</select>	
				
 <button type="submit" name="btn"  class="btn btn-success active"><span class="glyphicon glyphicon-search"></span>Search</button>	</form>	

<table border="1" style="border-bottom:none;border-left:none;" style="color:black;margin-top:70px;"width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>No </th>
 <th> Item_Name</th><th>Discription</th><th>quantity</th> <th> unitprice</th><th>totalprice</th><th>winnername</th> <th> reason</th>

            </tr>
			  <?php
		
				if(isset($_POST["btn"]))  {
				  
					  $ddd=$_POST['date'];
$query = "SELECT * FROM approveditems where date='$ddd'";
   $result_set=mysqli_query($con,$query);
   $records = mysqli_num_rows($result_set);
   	if(empty($records)){
	echo'<script> alert("no item registered in this day!");window.open("finance.php","_self");</script>'.mysqli_error($con);}
	else{
   $resultt = mysqli_query($con,"SELECT SUM(totalprice) AS total_sum FROM approveditems where date='$ddd'"); 
$row = mysqli_fetch_assoc($resultt); 
$sum = $row['total_sum'];
   while($row=mysqli_fetch_array($result_set)){
		$no=$row['no'];
		$itemname=$row['item_name'];
		$d=$row['Discription'];
		$up=$row['unitprice'];
		$tp=$row['totalprice'];
		$qu=$row['quantity'];
		$wn=$row['winnername'];
		$r=$row['reason'];
		$aa=$row['abstraction'];
		$s=$row['scname'];
		
		?>
		       
		<tr>	
<td><?php echo $no ;?></td>
<td><?php echo $itemname; ?></td>
<td><?php echo $d; ?></td>
<td><?php echo $qu; ?></td>
<td><?php echo $up; ?></td>
<td><?php echo $tp; ?></td>
<td><?php echo $wn; ?></td>
<td><?php echo $r; ?></td>

</tr>

<?php
}
	

    ?><td>
	<tr><td colspan="8"><label style="margin-left:430px;">Total all price</label><input readonly style="width:200px;border:none;" name="totalall"type="text" value="<?php echo $sum ?>"></td></tr>
           

			<td align="center" style="color:green;" colspan="16" > <?php echo "Total ".$records.". items found!"; ?> </td>
			  </td>
		<tr style="border:none;"><td colspan="8" style="border:none;">

		<label>Abstraction</label><br>
		<textarea readonly name="abstract"style="width:600px;border:none; color:black;"type="textarea">
		<?php echo $aa; ?>
	
		</textarea><br><br>
		<label style="color:green;">Scientific Director Signature</label>
		<input style="outline:none;border:none;border-bottom:green 2px solid;" readonly class="form-control" type="text" name="sname" value="<?php echo $s;?>" placeholder="sign by scientific director">
		<?php }?><?php }?></td></tr></table>
	</div>  

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
    
	 <div id="myModal" class="modal fade" role="dialog"><div class="modal-dialog modal-md"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title"><center><h4 color="blue"> Form for Registration of purchased items</h2></center></h4></div>
<form name="request" class="form-horizontal" action="itemregister.php" method="POST"><div class="modal-body"><label class="control-label col-sm-2" for="no"><i>No:</i></label>
<div class="col-sm-10">
<input class="form-control" type="text"id="no" name="no"  required></div></div><br><br>
<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>register Date:</i></label>
<div class="col-sm-10">
<input class="form-control" type="date"id="date1" name="date" required ></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item name"><i>Item name:</i></label>
<div class="col-sm-10">
<input class="form-control" type="text" id="iname1"name="itemname" required></div></div>
<div class="form-group">
<label class="control-label col-sm-2" for="item model"><i>item Model:</i></label>
<div class="col-sm-10">
<input class="form-control" type="text" id="imodel1"name="itemmodel" required></div></div>
<div class="modal-footer">
<button  class="btn btn-success" type="submit" name="register" >Register</button>
<button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button></div></form>
  </div>
</div></div>
</body>

</html>
