<?php 
	session_start();
	$con = mysqli_connect("mysql.j38017730.myjino.ru", "j38017730", "65323735bd", "j38017730");
	$query_text = "INSERT INTO users (name, surname, phone, email, password, status) VALUES ('{$_POST['name']}', '{$_POST['surname']}', '{$_POST['phone']}', '{$_POST['email']}', '{$_POST['password']}', '{$_POST['status']}')";
	$results = mysqli_query($con, $query_text); 

	$_SESSION['user_id'] = mysqli_insert_id($con);
	$_SESSION['status'] = mysqli_insert_id($con);
	header("Location: index.php");
?>