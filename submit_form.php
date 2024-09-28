<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'aaru';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $admissionDate = $_POST['admission_date'];
    $package = $_POST['package'];
    $paymentMethod = $_POST['payment_method'];

    // Insert the data into the database
    $sql = "INSERT INTO admissions (first_name, last_name, email, phone, admission_date, package, payment_method)
            VALUES ('$firstName', '$lastName', '$email', '$phone', '$admissionDate', '$package', '$paymentMethod')";

    if ($conn->query($sql) === TRUE) {
        echo "Admission form submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
