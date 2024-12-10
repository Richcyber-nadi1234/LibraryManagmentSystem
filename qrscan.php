<?php
// Database connection settings
$host = 'localhost'; // Change as needed
$dbname = 'librarymanagementdb'; // Your database name
$username = 'root'; // Replace with your DB username
$password = '';     // Replace with your DB password

try {
    // Create a PDO instance for database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if data is received via POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Decode JSON data from the QR code scanner
        $qrData = json_decode(file_get_contents('php://input'), true);

        // Validate and extract data
        if (!empty($qrData['Membership_Number']) && !empty($qrData['Name']) && 
            !empty($qrData['Contact']) && !empty($qrData['ID_Number'])) {
            
            $membershipNumber = $qrData['Membership_Number'];
            $name = $qrData['Name'];
            $contact = $qrData['Contact'];
            $idNumber = $qrData['ID_Number'];

            // Prepare an SQL statement to insert the data
            $stmt = $pdo->prepare("
                INSERT INTO users (Membership_Number, Name, Contact, ID_Number) 
                VALUES (:membershipNumber, :name, :contact, :idNumber)
            ");
            $stmt->bindParam(':membershipNumber', $membershipNumber);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':contact', $contact);
            $stmt->bindParam(':idNumber', $idNumber);

            // Execute the query
            if ($stmt->execute()) {
                echo json_encode(['status' => 'success', 'message' => 'User data inserted successfully']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to insert user data']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid QR code data']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
}
