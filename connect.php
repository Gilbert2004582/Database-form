<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Adjust if you have a password set for the root user
$dbname = "amazon_customers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO customers (customer_id, name, country_code, contact_number, shipping_address, payment_method) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("isssss", $customer_id, $name, $country_code, $contact_number, $shipping_address, $payment_method);

// Get data from the form
$customer_id = $_POST['customer_id'];
$name = $_POST['name'];
$country_code = $_POST['country_code'];
$contact_number = $_POST['contact_number'];
$shipping_address = $_POST['shipping_address'];
$payment_method = $_POST['payment_method'];

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
