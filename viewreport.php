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
<?php include 'uploadreport.php';?>
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
  #section1 {padding-top:50px;height:580px;color: #fff; }

 
.prof{
border-radius:50px;
height:700px;
}

.use{font-size:18px;}
.ttt{margin-left:1150px;
color:black;
margin-top:70px;
font-size:24px;
font-family:san serif;
}

.bb{margin-left:650px;
color:black;
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
.ee{margin-left:1550px;
margin-top:-300px;
color:black;
font-size:24px;
font-family:san serif;
}
.ff{margin-left:650px;
margin-top:150px;
color:black;
font-size:24px;
font-family:san serif;
}
.gg{margin-left:950px;
margin-top:-320px;
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
	margin-top:30px;
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
#footer{margin-bottom:-100px;}
table{
	margin-top:120px;
	
	width:1000px;
	color:black;}
	th{
		font-size:24px;
	background-color:		#C0C0C0;
		height:30px;
	color:#645564;
	}
	td{font-size:20px;
	height:20px;
	}
	h3{font-family:san serif;}
	h3{
        -webkit-animation: color-change 1s infinite;
        -moz-animation: color-change 1s infinite;
        -o-animation: color-change 1s infinite;
        -ms-animation: color-change 1s infinite;
        animation: color-change 1s infinite;
    }

    @-webkit-keyframes color-change {
        0% { color: red; }
        50% { color: blue; }
        100% { color: gray; }
    }
    @-moz-keyframes color-change {
        0% { color: red; }
        50% { color: blue; }
        100% { color: yellow; }
    }
    @-ms-keyframes color-change {
        0% { color: red; }
        50% { color: blue; }
        100% { color: red; }
    }
    @-o-keyframes color-change {
        0% { color: red; }
        50% { color: blue; }
        100% { color: green; }
    }
    @keyframes color-change {
        0% { color: red; }
        50% { color: blue; }
        100% { color: green; }
    }
	.rrr{margin-top:50px;}
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
     <h3> <a class="navbar-brand1" href="#">Web Based Open tender system</a></h3>
     <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">	
           <li> <a href="scientificdirector.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		    
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
			  <!--<li><a href="approved_procurement.php" target="iframe2">Approve procurement</a></li>-->
            
     <li> <a href="viewrequestsc.php" target="iframe2">Request
	    (<?php echo"<strong><font color='red'>$count1</font></strong>";?>)</a></li>
		<li> <a href="viewreport.php" target="iframe2">Report</a></li>
		     <li> <a href="viewfeedbacksc.php" target="iframe2">feedback From Property_Depa</a></li>
			 <li><a href="viewfeedbackfsc.php" target="iframe2">feedback From finance</a></li>
		
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofilepsc.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
            
			   	    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div class="rrr">
<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'tender');
$sql = "SELECT * FROM report";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);?>
<center>
<h3> Please Click on Download link  and download it,  after that you can view the Report</h3>
<table border="2 green" >
<thead>
    <th>RID</th>
	<th>Uploaded By</th>
    <th>Filename</th>
    <th>size (in mb)</th>
	<th>Upload_date</th>
	<th>Abstraction</th>
    <th>Downloads</th>
    <th colspan="2">Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['rid']; ?></td>
	  <td><?php echo $file['uploaded_by']; ?></td>
      <td><?php echo $file['file_name']; ?></td>
	   <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['date']; ?></td>
	   <td><?php echo $file['abstraction']; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="viewreport.php?file_id=<?php echo $file['rid'] ?>">Download</a></td>
	  <td style="color:blue;"><button type="button" class="btn btn-primary active   deletebtn">Delete</button></td>
    </tr>
  <?php endforeach;?>
<tr>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'tender');
$sql = "SELECT * FROM report";
$result = mysqli_query($conn, $sql);
$count=mysqli_num_rows($result);

?>
<td align="center" colspan="9" ><?php echo "Total ".$count." report uploaded!!!"; ?> </td>

</tr>
</tbody>
</table>
</center>


</div>
</div>

<footer id="footer">
   

    <div class="container">
      <div class="copyright">
      © Copyright <strong>Wachemo University Open Tender system | 2024</strong>. All Rights Reserved
      </div>  
                        </div>						   
  </footer>
<div id="DeleteModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"><center><h4 color="blue"> Delete items</h2></center></h4></div>
<form name="request" class="form-horizontal" action="deletereport.php" method="POST"><div class="modal-body">
<input type="hidden" name="delete_report" id ="delete_report">
<h3>Are you sure to delete this report?</h3>
</div>
<div class="modal-footer"><button type="submit" name="deletedata" class="btn btn-success active" >ok!delete it.</button><button type="button" class="btn btn-danger active" data-dismiss="modal">NO</button></div></form></div>
</div></div>
<script>
$(document).ready(function(){
	$('.deletebtn').on('click',function(){
		$('#DeleteModal').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			$('#delete_report').val(data[0]);
			
				
							
							
								
	});
});
</script>
</body>

</html>
