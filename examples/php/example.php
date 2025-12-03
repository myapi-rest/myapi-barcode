<?php

$payload = [
    "data" => "DEC25-45PC",
    "barcode_format" => "code_128",
    "output_format" => "SVG",
    "width" => 200,
    "height" => 50,
    "margin" => 0
];

$ch = curl_init("https://api.myapi.rest/api/barcode/generate");

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer <API_KEY>",
        "Content-Type: application/json"
    ],
    CURLOPT_POSTFIELDS => json_encode($payload)
]);

echo curl_exec($ch);
curl_close($ch);
