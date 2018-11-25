<?php
session_start();
$name=$_POST['username'];
$pass=$_POST['pass'];

if($name==("admin") & $pass==("admin")){
	
	$_SESSION['admin']=$name;
	header("location:adminHome.php");
}
else
	if($pass!=("admin")){
		echo 'Wrong password or username';
	}
?>