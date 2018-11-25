<?php
require "init.php";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];
$date = date("Y-m-d");

$sql = "INSERT INTO contact(msgDate, name, email, subject, msg) VALUES ('$date','$name', '$email', '$subject', '$msg')";
mysqli_query($con, $sql);
header("Location:index.php?msgsent=true#sendmessage");
?>