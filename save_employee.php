<?php
// Set up the database connection
$servername = "localhost"; // Your database server
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "lalithjewel"; // Your database name

// Create the connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and assign form data to variables
    $licno = $_POST['licno'];
    $date = $_POST['date'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $heir = $_POST['heir'];
    $loan_amount = $_POST['loan_amount'];
    $details = $_POST['details'];
    $weight = $_POST['weight'];
    $value = $_POST['value'];
    $redemption_date = $_POST['redemption_date'];
    
    // Insert data into the database
    $sql = "INSERT INTO employees (licno, date, amount, name, address, phone, heir, loan_amount, details, weight, value, redemption_date)
            VALUES ('$licno', '$date', '$amount', '$name', '$address', '$phone', '$heir', '$loan_amount', '$details', '$weight', '$value', '$redemption_date')";

    if ($conn->query($sql) === TRUE) {
        // Show a success message using JavaScript (pop-up)
        echo "<script>alert('New record created successfully'); window.location.href='index.html';</script>";
    } else {
		echo "<script>alert('Error in Record sSaving !!! '); ;</script>";

    }


    // Close the connection
    $conn->close();
}
?>