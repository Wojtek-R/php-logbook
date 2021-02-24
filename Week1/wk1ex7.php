<html>
<body>
<?php
    $hourlyrate = 5.75;
    $hoursperweek = 40;
    define("INCOMETAX", 0.22);
    $gross = $hourlyrate * $hoursperweek;
    $net = $gross - ($gross * INCOMETAX);
    echo "Your wage is: ".$gross."<br>";
    echo "Your NET wage is: ".$net;
?>
</body>
</html>

