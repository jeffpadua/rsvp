<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$mailheader = "From:" .$nfame."<".$lname.">\r\n";

$recipient = "jep.padua@gmail.com";
mail($recipient, $fname, $lname, $mailheader)
or die("Error!");

echo"Message me!";
?>