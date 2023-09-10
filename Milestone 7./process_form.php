<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $description = $_POST["description"];
    
    // Prepare data to be sent as JSON
    $data = [
        "name" => $name,
        "email" => $email,
        "description" => $description
    ];

    // Convert data to JSON format
    $json_data = json_encode($data);

    // Set up cURL to send POST request
    $ch = curl_init("https://postman-echo.com/post");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Content-Length: " . strlen($json_data)
    ]);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo "Error: " . curl_error($ch);
    } else {
        // Output the response from the server
        echo "Server Response:<br>";
        echo $response;
    }

    // Close cURL resource
    curl_close($ch);
} else {
    // Handle non-POST requests
    echo "Invalid request method.";
}
?>
