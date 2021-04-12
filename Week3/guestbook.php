<html>
<head>
    <title>My Guestbook</title>
</head>
<body>

<h1>Welcome to my guestbook</h1>
<h2>Please write me a little note below</h2>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <textarea name="note" wrap="virual" cols="40" rows="5"></textarea><br/>
    <input type="submit" value="Send it">
</form>

<?php
    if(isset($_POST['note'])){
        $fp = fopen("Wojciech.txt","a");
        fputs($fp,nl2br($_POST['note']).'<br/>');
        fclose($fp);
    }
?>
<h2>The entries so far:</h2>

<?php
    @ReadFile("Wojciech.txt")
?>
</body>
</html>