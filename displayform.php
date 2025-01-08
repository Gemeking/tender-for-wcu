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
  #section1 {padding-top:50px;height:560px;color: #fff; }

 
.prof{
border-radius:50px;
height:700px;
}

.use{font-size:18px;}
table{
	color:black;
}
td{width:400px;}
.bb{margin-left:650px;
color:black;
margin-top:80px;
font-size:24px;
font-family:san serif;
}
.cc{margin-left:950px;
margin-top:-270px;

color:black;
font-size:24px;
font-family:san serif;
}
.dd{margin-left:1250px;
margin-top:-270px;
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
.input{
	border:none;
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

<div class="container" style="width:500px;color:black;margin-top:50px;">  

<form action="displayform.php" method="POST">
<label>select Date</label>
<select name="date">
<option>select date</option>
<?php
$con = mysqli_connect("localhost","root","");
$p=mysqli_select_db($con,"tender");
$query = "SELECT * FROM items ORDER BY register_date DESC ";
   $result_set=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result_set)){
	   $dd=$row['register_date'];
   

?>
<option> <?php echo $dd ?></option>
   <?php }?>
</select><label>select name</label><select name="iname">
<option> select name</option>
<?php
$con = mysqli_connect("localhost","root","");
$p=mysqli_select_db($con,"tender");
$query = "SELECT * FROM items ";
   $result_set=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result_set)){
	   $i=$row['item_name'];
   

?>
<option> <?php echo $i ?></option>
   <?php }?>
</select>			
 <button type="submit" name="btn" class="btn btn-success active"><span class="glyphicon glyphicon-search"></span>Search</button>	</form>			
                <div id="campanynamelist"></div>  
          </div> 
<form action="scform.php" method="post">
<table border="2" width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>No </th>
 <th> Item_Name</th><th>Discription</th><th>quantity</th> <th> unitprice</th><th>totalprice</th><th>winnername</th> <th> reason</th>

            </tr>
			  <?php
			  if(isset($_POST["btn"]))  {
				  	  $dd=$_POST['date'];
					  $in=$_POST['iname'];
				  $query=" SELECT * FROM items WHERE register_date ='$dd' And item_name='$in'";
				  $result = mysqli_query($con,$query);
			  $records = mysqli_num_rows($result_set);
   	if(empty($records)){
	echo'<script> alert("no item registered in this day!");window.open("procurement_Approving_committee.php","_self");</script>'.mysqli_error($con);}
	else{
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
<td><input type="text"  name="no"style="width:100px;border:none;" value="<?php echo $no ;?>"></td>
<td><input type="text" name="itemname" style="width:200px;border:none;"value="<?php echo $itemname; ?>"></td>
<td><textarea style="width:150px;height:50px;border:none;" name="discription"type="text" value=""><?php echo $d; ?></textarea></td>
<td><input style="width:100px;border:none;" name="quantity" type="text" value="<?php echo $qu; ?>"></td>
<td><input style="width:200px;border:none;" name="unitprice"type="text" value="<?php echo $up; ?>"></td>
<td><input style="width:200px;border:none;" name="totalprice" type="text" value="<?php echo $tp; ?>"></td>
<td><input style="width:200px;border:none;" name="winnername"type="text" value="<?php echo $wn; ?>"></td>
<td><textarea style="width:150px;height:50px;border:none;" name="reason" type="textarea" value="<?php echo $r; ?>"><?php echo $r; ?></textarea></td>

</tr>

<?php
  }	
  $sql="SELECT * FROM items WHERE register_date ='$dd' And item_name='$in'";
  $result=mysqli_query($con,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	echo'<script> alert("Such item is not found please try again?")</script>'.mysqli_error($con);}
    ?><td>
	<!--<tr><td colspan="8"><label style="margin-left:600px;">Total all price</label><input style="width:200px;border:none;" name="totalall"type="text"></td></tr>-->
             <td align="center" style="color:green;" colspan="16" > <?php echo "Total ".$records.". items found!"; ?> </td>
			  </td>
		<?php	 }  ?><?php	 }  ?></table>
		<div style="margin-top:90px;margin-left:70px;width:1200px;">
		<label>Abstraction</label><br>
		<textarea name="abstract"style="width:600px;border:none;"type="textarea">
		
		
		</textarea><br><br>
		<label style="color:green;">Scientific Director Signature</label>
		<input style="outline:none;border:none;border-bottom:green 2px solid;" disabled class="form-control" type="text" name="name" placeholder="sign by scientific director">
		</div>
<button type="submit"  class="btn btn-success active"  name="register" >Save Data</button>
</form>
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
