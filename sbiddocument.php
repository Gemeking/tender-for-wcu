<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = ""; // Assuming no password is set for the root user
$database = "tender";

// Create connection
$mysql = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$mysql) {
    die("Connection failed: " . mysqli_connect_error());
}

// Your existing code...

// Check if the current date is equal to the close date of any bid document
$currentDate = date("Y-m-d"); // Get current date
$stmt = $mysql->prepare("UPDATE biddocument SET status = 'closed' WHERE close_date = ? AND status = 'open'");
$stmt->bind_param("s", $currentDate);
$stmt->execute();
$stmt->close();

// Your existing code...

?>

<!DOCTYPE html>
<html>
<head>
  <title>Open Tender For WCU</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <style>
    body {
      position: relative; 
    }
    #section1 {
      padding-top:50px;
      height:570px;
      color: #fff; 
    }
    .prof {
      border-radius:50px;
      height:700px;
    }
    .img-thumnail {
      border-radius:450px;
    }
    .use {
      font-size:18px;
    }
    table {
      color:black;
    }
    th {
      height:100px;
      background-color:#999999;
      font-size:20px;
    }
    td {
      font-size:17px;
      height:90px;
      font-size:16px;
    }
    .request_form {
      color:black;
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
          <li><a href="supplier.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">View <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="sbiddocument.php" target="iframe2">Bid_Document</a></li>
              <li><a href="supplierwins.php" target="iframe2">Winner supplier</a></li>
              <li><a href="supplierfails.php" target="iframe2">supplier Fail</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Setting <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="editprofileps.php"><span class="glyphicon glyphicon-edit"></span>Edit&nbsp;profile</a></li>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
  
<div id="section1" class="container-fluid">
  <center>
    <div class="request_form">
      <form name="request" action="biddocument.php" method="POST">
        <fieldset>
          <legend>Wachemo University Tender Bid Document Form</legend>
          <fieldset>
            <legend>Suppliers Procedure</legend>
            <textarea type="text" class="textarea" name="procedure" rows="5" cols="50" required>
                            1. Suppliers only fill the birr in the bid 
                            document prepared by the 
                            procurement team.
                            2. Any bids document is forbidden 
                            after tender closed.
                            3. Winner supplier must be made 
                            contract with the university.
                            4. Winner suppliers must come the 
                            items by your own transport to the 
                            university.
                        </textarea><br><br>
          </fieldset>
          <fieldset>
            <legend>Item Description</legend>
            <table border="1" width="1000" align="center" cellpadding="3" class="mytable" cellspacing="0">
              <tr>
                <th>No</th>
                <th>Date</th>
                <th>Item Name</th>
                
                <th>Market Price (Birr)</th>
                <th>Supplier Price (Birr)</th>
                <th>Open Date</th>
                <th>Close Date</th>
                <th>Status</th>
                <th colspan="2">View</th>
              </tr>
              <?php
              $result = mysqli_query($mysql," SELECT * FROM biddocument ");
              if($result === false) {
                echo "the error is".mysqli_error($mysql);
              }
              while($row = mysqli_fetch_array($result)) {
                $no=$row['no'];
                $date=$row['date'];
                $cdate=$row['close_date'];
                $odate=$row['open_date'];
                $pro=$row['instruction'];
                $itemname=$row['item_name'];
                if(isset($row['Discription'])){
                  $itemmodel=$row['Discription'];
                }
                $mbirr=$row['market_birr'];
                $supbirr=$row['supplier_birr'];
                $status=$row['status'];
              ?>
              <tr>  
                <td><?php echo $no; ?></td>
                <td><?php echo $date; ?></td> 
                <td><?php echo $itemname; ?></td>
                <td><?php echo $mbirr; ?></td>
                <td><?php echo $supbirr; ?></td>
                <td><?php echo $odate; ?></td>
                <td><?php echo $cdate; ?></td>
                <td style="color:red;"><?php echo $status; ?></td>
                <td>
                  <?php
                    if ($status == 'open') {
                        echo '<button type="button" class="btn btn-info active btn-sm" data-toggle="modal" data-target="#myModal">Register</button>';
                    } else {
                        echo '<button type="button" class="btn btn-info active btn-sm" disabled>Register</button>';
                    }
                  ?>
                </td>
              </tr>
              <?php
              } 
              $sql="SELECT * FROM  biddocument";
              $result=mysqli_query($mysql,$sql);
              $records = mysqli_num_rows($result);
              if(!$records) {
                echo "the error is".mysqli_error($mysql);
              }
              ?>
              <tr>
                <td align="center" colspan="15"><?php echo "Total ".$records." biddocument prepared"; ?></td>
              </tr>
              <?php
              ?>
            </table>
          </fieldset>
        </fieldset>
      </form>
    </div>
  </center>
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <script>
    function validatePrice() {
        var price = document.getElementById("priceInput").value;
        if (isNaN(price) || price < 100) {
            alert("Please enter a price of 100 or above.");
            return false;
        }
        return true;
    }
</script>
      <div class="modal-body">
        <form method="POST" action="sregister.php" onsubmit="return validatePrice();">
          <div class="form-group">
           
            <label class="control-label col-sm-2" for="price">Price:</label>
            <div class="cc">
 <a href="payment1.php"><img class="zoom" src="images/pay1.jpg" width="200px" height="200px"></a><br><br>
 </div>
          </div>
          <br><br><br><br><br><br><br><br>
      </div>
     
      </form>
    </div>
  </div>
</div>

<script>
function validatePrice() {
    var price = document.getElementById("priceInput").value;
    if (isNaN(price) || price < 100) {
        alert("Please enter a price of 100 or above.");
        return false;
    }
    return true;
}
</script>

</body>
</html>
