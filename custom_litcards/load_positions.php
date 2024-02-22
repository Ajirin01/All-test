<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $cardName = 'card-1'; // Replace with your card name or obtain it dynamically
    $filePath = 'card_positions/' . $cardName . '.json'; // Path to the JSON file

    if (file_exists($filePath)) {
        // Read the JSON file
        $jsonData = file_get_contents($filePath);

        // Send JSON response with the saved positions
        header('Content-Type: application/json');
        echo $jsonData;
    } else {
        http_response_code(404);
        echo 'Positions file not found.';
    }
} else {
    // Handle other HTTP methods or invalid requests
    http_response_code(400);
    echo 'Invalid request.';
}
?>
