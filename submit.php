<?php
// Database connection details
$servername = "localhost";
$username = "jem"; // replace with your MySQL username
$password = "jem"; // replace with your MySQL password
$database = "form"; // database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$address = $_POST['address'];
$coursec = $_POST['coursec'];

// Insert data into table
$sql = "INSERT INTO user_data (firstname, middlename, lastname, age, address, coursec)
        VALUES ('$firstname', '$middlename', '$lastname', '$age', '$address', '$coursec')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
