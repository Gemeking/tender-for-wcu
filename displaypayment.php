<?php
// Assuming you have already established a database connection
$servername = "localhost";
$username = "root";
$password = "";  // No space here
$dbname = "tender";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
} 

// Fetch data from webhook_data table
$query = "SELECT * FROM webhook_data"; // Select all data
$result = mysqli_query($link, $query);

// Initialize an empty array to store the fetched data
$registered_data = array();

if ($result && mysqli_num_rows($result) > 0) {
    // Fetch each row of data and store it in the $registered_data array
    while ($row = mysqli_fetch_assoc($result)) {
        $registered_data[] = $row;
    }
}

// Close the database connection if not needed further
mysqli_close($link);
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
    <!-- <script src="jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css">
   <script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/stylee.css">--->
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f2f2f2;
        }
        
        h1 {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 25px;
            color: #333;
        }
        
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        form label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        
        form input[type="text"],
        form input[type="email"],
        form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
        form button[type="submit"],
        form button[type="button"] {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        form button[type="button"] {
            background-color: #888;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        tr:hover {
            background-color: #f2f2f2;
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
	
           <li> <a href="finance.php" ><span class="glyphicon glyphicon-home"></span>Home</a></li>
		    
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="displayitemf.php" >Registered_Items</a></li>
     <li> <a href="viewrequestf.php" target="iframe2">Request
</a></li>
            </ul>
          </li>
		
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Send <span class="caret"></span></a>
            <ul class="dropdown-menu">
        
    <li>   <a href="feedbackfinance.php">Feedback</a></li>
	 
        
            </ul>
			 
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofilepf.php"><span class="glyphicon glyphicon-edit"></span>Edit profile</a></li>
             
			  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Logout</a><li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav> 
 
<form id="paymentForm" method="POST" action="https://api.chapa.co/v1/hosted/pay">
        <h1> PAYMENT LIST</h1>
        <!-- Other form inputs go here -->
    </form>

    <!-- Registered Data Table -->
 
    <table border="1">
        <thead>
            <tr>
             
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
          
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registered_data as $data): ?>
            <tr>
              
                <td><?php echo $data['first_name']; ?></td>
                <td><?php echo $data['last_name']; ?></td>
                <td><?php echo $data['email']; ?></td>
              
                <td><?php echo $data['amount']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</body>

</html>



