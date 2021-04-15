<?php

// Connect to server and select database
$servername = "localhost";
$username = "root";
$password = "root";
$database = "db1_gwalke01";

$link = new mysqli($servername, $username, $password,$database);

//$sql = "UPDATE test
//SET email = '$_POST[txtemail]', phoneNumber = '$_POST[txttelno]'
//WHERE name = '$_POST[txtname]'";

$sql = "DELETE FROM test WHERE name = '$_POST[txtname]'";

if (mysqli_query($link, $sql)) {
//    echo "<br/>Record successfully updated";
    echo "<br/>Record successfully deleted";
} else {
    echo "Error: " . $sql . "".mysqli_error($link);
}
?>