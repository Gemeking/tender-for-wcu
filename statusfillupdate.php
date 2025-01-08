<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"tender");
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <style>
  /* Your CSS Styles */
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
      <a class="navbar-brand1" href="#">Web Based Open Tender</a>
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
		    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Generate Report <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
         <li> <a href="gensupplier.php" >Registered Suppliers</a></li>
      <li><a href="genitems.php" >Purchased items</a></li>
            </ul>
          </li>
		     <li> <a href="searchsup.php" >Search</a></li>
			 <li><a href="assess.php" >Assess</a></li>
		      <li> <a href="post.html" >Post</a></li>
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
<?php 
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");
if(isset($_POST['search'])){
$id=$_POST['no'];
	    $sql ="SELECT no FROM registerdsupplier WHERE no='$id'";
	    $result = mysqli_query($mysql,$sql); 
	
		if($result===false){
			echo'<script>
alert(" plese enter no  only in the list!!");
  alert(window.location="disregisterdsup.php");</script>';
		}else{
		$row=mysqli_fetch_array($result);
IF($row=$id){
$query ="SELECT * FROM registerdsupplier  where no='$id'"; 
$result = mysqli_query($mysql,$query);
while($row = mysqli_fetch_array($result))
{
$no=$row['no'];
$itemname=$row['item_name'];
$itemmodel=$row['item_model'];
}
}

}

}
?>
<center>
<div class="status">

<form method="POST" action="updatestatus.php">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3>I.Are you sure you want to close the tender of this item?.</h3>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-primary">*NO</span>
<input class="input" type="text" name="no" value="<?php echo $no?>"; onKeyPress="return ValidateAlpha(event)"required></td></tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span class="label label-primary">*Item name</span>
<input class="input" type="text" name="itemname" value="<?php echo $itemname?>"; onKeyPress="return ValidateAlpha(event)"required></td></tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
<span class="label label-primary">*Item Model</span>
<input class="input" type="text" name="itemmodel" value="<?php echo $itemmodel?>"; onKeyPress="return ValidateAlpha(event)"required></td></tr><br><br>
<!--<input  class="btn" type="submit" name="fill" value="Close">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  class="btn" type="reset" name="reset" value="reset"></td></tr>-->
<button type="submit"  name="fill" class="btn btn-primary active">Close</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset"  name="reset" class="btn btn-danger active" >reset</button>
</form>
<?php 
// Code to retrieve item model
$mysql=mysqli_connect('localhost','root','');
$db_selected=mysqli_select_db($mysql,"tender") or die("could not select database");
if(isset($_POST['search'])){
    $id=$_POST['no'];
    $sql ="SELECT no FROM registerdsupplier WHERE no='$id'";
    $result = mysqli_query($mysql,$sql); 

    if($result===false){
        echo'<script>
                alert(" plese enter no  only in the list!!");
                alert(window.location="disregisterdsup.php");
             </script>';
    } else {
        $row=mysqli_fetch_array($result);
        if($row=$id){
            $query ="SELECT * FROM registerdsupplier  where no='$id'"; 
            $result = mysqli_query($mysql,$query);
            while($row = mysqli_fetch_array($result)) {
                $no=$row['no'];
                $itemname=$row['item_name'];
                $itemmodel=$row['item_model'];
                
                // Update status to 'closed' in the database
                $update_query = "UPDATE registerdsupplier SET status='closed' WHERE no='$id'";
                mysqli_query($mysql, $update_query);
            }
        }
    }
}
?>
</div>
</center>
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
     <a href="#" class="back-to-top" style=""><i class="fa fa-chevron-up"></i></a>  
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
