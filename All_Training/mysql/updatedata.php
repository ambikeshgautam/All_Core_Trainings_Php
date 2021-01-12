<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_database";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "UPDATE employee_address SET last_name='suraj', fist_name='gautam',email='giggoo111@gmail.com' WHERE id=2";

// if (mysqli_query($conn, $sql)) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . mysqli_error($conn);
// }

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE employee_address SET last_name='suraj', fist_name='gautam',email='giggoo111@gmail.com' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
mysqli_close($conn);
?> 