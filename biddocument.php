<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script>
            alert('You are not logged In !! Please Login to access this page');
            window.location='index.php';
          </script>";
    exit; // Terminate script execution after redirection
}

$mail = $_SESSION['user_id'];
$n = $_SESSION['username'];

// Database connection
$con = mysqli_connect("localhost", "root", "", "tender");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Count pending requests
$result_requests = mysqli_query($con, "SELECT * FROM request WHERE status='pending'");
$count_requests = ($result_requests) ? mysqli_num_rows($result_requests) : 0;

// Count pending feedbacks
$result_feedbacks = mysqli_query($con, "SELECT * FROM feedback WHERE status='pending'");
$count_feedbacks = ($result_feedbacks) ? mysqli_num_rows($result_feedbacks) : 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Open Tender For WCU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css1/mystyle1.min.css">
    <!-- jQuery -->
    <script src="js1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js1/script.min.js"></script>
    <!-- Other CSS -->
    <link href="css/animate/animate.min.css" rel="stylesheet">
    <link href="css/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/login33.css">
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <style>
        body {
            position: relative;
        }

        #section1 {
            padding-top: 50px;
            height: 570px;
            color: #fff;
        }

        .prof {
            border-radius: 50px;
            height: 700px;
        }

        .img-thumnail {
            border-radius: 450px;
        }

        .use {
            font-size: 18px;
        }

        .request_form {
            color: black;
        }
    </style>
 <script>
        function setToday() {
            var today = new Date();
            var dd = String(today.getDate()).padStart(2, '0');
            var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
            var yyyy = today.getFullYear();

            today = yyyy + '-' + mm + '-' + dd;
            document.getElementById('odate').value = today;
            document.getElementById('cdate').value = today;
        }

        function CompareDate(e) {
            var selectedDate = new Date(e.target.value);
            var today = new Date();

            // Check if the selected date is in the past
            if (selectedDate < today) {
                alert("Please select a date in the future.");
                e.target.value = ''; // Clear the input value
                return false;
            }

            return true;
        }
    </script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="setToday()">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h3><a class="navbar-brand1" href="#">Web Based Open tender</a></h3>
            <a href="index.php"><img style="margin-top:-90px;margin-left:-10px;" src="images/ww.png" width="95px" 
   height="85px"></a>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav menu">
                    <li><a href="procurementteam.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="disregisterdsup.php">Registered supplier</a></li>
                            <li><a href="approvedrequest.php">Approved request</a></li>
                            <li><a href="supplierwin.php">Winner</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notify <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="supplierwin.php">Winner supplier</a></li>
                            <li><a href="supplierfail.php">Suppliers fail</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Generate Report <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="gensupplier.php">Registered Suppliers</a></li>
                            <li><a href="genitems.php">Purchased items</a></li>
                        </ul>
                    </li>

                    <li><a href="searchsup.php">Search</a></li>
                    <li><a href="assess.php">Assess</a></li>
                    <li><a href="post.html">Post</a></li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="editprofileppt.php"><span class="glyphicon glyphicon-edit"></span>Edit profile</a>
                            </li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div id="section1" class="container-fluid">
    <div class="request_form">
        <form class="form-inline" name="request" action="biddocument1.php" method="POST">
            <center>
                <fieldset>
                    <legend>Wachemo University Bid document preparation form:</legend>
                    <fieldset>
                        <legend>Suppliers procedure</legend>
                        <textarea type="text" class="textarea" name="procedure" rows="5" cols="50" required>
                            1. Suppliers only fill the birr in the bid document prepared by the procurement team.
                            2. Any bids document is forbidden after tender closed.
                            3. Winner supplier must be made contract with the university.
                            4. Winner suppliers must come the items by your own transport to the university.
                        </textarea><br><br>
                    </fieldset>
                    <fieldset>
                        <legend>የእቃው ገለጻ/item Description/</legend>
                        <div class="disc">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
No:<input class="input" type="text" name="no" placeholder="" required><br><br>
market_study_birr:<input  class="input" type="text" name="mbirr" placeholder="fill by procurement team" ><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
sell_birr: <input readonly class="input" type="text" name="supbirr" placeholder="fill by supplier"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;item_name:<input class="input" type="text" name="itemname" placeholder=" name of item" required><br><br>
&nbsp;&nbsp;&nbsp;item model:<input class="input" type="text" name="itemmodel" placeholder="model of the item" required><br><br>
                          
                            open_date: <input class="form-control" type="date" name="odate" id="odate"
                                               placeholder="Date of tender opened" required onchange="return CompareDate(event)">
                            <br><br>
                            close_date: <input class="form-control" type="date" name="cdate" id="cdate"
                                                placeholder="Date of tender closed" required onchange="return CompareDate(event)">
                            <br><br>
                        </div>
                        <button type="submit" class="btn btn-success active" name="submit">Submit</button>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset" class="btn btn-danger active" name="reset">Reset</button>
                    </fieldset>
                </fieldset>
            </center>
        </form>
    </div>
</div>

<footer id="footer">
    <div class="container">
        <div class="copyright">
            © Copyright <strong>Wachemo University Open Tender system | 2024</strong>. All Rights Reserved
        </div>
        <div class="credits"></div>
    </div>
</footer>

</body>
</html>