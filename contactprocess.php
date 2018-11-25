<?php
require "init.php";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$sql = "INSERT INTO contact(name, email, subject, msg) VALUES ('$name', '$email', '$subject', '$msg')";
mysqli_query($con, $sql);
header("Location:index.php?msgsent=true#sendmessage");
?>