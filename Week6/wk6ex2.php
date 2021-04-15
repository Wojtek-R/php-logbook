<?php

// Connect to server and select database
$servername = "localhost";
$username = "root";
$password = "root";
$database = "db1_gwalke01";

$link = new mysqli($servername, $username, $password,$database);

$sql = "SELECT * from test";
// Execute sql statement
$result = mysqli_query($link, $sql);

?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
    echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";
}
?>
</body>
</html>