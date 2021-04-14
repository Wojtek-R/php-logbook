<?php
    session_start();
    $total = $_SESSION['size'] * $_SESSION['selqty'];

    $size = "";
    switch ($_SESSION['size']){
        case 15.75: $size = "Small"; break;
        case 16.75: $size = "Medium"; break;
        case 17.75: $size = "Large"; break;
        case 18.75: $size = "Extra Large";break;
    }

    echo "<h2> Your order qty is $_SESSION[selqty] <h2/><br/>";
    echo "<h2> Your selected size is $size <h2/><br/>";
    echo "<h2> and the selected colour is  $_POST[selcolour].</h2><br/>";
    echo "<h2> Total price is: $total <h2/>"
?>