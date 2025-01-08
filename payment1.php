
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
            <input style="width:380px" class="form-control" type="date" name="adate" value="<?php echo date('Y-m-d'); ?>" readonly>
            
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" value="" />
            
            <input type="hidden" name="currency" value="ETB" />
            <input type="hidden" name="title" value="" />
            <input type="hidden" name="description" value="Paying with Confidence with cha" />
            <input type="hidden" name="logo" value="https://chapa.link/asset/images/chapa_swirl.svg" />
            <input type="hidden" name="callback_url" value="https://6119-102-218-51-90.ngrok-free.app/opentendersystem/webhook_read1.php" />
            <input type="hidden" name="return_url" value="https://6119-102-218-51-90.ngrok-free.app/opentendersystem/webhook_read1.php" />
            
            <button type="submit">Pay Now</button>
            <button type="button" onclick="window.location.href='sregister.php'" style="background-color: #888;">Back</button>
        </form>
        <div id="rules">
    <h2>Suppliers Procedure</h2>
    <ul>
    1. Suppliers only fill the birr in the bid document prepared by the procurement team. <br>
    2. Any bids document is forbidden after tender closed.<br>
    3. Winner supplier must be made contract with the university. <br>
    4. Winner suppliers must come the items by your own transport to the university.
    </ul>
    <input type="checkbox" id="acceptRules" name="acceptRules" value="accepted">
    <label for="acceptRules">I accept the Suppliers Procedure Rules if you want to continue to pay!</label>
    
</div>

        </div>
    </div>
</body>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var acceptRules = document.getElementById('acceptRules').checked;
    var paymentForm = document.getElementById('paymentForm');

    if (!acceptRules) {
        paymentForm.querySelectorAll('input, select, textarea, button').forEach(function(el) {
            el.setAttribute('disabled', 'disabled');
        });
    }

    document.getElementById('acceptRules').addEventListener('change', function() {
        acceptRules = document.getElementById('acceptRules').checked;

        if (acceptRules) {
            paymentForm.querySelectorAll('input, select, textarea, button').forEach(function(el) {
                el.removeAttribute('disabled');
            });
        } else {
            paymentForm.querySelectorAll('input, select, textarea, button').forEach(function(el) {
                el.setAttribute('disabled', 'disabled');
            });
        }
    });
});
</script>
<script>

    // Fetch dynamically generated transaction reference from server
    fetch('generate_tx_ref.php')
        .then(response => response.json())
        .then(data => {
            // Set the transaction reference in the hidden input field
            document.getElementById('tx_ref').value = data.tx_ref;
        })
        .catch(error => {
            console.error('Error fetching transaction reference:', error);
        });
</script>
<script>
    function submitPaymentForm() {
        // Submit the form to Chapa API
        var form = document.getElementById("paymentForm");
        form.submit();

        // Send webhook request
        var webhookUrl = "https://1607-197-156-124-116.ngrok-free.app/mudryk/index/payment.php"; // Replace with your actual webhook URL
        var payload = {
            transaction_reference: form.tx_ref.value,
            amount: form.amount.value,
            status: "success" // You can customize this based on Chapa API response
        };

        // Send the payload to the webhook URL
        fetch(webhookUrl, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(payload)
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            else
        {
       alert('Webhook request sent successfully');

        }
          
        })
        .catch(error => {
            console.error('There was a problem with the webhook request:', error);
        });
    }
</script>
<script>
            document.getElementById('duration_days').addEventListener('input', function() {
            var price = parseFloat(document.getElementById('car_price').value);
            var days = parseInt(document.getElementById('duration_days').value);
            if (!isNaN(price) && !isNaN(days) && days > 0) {
                var totalAmount = price * days;
                document.getElementById('amount').value = totalAmount.toFixed(2);
            } else {
                document.getElementById('amount').value = 0;
            }
        })
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date();
        var tomorrow = new Date(today);
        tomorrow.setDate(tomorrow.getDate() + 1);

        var todayStr = today.toISOString().split('T')[0];
        var tomorrowStr = tomorrow.toISOString().split('T')[0];

        var startDateInput = document.getElementById('start_date');
        startDateInput.setAttribute('min', todayStr);
        startDateInput.setAttribute('max', tomorrowStr);
    });
</script>
<script>
    function calculate(){
     const start = new Date(document.getElementById("start_date").value)
      const end=new Date( document.getElementById("end_day").value)
      const amount= document.getElementById("amount").value
      const price=<?php echo $price?>;
        const difference=end-start
    const daydifference=difference/(1000*60*60*24)
        document.getElementById("amount").value=daydifference*price
   
   
   console.log(amount)
   console.log(price)
   console.log(daydifference)
    }
 </script>  
  <script>
    function setDateLimits() {
      const today = new Date();
      const todayStr = today.toISOString().split('T')[0];

      const startDateInput = document.getElementById('start_date');
      startDateInput.min = todayStr;
    }

    function updateDurationLimit() {
      const startDateInput = document.getElementById('start_date');
      const durationInput = document.getElementById('end_day');
      
      if (startDateInput.value) {
        const startDate = new Date(startDateInput.value);
        const minDurationDate = new Date(startDate);
        minDurationDate.setDate(startDate.getDate() + 1);
        const minDurationDateStr = minDurationDate.toISOString().split('T')[0];
        
        durationInput.min = minDurationDateStr;
        durationInput.value = '';
      }
    }

    window.onload = setDateLimits;

</div>
        </div>
    </div>
</body>
</html>