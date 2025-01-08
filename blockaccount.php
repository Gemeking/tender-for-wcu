<html>
<head>
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
  #section1 {padding-top:50px;height:550px;color: #fff; }
  #section2 {padding-top:50px;height:700px;color: #fff;}
  #section3 {padding-top:50px;height:700px;color: #fff; background-color: #FFFFF0;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section42 {padding-top:50px;height:1260px;color: #fff;background-color:#F0F8FF }
 #section1 {
  overflow-y: scroll;
}
table{
	margin-top:30px;
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
     <h3> <a class="navbar-brand1" href="#">Web Based Open tender system</a></h3>
     <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
	
           <li> <a href="administrator.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
  <li><a href="userregister.php"  >User Registration</a></li>
      <li> <a href="blockaccount.php" target="iframe2">Active Account</a></li>
    <li><a href="deactivateaccount.php" target="iframe2">Blocked Account</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofile.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
       
			   	   <li> <a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">

<?php 
session_start();
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");?>
<table border="1" width="800" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>Profile image</th>							
<th>User_id </th>			
<th>first name </th>
<th> last name </th>
<th>User type</th>
<th> User name </th>
<th> password </th><th colspan="3"> action</th>
            </tr>
<?php
 $sql = mysqli_query($mysql," SELECT * FROM users WHERE status='1' ");
while($show = mysqli_fetch_array($sql) ){
	$f=$show['profile'];
$user_id=$show['user_id'];
$fname=$show['firstname'];
$lname=$show['lastname'];
$usertype=$show['usertype'];
$username=$show['username'];	
$password=$show['password'];
?>		 
<tr>
<td>
<?php 
echo'
<img src="data:image/jpg;base64,'.base64_encode($f ).'" height="90" border-radius="50px" width="100" class="img-thumnail" />';
?></td>
<td><?php echo $user_id?> </td>
<td><?php echo $fname ?> </td>
<td><?php echo $lname ?></td>
<td><?php echo $usertype?></td>
<td><?php echo $username ?></td>
<td><?php echo $password ?></td>
<td><a href="block.php?id=<?php echo $user_id ?>">
<button class="btn btn-danger"> Block </button></a></td>

<td style="color:blue;"><button type="button" class="btn btn-primary active   editbtn">Edit</button></td>
<td style="color:blue;"><button type="button" class="btn btn-primary active   deletebtn">Delete</button></td>
</tr>
<?php
}
	$records = mysqli_num_rows($sql);
    ?>
	 <tr>
              <td align="center" colspan="15" ><?php echo "Total ".$records." active account exist"; ?> </td>
            </tr>
			<?php
print( "</table>");
?>
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
 <div id="editmodal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title"><center><h4 color="blue"> Form edit items</h4></center></h4></div>
<form name="request" class="form-horizontal" action="updateaccount.php" method="POST">
<div class="modal-body">

<div class="form-group">
<label class="control-label col-sm-2" for="registerdate"><i>user_id:</i></label>

<input readonly style="width:380px;"class="form-control" type="text"id="id" name="user_id"  required></div><!--
<div class="form-group">
<label class="control-label col-sm-2" for="firstname"><i>firstname:</i></label>

<input class="form-control" type="text" id="fname"name="fname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="lastname"><i>lastname:</i></label>

<input class="form-control" type="text" id="lname"name="lname" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="no"><i>Profile:</i></label>
<input style="width:380px;"class="form-control" type="file"id="profile" name="image"  required></div>
-->
<div class="form-group">
<label class="control-label col-sm-2" for="usertype"><i>usertype:</i></label>

<input class="form-control" type="text" id="usertype"name="usertype" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="uname"><i>username:</i></label>

<input class="form-control" type="text" id="username"name="username" required></div>
<div class="form-group">
<label class="control-label col-sm-2" for="password"><i>password:</i></label>

<input class="form-control" type="text" id="password" name="password" required></div>


<div class="form-group">
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div></div>
<div class="modal-footer"><button type="submit" name="update" class="btn btn-success active">Update Data</button>
<button type="button" class="btn btn-danger active" data-dismiss="modal">Close</button>
</div></form>
  </div>
</div></div>
	 <div id="DeleteModal" class="modal fade" role="dialog">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>

<h4 class="modal-title"><center><h4 color="blue"> Delete items</h2></center></h4></div>
<form name="request" class="form-horizontal" action="deleteuser.php" method="POST"><div class="modal-body">
<input type="hidden" name="delete_user" id ="delete_user">
<h3>Are you sure to delete this user?</h3>
</div>
<div class="modal-footer"><button type="submit" name="deletedata" class="btn btn-success active" >ok!delete it.</button><button type="button" class="btn btn-danger active" data-dismiss="modal">NO</button></div></form></div>
</div></div>
<script>
$(document).ready(function(){
	$('.editbtn').on('click',function(){
		$('#editmodal').modal('show');
		$tr=$(this).closest('tr');
		var data=$tr.children('td').map(function(){
		return $(this).text();}
			).get();
			console.log(data);
			
				
			$('#id').val(data[1]);
			$('#fname').val(data[2]);
			$('#lname').val(data[3]);
			$('#usertype').val(data[4]);
			$('#username').val(data[5]);
			$('#password').val(data[6]);
			
				
							
							
								
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
			$('#delete_user').val(data[1]);
			
				
							
							
								
	});
});
</script>
</body>

</html>

