<?php
// Database connection details
// Database configuration
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

// Read the log file
$logFile = "webhook_data.log";
$logData = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Check if there's any data in the log file
if (!empty($logData)) {
    // Get the latest line
    $latestLine = end($logData);
    $jsonData = json_decode($latestLine, true);

    if ($jsonData) {
        // Decode the 'meta' field separately if it's a JSON string
        $metaData = json_decode($jsonData['meta'], true);

        // Prepare data for insertion
        $event = $jsonData['event'];
        $first_name = $jsonData['first_name'];
        $last_name = $jsonData['last_name'];
        $email = $jsonData['email'];
        $currency = $jsonData['currency'];
        $amount = $jsonData['amount'];
        $status = $jsonData['status'];
        $created_at = $jsonData['created_at'];
        $reference = $jsonData['reference'];
        $description = $jsonData['customization']['description'];
        $logo = $jsonData['customization']['logo'];

        // Check if the reference already exists
        $checkStmt = $link->prepare("SELECT COUNT(*) FROM webhook_data WHERE reference = ?");
        if (!$checkStmt) {
            die("Prepare failed: (" . $link->errno . ") " . $link->error);
        }
        $checkStmt->bind_param("s", $reference);
        $checkStmt->execute();
        $checkStmt->bind_result($count);
        $checkStmt->fetch();
        $checkStmt->close();

        if ($count == 0) {
            // Insert data into database
            $stmt = $link->prepare("INSERT INTO webhook_data (event, first_name, last_name, email, currency, amount, status, created_at, reference, description, logo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            if (!$stmt) {
                die("Prepare failed: (" . $link->errno . ") " . $link->error);
            }
            $stmt->bind_param("sssssdsssss", 
                $event, 
                $first_name, 
                $last_name, 
                $email, 
                $currency, 
                $amount, 
                $status, 
                $created_at, 
                $reference, 
                $description, 
                $logo
            );

            // Execute the statement
            if ($stmt->execute()) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } 
    } else {
        echo "No valid JSON data found.";
    }
} else {
    echo "No data available in the log file.";
}

// Close the database connection
$link->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Webhook Data</title>
    <style>
        body {
            background-image: url('kkkk.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            color: black;
        }

        h2 {
            text-align: center;
        }

        .receipt {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .receipt-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }

        .receipt-item span:first-child {
            font-weight: bold;
        }

        .receipt-item:last-child {
            border-bottom: none;
        }

        button.back-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        button.back-button a {
            color: white;
            text-decoration: none;
            display: block;
            height: 100%;
            width: 100%;
            text-align: center;
        }

        button.back-button:hover {
            background-color: #45a049;
        }

        .reference-cell {
            background-color: greenyellow;
            font-weight: bold;
            color: #d32f2f;
        }

        .div {
            margin-top: 2%;
            margin-left: 35%;
            width: 200px;
            height: 200px;
            background-color: #4CAF50;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            font-weight: bold;
            text-align: center;
            animation: fadeIn 2s ease-in-out;
            position: relative;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .div p {
            margin: 10px 0;
        }

        .div::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50%;
            box-shadow: 0 0 10px 5px rgba(76, 175, 80, 0.5);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.7;
            }
        }

        button.back-button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            animation: fadeIn 1s ease-in-out;
            position: relative;
            overflow: hidden;
        }

        button.back-button a {
            color: white;
            text-decoration: none;
            display: block;
            height: 100%;
            width: 100%;
            text-align: center;
        }

        button.back-button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
             0% {
                 opacity: 0;
                 transform: scale(0.9);
             }
             100% {
                 opacity: 1;
                 transform: scale(1);
             }
        }
    </style>
</head>
<body>
    <h2></h2>
    <?php
    // Database connection details
    include('config.php');

    // Check connection
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }

    // Read the log file
    $logFile = "webhook_data.log";
    $logData = file($logFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Check if there's any data in the log file
    if (!empty($logData)) {
        // Get the latest line
        $latestLine = end($logData);
        $jsonData = json_decode($latestLine, true);

        if ($jsonData) {
            // Decode the 'meta' field separately if it's a JSON string
            $metaData = json_decode($jsonData['meta'], true);

            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Event</th>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Email</th>";
            echo "<th>Currency</th>";
            echo "<th>Amount</th>";
            echo "<th>Status</th>";
            
            echo "</tr>";

            echo "<tr>";
            echo "<td>{$jsonData['event']}</td>";
            echo "<td>{$jsonData['first_name']}</td>";
            echo "<td>{$jsonData['last_name']}</td>";
            echo "<td>{$jsonData['email']}</td>";
            echo "<td>{$jsonData['currency']}</td>";
            echo "<td>{$jsonData['amount']}</td>";
            echo "<td>{$jsonData['status']}</td>";
           
            echo "</tr>";
            echo "</table>";
        } else {
            echo "No valid JSON data found.";
        }
    } else {
        echo "No data available in the log file.";
    }

    // Close the database connection
    $link->close();
    ?>
    <button class="back-button" style="margin-left:40%;margin-top:5%"><a href="finance.php">Back to home page</a></button>
    <p style="margin-left:19%; color:white;font-size:30px"></p>

    <div class="div">
        <p>Paid successfully</p>
    </div>
</body>
</html>
