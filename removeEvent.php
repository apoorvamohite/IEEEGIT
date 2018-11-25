<?php
require "../init.php";
$id = $_GET['id'];
$table =$_GET['table'];
$sql = "DELETE FROM ".$table." WHERE id = $id";
mysqli_query($con, $sql);
if($table=="events"){
	header("Refresh:0; url=displayEvent.php");
}elseif ($table=="boardmembers") {
	header("Refresh:0; url=displayBoard.php");
}else{
	header("Refresh:0; url=displayImages.php");
}

?>