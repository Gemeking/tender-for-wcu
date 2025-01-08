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
  



  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<?php 
session_start();
$mysql=mysqli_connect('localhost','root','');
		$db_selected=mysqli_select_db($mysql,"tender") or die("couldnot select database");?>
<table style="margin-top:90px;"border="1" width="800" align="center" cellpadding="3" class="mytable" cellspacing="0">
                <tr>
<th>Profile image</th>				
<th>User_id </th>			
<th>first name </th>
<th> last name </th>
<th>User type</th>
<th> User name </th>
<th> password </th><th></th>
            </tr>
<?php
 $sql = mysqli_query($mysql," SELECT * FROM users WHERE status='0' ");
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
<?php echo'
<img src="data:image/jpg;base64,'.base64_encode($f ).'" height="90" border-radius="50px" width="100" class="img-thumnail" />';
?></td>
<td><?php echo $user_id?> </td>
<td><?php echo $fname ?> </td>
<td><?php echo $lname ?></td>
<td><?php echo $usertype?></td>
<td><?php echo $username ?></td>
<td><?php echo $password ?></td>
<td><a href="activate.php?id=<?php echo $user_id ?>">
<button class="btn btn-danger"> Activate </button></a></td>
</tr>
<?php
}
	$records = mysqli_num_rows($sql);
    ?>
	 <tr>
              <td align="center" colspan="15" ><?php echo "Total ".$records." blocked account exist"; ?> </td>
            </tr>
			<?php
print( "</table>");
?>
</div>



<footer id="footer">
   

    <div class="container">
      <div class="copyright">
        © Copyright <strong>Wchemo University Open Tender system | 2024</strong>. All Rights Reserved
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

