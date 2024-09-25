<?php

$number = "target-number";
$message = "Your test message here...";

// Init curl
$ch = curl_init();

/// Set query params
$parameters = array(
    'number' => $number,
    'message' => $message
);

$url = "http://127.0.0.1:21001";

// API endpoint and Path
$url = $url . '/api/v1/message/send?' . http_build_query($parameters);

// API endpoint and Path
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);

// Send the parameters set above with the request
// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($parameters));

// Receive response from server
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);

// Show the server response
// $response = json_decode($output, true);

echo $output;