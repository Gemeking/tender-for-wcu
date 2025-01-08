<?php
$currentDateTime = date('Y-m-d H:i:s'); // Get current date and time
session_start();
include 'config.php';
// Generate a unique transaction reference
$tx_ref = 'negade-tx-' . uniqid();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Chapa Payment Integration</title>
</head>
<style>
    /* Style for payment form */
/* Style for payment form * <style>
        /* Basic styling for the form */
        body {
    background-image: url('kanfal.jpg');
    background-size: cover; /* Ensure the background image covers the entire viewport */
    background-repeat: no-repeat; /* Prevent the background image from repeating */
    background-position: center center; /* Center the background image */
    background-attachment: fixed; /* Ensure the background image stays fixed during scrolling */
}

        #paymentForm {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }

        /* Styling the input fields */
        #paymentForm input[type="text"],
        #paymentForm input[type="number"],
        #paymentForm input[type="email"],
        #paymentForm input[type="date"],
        #paymentForm button {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Styling the button */
        #paymentForm button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        #paymentForm button:hover {
            background-color: #45a049;
        }

        /* Styling the labels */
        #paymentForm label {
            margin: 10px 0 5px 0;
            display: block;
            font-weight: bold;
        }

        /* Optional: adding a bit of spacing between the label and input */
        #paymentForm input[type="text"] + label,
        #paymentForm input[type="number"] + label,
        #paymentForm input[type="email"] + label,
        #paymentForm input[type="date"] + label {
            margin-top: 15px;
        }
        h1{
            color:black;
        }
        #container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
}

#paymentForm {
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

#rules {
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    height:30%;
    color:black;
    background-color:seashell;
}

#rules h2 {
    margin-top: 0;
}

#rules ul {
   
      list-style-type: none; /* Remove default list numbering */
      padding-left: 0; /* Remove default left padding */
    
}

#rules label {
    display: block;
    margin-top: 10px;
}

    </style>


    </head>
<body>
    <div id="container">
        <form id="paymentForm" method="POST" action="https://api.chapa.co/v1/hosted/pay">
            <h1>CHAPA PAYMENT GATEWAY</h1>
            <input type="hidden" name="public_key" value="CHAPUBK_TEST-MX3dc0pIKLcF5FFnmhATBtaJmz7vmbsn" />
            <input type="hidden" name="tx_ref" value="<?=$tx_ref?>" />
            
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="" />
            
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="" />
            
            <label for="email">Email</label>
            <input type="email" name="email" value="" />
            <label for="start_date">Date</label>
            <input style="width:380px" class="form-control" type="date" name="adate" name="meta[car_id]" value="<?php echo date('Y-m-d'); ?>" readonly>
             
            
            
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" value="" />
            
            <input type="hidden" name="currency" value="ETB" />
            <input type="hidden" name="title" value="" />
            <input type="hidden" name="description" value="Paying with Confidence with cha" />
            <input type="hidden" name="logo" value="https://chapa.link/asset/images/chapa_swirl.svg" />
            <input type="hidden" name="callback_url" value="https://737d-197-156-124-121.ngrok-free.app/opentendersystem/supwebhook.php" />
            <input type="hidden" name="return_url" value="https://737d-197-156-124-121.ngrok-free.app/opentendersystem/supwebhook.php" />
            
            <button type="submit">Pay Now</button>
            <button type="button" onclick="window.location.href='supplierwins.php'" style="background-color: #888;">Back to home</button>
        </form>
</div>
        </div>
    </div>
</body>
</html>