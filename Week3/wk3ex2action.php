<?php
if ($_POST["txtage"] < 21)
{
    echo "You are under 21 years old<br/>";
}
else
{
    echo "You are  21 years old or over<br/>";
}
if ($_POST["txtgender"] == "Male" || $_POST["txtgender"] == "male")
{
    echo "You are a male";
}
elseif ($_POST["txtgender"] == "Female" || $_POST["txtgender"] == "female")
{
    echo "You are a female";
}
else
{
    echo "Sorry cannot recognize the gender. Please try again.";
}
?>