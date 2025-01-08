<?php
// Include config file
include('config.php');
 // session_start();
// Define variables and initialize with empty values
$profile=$username =$firstname=$lastname=$sex=$age=$phone= $password = $confirm_password=$email=$usertype= "";
$profile_err=$username_err=$firstname_err= $lastname_err=$sex_err=$age_err=$phone_err= $password_err = $confirm_password_err=$email_err=$usertype_err = "";
// Processing form data when form is submitted
if (isset($_POST['signup'])){
							$firstname =$_POST['fname'];
							$lastname=$_POST['lname'];
							$sex=$_POST['sex'];
							$age=$_POST['age'];
							$phone=$_POST['phone_no'];   
							$username=$_POST['username'];
							$password=$_POST['password'];
							$usertype=$_POST['usertype'];
							$email=$_POST['email'];
							$confirm_password=$_POST['confirm_password'];
							$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
    // Validate username
	$sql="select * from users where username='$username'";
$res = mysqli_query($link, $sql);
$q=mysqli_num_rows($res);
				if($q>0){
				$username_err = "user name  already exist!";
				}
				  elseif(empty($_POST["username"])){
						$username_err = "Please enter a username.";
					} 
					elseif(strlen($_POST["username"]) < 1){
					$username_err="Username must be at least 2 characters!!!";}
					else{
						$username=$_POST['username'];
					}
    // Validate password
    if(empty($_POST["password"])){
        $password_err = "Please enter a password.";     
    } elseif(strlen($_POST["password"])< 5){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = $_POST["password"];
    }
	if($_POST["fname"]==""){
        $firstname_err = "Please enter your first name";     
    } elseif((strlen($_POST["fname"])< 2) and (strlen($_POST["fname"])< 2)){
        $firstname_err = "firstname is short!";
    } else{
        $firstname = $_POST["fname"];
    }
	if($_POST["lname"]==""){
        $lastname_err = "Please enter your lastname.";     
    } elseif(strlen($_POST["lname"])>0 && strlen($_POST["lname"])<2 ){
        $lastname_err = "lastname is short!";
    } else{
        $lastname = $_POST["lname"];
    }
	if($_POST["phone_no"]==""){
        $phone_err = "Please enter a your phone.";     
    } elseif($_POST["phone_no"]!=""){
        $phone_err = "please enter phone number";
    }elseif(strlen($_POST["password"])< 9) {
		$phone_err = "Phone number must be ten digit!!!";
	}
	
	else{
        $phone = $_POST["phone_no"];
    }
	if($_POST["sex"]=="-1"){
        $sex_err = "Please select a your sex.";     
    }  else{
        $sex = $_POST["sex"];
    }
	if($_POST["age"]==""){
        $age_err = "Please enter a your age.";     
    }  else{
        $age = $_POST["age"];
    }
    
    // Validate confirm_password
    if($_POST["confirm_password"]==""){
        $confirm_password_err = "Please enter  confirm password.";     
    } else{
        if($password!=$confirm_password){
            $confirm_password_err = "Password did not match.";
        }else{
		    $confirm_password = $_POST["confirm_password"];
    }}
	 if($file==""){
        $profile_err = "Please select your profile image.";     
    }
    if($_POST["usertype"]=='-1'){
        $usertype_err = "Please select a usertype.";     
    }  else{
        $usertype = $_POST["usertype"];
    }
    // Check input errors before inserting in database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
$query = "INSERT INTO users (profile,Firstname,Lastname,Age,Sex,phonenumber, email, username,password,confirmpassword,usertype,status) 
					  VALUES('$file','$firstname','$lastname','$age','$sex','$phone','$email','$username','$password','$confirm_password','$usertype','1')";
$result = mysqli_query($link, $query);
if($result)
{
	echo  '<a href="index.php.php"><script type="text/javascript">alert("Account created succesful!!!!");window.location=\'index.php\';</script></a>';
	//header("Location: userregister.php");
}
else
	echo "<script>alert('not created please try again');</script>".mysqli_error($link);
}
    }
if (isset($_POST['signin'])){
	$usertype = $_POST['usertype'];
	$Password  = $_POST['password'];
	$username  = $_POST['username'];
	
	

	//mysql_select_db($con,"Opentender");
	
	 $query = "SELECT * FROM users WHERE username = '$username' AND password = '$Password' AND usertype = '$usertype' AND status='1' ";
   $result_set=mysqli_query($link,$query);
   $rowCheck = mysqli_num_rows($result_set);
		$row=mysqli_fetch_array($result_set);
if(!$result_set){
	//echo $usertype;
die("query is failed".mysqli_error($link));
echo "<script>alert('Username not found or it is deactivated');</script>";
}
if(mysqli_num_rows($result_set)>0)
{
if($row['usertype']=='Administrator')
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To administartor Page";
 echo "<script>window.open('administrator.php','_self')</script>";

  //header("location:administrator.php"); 
}
else if($usertype=="supplier")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To supplier Main Page";
  echo "<script>window.open('supplier.php','_self')</script>";
  //header("location:supplier.php"); 
}
else if($usertype=="finance")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To finance Main Page";
 echo "<script>window.open('finance.php','_self')</script>";
  //header("location:finance.php"); 
}elseif($usertype=="property_department")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To property_Department Page";
  echo "<script>window.open('propertydepartment.php','_self')</script>";
  //header("location:propertydepartment.php"); 
}
elseif($usertype=="scientific_director")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To scientific_director Page";
  echo "<script>window.open('scientificdirector.php','_self')</script>";
  //header("location:scientificdirector.php"); 
}
elseif($usertype=="procurement_approvin")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To procurement_Approving_committee Page";
  echo "<script>window.open('procurement_Approving_committee.php','_self')</script>";
  //header("location:procurement_Approving_committee.php"); 
}
elseif($usertype=="procurement_team")
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
echo "Welcome To Procurement_Team Page";
  echo "<script>window.open('procurementteam.php','_self')</script>";
  //header("location:procurementteam.php"); 
}

elseif($row['usertype']=='procurement_request')
{
$_SESSION['user_id']=$row['user_id'];
$_SESSION['username']=$row['username'];
//echo "login is failed";
 echo "<script>window.open('procurement_request.php','_self')</script>";
//header("location:procurement_request.php");
}
else{
	echo"<script language=\"javascript\" type=\"text/javascript\">alert(' Not Mach please try again!')</script>";

}
}
if ($username == '' || $Password == '' || $usertype == '')
{ 
echo"<script language=\"javascript\" type=\"text/javascript\">alert(' 'Please check your username,password and usertype '')</script>";

  }
else{ 

 //header("location:login.html");
 echo"<script language=\"javascript\" type=\"text/javascript\">alert(' please fill correct user name and password')</script>";
}

 
 }

?>