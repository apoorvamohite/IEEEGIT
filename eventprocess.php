<?php
require "../init.php";

$eventname = $_POST['title'];
$eventdate = $_POST['eventdate'];
$desc = $_POST['description'];
$eventlink = $_POST['link'];
$imglink = "";
if(isset($_FILES['image'])){
	$flag =0;
	$url = "img/event/";
	$tfile = $_FILES["image"]["name"];
	$tempname = $_FILES['image']['tmp_name'];
	$target_path = "../img/event/".$tfile;
	echo $tempname;

	if(move_uploaded_file($tempname, $target_path)){
		$flag= $flag+1;
		echo "Uploaded!";
	}else{
		echo "<br>Error:".$_FILES['image']['error'];
		echo "File size exceeded!";
	}
	$imglink=$url.$tfile;
	echo $imglink;
}
$sql = "INSERT INTO events(name, description, eventDate, pic, link) VALUES('$eventname', '$desc', '$eventdate', '$imglink', '$eventlink')";
mysqli_query($con, $sql);
header("Location: addEvent.php?success=true");
?>