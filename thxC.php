<?php 
	session_start();
	$con = mysqli_connect("mysql.j38017730.myjino.ru", "j38017730", "65323735bd", "j38017730");
	$query_text = "INSERT INTO events (options, org_img, img1, img2) VALUES ('{$_POST['options']}', '{$_POST['org_img']}', '{$_POST['img1']}', '{$_POST['img2']}')";
	$results = mysqli_query($con, $query_text); 

	
	header("Location: events.php");
?>