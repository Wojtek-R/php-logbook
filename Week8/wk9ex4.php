<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$database = "db1_gwalke01";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "select * from lotto;";
$result = mysqli_query($conn,$sql);

echo "<form action='$_SESSION[PHP_SELF]' method='post' >";
echo "<br/>Select the lottery week ";
echo "<select name='selweek' >";
while($row = mysqli_fetch_array($result)) {
    echo "<option value='$row[wk]'>$row[wk]</option>";
}
echo "</select><br/>";
echo "<input type='submit' value='Select' />";
echo "</form>";
?>