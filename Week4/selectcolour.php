<html>
<head>
    <title>Select colour page</title>
</head>
<body>

<?php
    session_start();
    $_SESSION['size']=$_POST['size'];
?>

<form action="confirmation.php" method="post">
    Select the colour for the <?php echo $_SESSION['selqty']; ?> widgets you are ordering for the price of <?php echo $_SESSION['size']; ?> each.
    <select name="selcolour">
        <option>white</option>
        <option>red</option>
        <option>yellow</option>
        <option>green</option>
        <option>blue</option>
    </select>
    <br/><br/>
    <input type="submit" value="Buy"/>
</form>
</body>
</html>