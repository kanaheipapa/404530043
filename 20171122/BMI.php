<?php

$result=$_POST["height"]*$_POST["height"];
$result=$_POST["weight"]/$result;
echo "Height:".$_POST["height"]."m<br/>";
echo "Weight:".$_POST["weight"]."kg<br/>";
echo "BMI:".$result;
?>