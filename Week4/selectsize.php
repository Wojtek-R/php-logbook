<html>
<head>
    <title>Size selection Page</title>
</head>
<body>

<?php
session_start();
$_SESSION['selqty']=$_POST['selqty'];
?>

<form action="selectcolour.php" method="post">
    Select the size of the widgets you require:
    <input type="radio" name="size" id="small" value="15.75"/>
    <label for="small">Small (£15.75)</label>
    <input type="radio" name="size" id="medium" value="16.75"/>
    <label for="medium">Medium (£16.75)</label>
    <input type="radio" name="size" id="large" value="17.75"/>
    <label for="large">Large (£17.75)</label>
    <input type="radio" name="size" id="extralarge" value="18.75"/>
    <label for="extralarge">Extra large (£18.75)</label>

    <br/><br/>
    <input type="submit" value="Buy"/>
</form>
</body>
</html>