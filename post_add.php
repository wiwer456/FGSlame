<?php 
	session_start();

	$uploaded_file_path = "assets/pst-img/" . basename($_FILES['post_img']['name']);
	$source_file = $_FILES['post_img']['tmp_name']; 
	$upload = move_uploaded_file($source_file, $uploaded_file_path);

	$con = mysqli_connect("mysql.j38017730.myjino.ru", "j38017730", "65323735bd", "j38017730");
	$query_text = "INSERT INTO posts (text, image, user_id) VALUES ('{$_POST['post_text']}', '{$uploaded_file_path}', '{$_SESSION['user_id']}')";
	$query = mysqli_query($con, $query_text);

	header("Location: chat.php");	
?>