<?php
include("myfunctions.inc");
html_header("My second function demo");
    echo "I pay £ " . calculatetax(12000,40, 4000) . " tax";
html_footer();

?>