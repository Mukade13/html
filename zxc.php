<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['first-name'] ?? '';
    $lastName = $_POST['last-name'] ?? '';
    $street = $_POST['street'] ?? '';
    $houseNumber = $_POST['house-number'] ?? '';
    $city = $_POST['city'] ?? '';
    
    // You can process the data here (e.g., save to database)
    
    // Display the submitted data
    echo "<!DOCTYPE html>
    <html lang='pl'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Dane formularza</title>
        
    </head>
    <body>
        <div class='data-container'>
            <h2>Wprowadzone dane:</h2>
            <div class='data-item'><span class='label'>Imię:</span> " . htmlspecialchars($firstName) . "</div>
            <div class='data-item'><span class='label'>Nazwisko:</span> " . htmlspecialchars($lastName) . "</div>
            <div class='data-item'><span class='label'>Ulica:</span> " . htmlspecialchars($street) . "</div>
            <div class='data-item'><span class='label'>Nr domu:</span> " . htmlspecialchars($houseNumber) . "</div>
            <div class='data-item'><span class='label'>Miasto:</span> " . htmlspecialchars($city) . "</div>
            
            <a href='calc.html' class='back-button'>Powrót do formularza</a>
        </div>
    </body>
    </html>";
} else {
    // If someone tries to access this file directly without POST data
    header("Location: form.html");
    exit();
}
?>