<?php
$sql = "INSERT INTO test (name,email,phoneNumber) ";
$sql = $sql . " VALUES ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

// Connect to server and select database
$servername = "localhost";
$username = "root";
$password = "root";
$database = "db1_gwalke01";

// Create connection
$link = new mysqli($servername, $username, $password,$database);

// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
echo "Connected successfully";

// Execute sql statement
if (mysqli_query($link, $sql)) {
    echo "<br/>New record created successfully";
} else {
    echo "Error: " . $sql . "".mysqli_error($link);
}

$sql = "SELECT * FROM test";

// Execute sql statement

//$result = $link->query($sql); Object Oriented style
$result = mysqli_query($link,$sql);

while ($row = $result->fetch_assoc())
{
    echo "<br/>$row[name]  $row[email]  $row[phoneNumber] ";
}
?>