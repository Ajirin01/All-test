<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cardName = 'card-1'; // Replace with your card name or obtain it dynamically
    $jsonData = $_POST['cardData'];
    
    // Define the file path (e.g., 'card_positions/your_card_name.json')
    $filePath = 'card_positions/' . $cardName . '.json';

    // Save the JSON data to the file
    file_put_contents($filePath, $jsonData);

    // Respond with a success message (or appropriate response)
    echo 'Positions saved successfully.';
} else {
    // Handle other HTTP methods or invalid requests
    http_response_code(400);
    echo 'Invalid request.';
}
?>
