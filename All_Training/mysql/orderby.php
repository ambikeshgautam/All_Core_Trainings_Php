<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT email,fist_name, last_name FROM employee_address ORDER BY last_name";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Email: " . $row["email"]. " - Name: " . $row["fist_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 