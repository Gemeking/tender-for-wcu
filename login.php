
<!DOCTYPE html>
<?php
 session_start();
include("login33.php");
?>
<html>
<head>
<title>Open Tender For WCU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --> 
  
  <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
  <link rel="stylesheet" href="css1/mystyle1.min.css">
   <script src="js1/jquery.min.js"></script>
      <script src="js1/script.min.js"></script>
<link href="css/animate/animate.min.css" rel="stylesheet">
 
  <link rel="stylesheet" type="text/css" href="css/login33.css">
<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <link href="css/style.css" rel="stylesheet">
</script>
  <style>
  body {
      position: relative; 
  }
 
  #section2 {padding-top:50px;height:700px;color: #fff;}
  #section3 {padding-top:50px;height:700px;color: #fff; background-color: #FFFFF0;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color:#F5FFFA}
  #section1 {padding-top:50px;height:1260px;color: #fff; }
  

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
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav menu">
          <li class="current-menu-item"><a href="index.php" target="iframe3">Home</a></li>
             
			</li>
			<li><a href="news.php" ><span class="glyphicon glyphicon-quationmark"></span>News</a></li>
			<li><a href="help.docx" ><span class="glyphicon glyphicon-question-sign"></span>Help</a></li>
            </li>
             <li><a href="login.php" ><span class="glyphicon glyphicon-user"></span>login</li></a>
        
        </ul>
      </div>
    </div>
  </div>
</nav>    
<div id="section1" class="container-fluid">
<div class="imm">
<img src="images/uu.gif" width="400px" height="400px">
</div>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input" required=" ">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" required=" ">
        </div>
         <div class="group">
          <label for="username" class="label">User Type</label>
  <select name="usertype" class="input" required=" ">
  <option value="-1">Please select user type</option>
  <option value="Administrator">Administrator</option>
  <option value="procurement_team">Procurement team</option>
    <option value="procurement_request">Procurement request</option>
      <option value="property_department">Property Department</option>
        <option value="procurement_approvin">Procurement Approving committee</option>
          <option value="finance">Finance</option>
            <option value="supplier">Suppliers</option>
              <option value="scientzific_director">Scientific Director</option>
</select>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label class="lol" for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <button type="submit" class="button" name="signin">signin</button>
        </div>
        <div class="hr"></div>
        <div class="foot-lnkk">
          <a href="forget.php">Do you forget your  Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="" method="POST" name="myForm" onsubmit="return FormValidationall();" onchange="return FormValidationall();" enctype="multipart/form-data">
        <div class="group ">
          <label for="user" class="label">Firstname</label>
          <input id="firstname" name="fname" type="text" class="input" value="<?php echo $firstname; ?> " onchange="return FormValidationall();" onKeyPress="return ValidateAlphaf(event)" required >
         <span class="help-block" style="color:red"><?php echo $firstname_err; ?></span>
		</div>
		<div class="group ">
          <label for="user" class="label">Last Name</label>
          <input id="lastname" name="lname" type="text" class="input" value="<?php echo $lastname; ?> " onchange="return FormValidationall();" onKeyPress="return ValidateAlphal(event)"required >
		  <span class="help-block" style="color:red"><?php echo $lastname_err; ?></span>
        </div>
		<div class="group ">
          <label for="user" class="label">Age</label>
          <input id="age" name="age" type="text" class="input" value="<?php echo $age; ?> " onchange="return FormValidationall();" onKeyPress="return isNumberKeya(event)" required >
		  <span class="help-block" style="color:red"><?php echo $age_err; ?></span>
        </div>
		 <div class="group">
          <label for="sex" class="label">Sex</label>
  <select id="sex"name="sex" class="input" value="<?php echo $sex; ?> ">
   
  <option value="-1">Please select  you sex</option>
  
  
            <option value="Male">Male</option>
  <option value="Female">Female</option>         
</select>
<span class="help-block" style="color:red"><?php echo $sex_err; ?></span>
        </div>
		<div class="group ">
          <label for="user" class="label">Phone number</label>
          <input id="phonenumber" name="phone_no" type="text" class="input" value="<?php echo $phone; ?> " onsubmit="return FormValidationall()" onchange="return FormValidationall();" onKeyPress="return isNumberKeyp(event)" required >
		 <span class="help-block" style="color:red"><?php echo $phone_err; ?></span>
        </div>
		<div class="group ">
          <label for="email" class="label">Email</label>
          <input id="email" type="email" class="input" data-type="email" name="email" value="<?php echo $email; ?>"  onchange="return validateemail()" required  >
		   <span class="help-block" style="color:red"><?php echo $email_err; ?></span>
        </div>
		<div class="group ">
          <label for="profile" class="label">Profile_image</label>
		  <input style="color:green" type="file"  class="input" id="profile"  name="image" id="image" />  		  
         <span class="help-block" style="color:red"><?php echo $profile_err; ?></span>
		</div>
		<div class="group ">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input" value="<?php echo $username; ?> "   onKeyPress="return validateForm()"  required>
		  <span class="help-block" style="color:red"><?php echo $username_err; ?></span>
        </div>
        <div class="group ">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" value="<?php echo $password; ?>" onchange="return FormValidationall();" onKeyPress="return validateForm()"  required>
		   <span class="help-block" style="color:red"><?php echo $password_err; ?></span>
        </div>
      
        <div class="group">
          <label for="pass" class="label">Confirm_Password</label>
          <input id="pass" type="password" class="input" data-type="password" name="confirm_password" value="<?php echo $confirm_password; ?>" onchange="return FormValidationall();" onKeyPress="return validateForm()" required >
		   <span class="help-block" style="color:red"><?php echo $confirm_password_err; ?></span>
        </div>
         <div class="group">
          <label for="username" class="label">User Type</label>
  <select id="usertype"name="usertype" class="input" value="<?php echo $usertype ?>" required>
  <option value="-1">Please select user type</option>
    <option value="procurement_request">Procurement request</option>
            <option value="supplier">Supplier</option>  
</select>
<span class="help-block" style="color:red"><?php echo $usertype_err; ?></span>
        </div>
        
        <div class="group">
           <button type="btn btn-sucess"type="submit" class="button" name="signup">Create account</button>
		    <button type="reset" class="button" name="reset">Clear Form</button>
        </div>
        <div class="hr"></div>
		<div class="foot-lnk">
          <label for="tab-1" class="lb">Already Member?</a>
        </div>
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
     <a href="#" class="back-to-top" style=""><i class="fa fa-chevron-up"></i></a>   
</body>

</html>
