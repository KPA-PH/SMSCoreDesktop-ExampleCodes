<?php

// Init curl
$ch = curl_init();

$url = "http://127.0.0.1:21001";

// API endpoint and Path
$url = $url . '/api/v1/message/inbound';

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

// Receive response from server
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);

// Show the server response
$response = json_decode($output, true);

echo $output;
