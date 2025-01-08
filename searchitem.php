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
   <!--<script src="jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css">
   <script src="bootstrap.min.js"></script>-->
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
table{
color:black;
bjackground-color:#343455;
margin-top:-500px;
}

table{
	
	margin-top:0px;
	
	color:black;
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
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">

<div class="container" style="width:500px;color:black;margin-top:50px;">  
                <h2 align="center">Write item name  and click search to decide wether item found or not in the store!</h2><br />
				<form action="searchitem.php" method="POST">
				<label>Enter Item Name</label>  
                <input type="text" name="itemname" id="itemname" class="form-control" placeholder="Enter item Name" />
 <button type="submit" name="btn" class="btn btn-success active"><span class="glyphicon glyphicon-search"></span>Search</button>	</form>			
                <div id="campanynamelist"></div>  
           </div> 
<table border="2" width="900" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>no </th>
<th>Register Date </th> 
<th> Item Name </th><th>Discription</th><th>quantity</th><th>unitprice</th><th>totalprice</th><th>winnername</th><th>reason</th>
            </tr>
			  <?php
			  if(isset($_POST["btn"]))  {
				  $query=" SELECT * FROM items WHERE item_name LIKE '%".$_POST["itemname"]."%'";
				  $iname=$_POST['itemname'];
				  $result = mysqli_query($mysql,$query);
			  if($result === false){
			  echo '<script> alert("Such item is not found please try again?")</script>'.mysqli_error($mysql);}
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

</tr>

<?php
  }	
  $sql="SELECT * FROM items WHERE item_name LIKE '%".$_POST["itemname"]."%'";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	echo'<script> alert("Such item is not found please try again?")</script>'.mysqli_error($mysql);}
    ?><td>
             <td align="center" style="color:green;" colspan="16" > <?php echo "Total ".$records.".$iname. items found!"; ?> </td>
			  </td>
		<?php	 }  ?></table>
		
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
