<?php
    include("class_lib.php");

    $stefan = new person();
    $jimmy = new person();
    $stefan->setName("Stefan Mischook");
    $jimmy->setName("Nick Waddles");

    echo "Stefan's full name: ". $stefan->getName() ."<br/>";
    echo "Nick's full name: ". $jimmy->getName();
?>
