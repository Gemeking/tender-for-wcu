<?php
// Include database connection
include("login33.php");

// Function to send password reset email
function sendPasswordResetEmail($email, $token) {
    // In a real application, implement logic to send email with password reset link
    // For demonstration, let's just print the reset link
    echo "Password reset email sent to $email with reset link: <a href='reset.php?token=$token'>Reset Password</a>";
}

// Function to generate a random token
function generateToken() {
    return bin2hex(random_bytes(16)); // Generates a 32-character random token
}

if(isset($_POST['view'])) {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $lname = $_POST['lname'];
    $sql = "SELECT * FROM users WHERE username='$username' AND phonenumber='$phone' AND lastname='$lname';";
    $result_set = mysqli_query($link, $sql);
    if(!$result_set) {
        die("Query failed" . mysqli_error($link));
    }
    if(mysqli_num_rows($result_set) > 0) {
        while($row = mysqli_fetch_array($result_set)) {
            $email = $row['email']; // Assuming email is a column in your users table
            $token = generateToken(); // Generate a unique token for password reset
            // Update the user's record with the token (assuming you have a column named 'reset_token' in your users table)
            $update_sql = "UPDATE users SET reset_token='$token' WHERE username='$username'";
            $update_result = mysqli_query($link, $update_sql);
            if($update_result) {
                // Send password reset email
                sendPasswordResetEmail($email, $token);
                echo "<p class='success'>Password reset instructions sent to your email.</p>";
            } else {
                echo "<p class='error'>Error updating reset token. Please try again.</p>";
            }
        }
    } else {
        echo "<p class='error'>Incorrect Input</p>";
    }
}

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/mystyle1.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            position: relative;
        }

        .textt {
            margin-top: 100px;
        }

        .text {
            float: left;
            width: 400px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h3><a class="navbar-brand1" href="#">Web Based Open Tender Management</a></h3>
            <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav menu">
                    <li class="current-menu-item"><a href="index.php" target="iframe3">Home</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container" style="padding-top: 50px; height: 580px; color: #fff;">
    <div class="text" style="margin-top: 50px; float: left; margin-left: -500px;">
        <h4>Forgot your password?</h4>
        <img src="images/uu.gif" width="200px" height="200px">
    </div>
    <div class="textt">
        <form action="forget.php" method="POST">
            <table class="log_table" align="center">
                <tr bgcolor="#51a351">
                    <th colspan="2"><font color="#ffffff">Forgot your password?</font></th>
                </tr>
                <tr>
                    <td><label>Last Name</label></td>
                    <td><input type="text" name="lname" required x-moz-errormessage="Enter last name!"
                               onkeypress="ValidateAlphaf(evt)"/></td>
                </tr>
                <tr>
                    <td><label>Phone Number</label></td>
                    <td><input type="text" name="phone" required x-moz-errormessage="Enter phone number!"
                               onkeypress="isNumberKeya(evt)"/></td>
                </tr>
                <tr>
                    <td><label>Username</label></td>
                    <td><input type="text" name="username" required x-moz-errormessage="Enter Username!"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" name="view" class="btn btn-success">Recover</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <div class="copyright">
            © Copyright <strong>Wachemo University Open Tender system | 2024</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. You can delete the links only if you purchased the pro version. -->
            <!-- Best <a href="https://bootstrapmade.com/">Bootstrap Templates</a> by BootstrapMade -->
        </div>
    </div>
</footer>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.min.js"></script>
</body>
</html>
