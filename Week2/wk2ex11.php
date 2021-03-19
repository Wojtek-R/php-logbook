<?php
$mymarks["CO453"] = 75;
$mymarks["CO450"] = 67;
$mymarks["CO454"] = 82;
$mymarks["CO451"] = 78;
$mymarks["CO455"] = 90;
$mymarks["CO456"] = 64;

$total = 0;

foreach( $mymarks as $index => $mark ){
    $total = $total + $mymarks[$index];
    echo "Module code - ". $index . " mark: ". $mark . "</br>";
}

$average = $total /  6;
echo "</br>Your average mark is: " . $average;
?>