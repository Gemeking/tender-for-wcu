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
.bb{
	color:black;
	
}
#section1{
	color:black;
}

th{height:40px;
font-size:12px;
background-color:#D2B48C;
}
td{height:40px;
font-size:12px;
}
h3{font-family:san serif;}
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
      <a class="navbar-brand1" href="#">Web Based Open Tender System</a>
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
   
      <li><a href="notic.php" > Notice</a></li>
	  
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

     <h3 align="center" style="margin-top:80px;">list of registered suppliers</h3><br />
	 <hr>
			<div class="bb">
				<a onclick="window.print();" target="_blank" style="cursor:pointer;"> Print</a></div>
				
				<form class="form-inline" action="gensupplier.php" method="POST">
				  
				
                <!--<input type="date" data-date="" data-date-format=" YYY MM DD" name="date" id="date" class="form-control" placeholder="select the date" />--->
				<label>City</label>  <select type="text" name="cityselect" class="form-control" >
				<?php
$con = mysqli_connect("localhost","root","");
$p=mysqli_select_db($con,"tender");
$query = "SELECT * FROM registerdsupplier";
   $result_set=mysqli_query($con,$query);
   while($row=mysqli_fetch_array($result_set)){
	   $cc=$row['city'];
   

?>
<option> <?php echo $cc ?></option>
   <?php }?>
</select>
 <button type="submit" name="btn"  class="btn btn-success active"><span class="glyphicon glyphicon-search"></span>Generat</button>	</form>			
                <div id="campanynamelist"></div>  
				
          

<table border="2" width="600" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>Campany Name </th><th>TIN_NO </th><th>City</th><th>Email </th><th>Telephone </th><th>FAX_NO </th><th>No </th>
 <th> Item_Name</th>
<th>supplier_birr</th><th> Fill_Date </th>

            </tr>
			  <?php
			  if(isset($_POST["btn"]))  {
				  $query=" SELECT * FROM registerdsupplier WHERE  city LIKE '%".$_POST["cityselect"]."%' ";
				  $city=$_POST['cityselect'];
				  $result = mysqli_query($mysql,$query);
			  if($result === false){
			  echo '<script> alert("no supplier registerd from  this city in this day!")</script>'.mysqli_error($mysql);}
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
<td><?php echo $no ;?>
<td><?php echo $itemname; ?></td><td><?php echo $supbirr;?></td>
<td><?php echo $fdate;?></td>

</tr>

<?php
  }	
  $sql="SELECT * FROM registerdsupplier WHERE city LIKE '%".$_POST["cityselect"]."%'";
  $result=mysqli_query($mysql,$sql);
	$records = mysqli_num_rows($result);
	if(!$records){
	echo'<script> alert("no supplier registerd from  this city  please try again?")</script>'.mysqli_error($mysql);}
    ?>
             <td align="center" style="color:green;" colspan="16" > <?php echo "Total ".$records.".registered supplier from.$city"; ?> </td>
			  
			  <?php	  } ?>
			  </table>
 
 <script>  
 $(document).ready(function(){  
      $('#itemname').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"search.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#itemnamelist').fadeIn();  
                          $('#itemnamelist').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#itemname').val($(this).text());  
           $('#itemnamelist').fadeOut();  
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
