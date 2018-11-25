<?php
	require "../init.php";
	
	$mem_name = $_POST['name'];
	$mem_post = $_POST['post'];
	$mem_year = $_POST['year'];

	$flag =0;
	$url = "../img/board/";
	$tfile = $_FILES["image"]["name"];
	$tempname = $_FILES["image"]["tmp_name"];
	$target_path = "../img/board/".$tfile;
	if(move_uploaded_file($tempname, $target_path)){
		$flag= $flag+1;
	}
	$link=$url.$tfile;
	$sql = "INSERT INTO boardmembers(name, post, pic, year) VALUES('$mem_name', '$mem_post', '$link', '$mem_year')";
	mysqli_query($con, $sql);
	header("Location: addMember.php?success=true");
?>