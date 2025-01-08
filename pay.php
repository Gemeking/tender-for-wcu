<?php

// Ensure your server is set to listen to POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $secret = getenv('1111');

    // Read the request body
    $requestBody = file_get_contents('php://input');
    
    // Define the file path where you want to store the log file
    $logFilePath = 'C:/xamp/htdocs/opentendersystem/webhook_data.log';
    
    // Append the raw request body to the log file
    file_put_contents($logFilePath, "Raw Request Body:\n" . $requestBody . "\n\n", FILE_APPEND);
    
    // Create a hash using HMAC with the SHA256 algorithm
    $hash = hash_hmac('sha256', $requestBody, $secret);
    
    // Retrieve the 'Chapa-Signature' from the headers
    $headers = getallheaders();
    $signature = isset($headers['Chapa-Signature']) ? $headers['Chapa-Signature'] : '';

    // Validate the event
    if ($hash === $signature) {
        // Decode the JSON body
        $event = json_decode($requestBody, true);
        
        // Do something with the event
        // Example: log the event to another file
        file_put_contents('webhook_processed.log', print_r($event, true), FILE_APPEND);
    }

    // Respond with a 200 status code
    http_response_code(200);
} else {
    // Respond with a 405 Method Not Allowed if not a POST request
    http_response_code(405);
}