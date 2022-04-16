<?php 
	$con = mysqli_connect("mysql.j38017730.myjino.ru", "j38017730", "65323735bd", "j38017730");
	$update = "UPDATE posts SET text = '{$_POST["text"]}', image = '{$_POST["image"]}' WHERE post_id = {$_POST["id"]}";
	$results = mysqli_query($con, $update);
	header("Location: chat.php");
	echo $_POST["image"];
?>