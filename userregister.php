<?php
session_start();

include('config.php');

$profile = $username = $firstname = $lastname = $sex = $age = $phone = $password = $email = $usertype = "";
$profile_err = $username_err = $firstname_err = $lastname_err = $sex_err = $age_err = $phone_err = $password_err = $email_err = $usertype_err = "";

if (isset($_POST['signup'])) {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $phone = $_POST['phone_no'];
    $username = $_POST['username'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $usertype = $_POST['usertype'];
    $email = $_POST['email'];

    if (!empty($_FILES['image']['tmp_name']) && file_exists($_FILES['image']['tmp_name'])) {
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    }

    $sql = "SELECT * FROM users WHERE username='$username'";
    $res = mysqli_query($link, $sql);
    $q = mysqli_num_rows($res);
    if ($q > 0) {
        $username_err = "Username already exists!";
    } elseif (empty($username)) {
        $username_err = "Please enter a username.";
    }

    if (empty($password)) {
        $password_err = "Please enter a password.";
    } elseif (strlen($password) < 6) {
        $password_err = "Password must have at least 6 characters.";
    }

    if (empty($firstname)) {
        $firstname_err = "Please enter your first name.";
    } elseif (strlen($firstname) < 2) {
        $firstname_err = "First name is too short.";
    }

    if (empty($lastname)) {
        $lastname_err = "Please enter your last name.";
    } elseif (strlen($lastname) < 2) {
        $lastname_err = "Last name is too short.";
    }

    if (empty($phone)) {
        $phone_err = "Please enter your phone number.";
    } elseif (strlen($phone) != 10) {
        $phone_err = "Invalid phone number length. Please enter a 10-digit phone number.";
    }

    if ($sex == "-1") {
        $sex_err = "Please select your gender.";
    }

    if (empty($age)) {
        $age_err = "Please enter your age.";
    } elseif (strlen($age) > 3) {
        $age_err = "Invalid age.";
    }

    if ($usertype == '-1') {
        $usertype_err = "Please select a user type.";
    }

    if (empty($email)) {
        $email_err = "Please enter a valid email.";
    }

    if (empty($username_err) && empty($password_err) && empty($firstname_err) && empty($lastname_err) && empty($phone_err) && empty($sex_err) && empty($age_err) && empty($usertype_err) && empty($email_err)) {
        $query = "INSERT INTO users (profile, Firstname, Lastname, Age, Sex, phonenumber, email, username, password, usertype, status) 
                  VALUES ('$file', '$firstname', '$lastname', '$age', '$sex', '$phone', '$email', '$username', '$password', '$usertype', '1')";
        $result = mysqli_query($link, $query);
        if ($result) {
            echo '<script type="text/javascript">alert("Account created successfully!"); window.location=\'index.php\';</script>';
        } else {
            echo "<script>alert('Failed to create account. Please try again.');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<!--<?php

//include("login33.php");
?>-->
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
  <link href="css/style.css" rel="stylesheet">
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

  </style>

<script>
	function ValidateAlpha1(evt)
        {
            var keyCode = (evt.which) ? evt.which : evt.keyCode
            if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32 &&  keyCode != 8  &&  keyCode != 9)
				{
				alert("	please enter only  letters!!! ")
            return false;
			}}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57)){
		 alert("please enter only  numbers!!! !")
            return false;

}
         
      }
	  </script>
	  <style>
	  h5{color:red;
	  text-align:center;
	  font-family:san-serif;}
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
     <h3> <a class="navbar-brand1" href="#">WebBased Open tender system</a></h3>
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
              
			   	    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
  



  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
<div id="section1" class="container-fluid" style="visibility: visible; animation-name: fadeInUp; -webkit-animation-name: fadeInUp;">
<div class="login-wrap">
  <div class="login-html">
    <!--<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>-->
	<h5>Click here to view  Form</h5>
    <input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab">&nbsp;&nbsp;&nbsp&nbsp;User Sign Up Form</label>
    <div class="login-form">
    
	
	  
      <form class="sign-up-htm" action="userregister.php" method="POST" name="account" onsubmit="return validateForm();" enctype="multipart/form-data">
        <div class="group ">
          <label for="user" class="label">Firstname</label>
          <input id="username" name="fname" type="text" class="input" value="<?php echo $firstname; ?> "onKeyPress="return ValidateAlpha1(event)" >
                 <span class="help-block" style="color:red"><?php echo $firstname_err; ?></span>

		</div>
		<div class="group ">
          <label for="user" class="label">Last Name</label>
          <input id="lname" name="lname" type="text" class="input"value="<?php echo $lastname; ?> " onKeyPress="return ValidateAlpha1(event)" >
		 		  <span class="help-block" style="color:red"><?php echo $lastname_err; ?></span>

        </div>
		<div class="group ">
          <label for="user" class="label">Age</label>
          <input id="age" name="age" type="text" class="input" value="<?php echo $age; ?> "onKeyPress="return isNumberKey(event)" >
		 		  <span class="help-block" style="color:red"><?php echo $age_err; ?></span>

        </div>
		 <div class="group">
          <label for="sex" class="label">Sex</label>
  <select name="sex" class="input" value="<?php echo $sex; ?> "required="">
  <option value="-1">Please select  you sex</option>
  
            <option value="Male">Male</option>
  <option value="Female">Female</option>         
</select>
<span class="help-block" style="color:red"><?php echo $sex_err; ?></span>

        </div>
		<div class="group ">
          <label for="user" class="label">Phone number</label>
          <input id="phone" name="phone_no" type="text" value="<?php echo $phone; ?> "class="input" onKeyPress="return isNumberKey(event)" >
		 		 <span class="help-block" style="color:red"><?php echo $phone_err; ?></span>

        </div>
		<div class="group ">
          <label for="email" class="label">Email</label>
          <input id="email" type="email" class="input" data-type="email" value="<?php echo $email; ?> "name="email" onKeyPress="return validateForm()"   >
		  		   <span class="help-block" style="color:red"><?php echo $email_err; ?></span>

        </div>
		<div class="group ">
          <label for="profile" class="label">Profile_image</label>
		  <input style="color:green" type="file"  class="input" id="profile" name="image" id="image" /> 
 		           <span class="help-block" style="color:red"><?php echo $profile_err; ?></span>

        </div>
		<div class="group ">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input"value="<?php echo $username; ?> " onKeyPress="return validateForm()"  >
		 		  <span class="help-block" style="color:red"><?php echo $username_err; ?></span>

        </div>
        <div class="group ">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="text" class="input"  value="<?php echo $password; ?>" onchange="return FormValidationall();" onKeyPress="return validateForm()">
		   <span class="help-block" style="color:red"><?php echo $password_err; ?></span>
        </div>
      <!--
        <div class="group">
          <label for="pass" class="label">Confirm_Password</label>
          <input id="pass" type="text" class="input"  name="confirm_password" value="<?php echo $confirm_password; ?>" onchange="return FormValidationall();" onKeyPress="return validateForm()" >
		   <span class="help-block" style="color:red"><?php echo $confirm_password_err; ?></span>
        </div>-->
         <div class="group">
          <label for="username" class="label">User Type</label>
  <select name="usertype" class="input" value="<?php echo $usertype; ?> "required="">
  <option value="-1">Please select user type</option>
  
  <option value="Administrator">Administrator</option>
  <option value="Procurement_Team">Procurement team</option>

      <option value="property_Department">Property Department</option>
      <option value="procurement_approvin">Procurement Approving committee</option>
        <option value="finance">Finance</option>
          
              <option value="scientific_director">Scientific Director</option>	
              
</select>
<span class="help-block" style="color:red"><?php echo $usertype_err; ?></span>

        </div>
        
        <div class="group">
           <button type="btn btn-sucess"type="submit" class="button" name="signup">Create account</button>
		    <button type="reset" class="button" name="reset">Clear Form</button>
        </div>
        <div class="hr"></div>
      </form>
    </div>
  </div>
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
   
	 
</body>

</html>
