<?php 
	$con = mysqli_connect("mysql.j38017730.myjino.ru", "j38017730", "65323735bd", "j38017730");
	$query_text = "SELECT * FROM users WHERE password='{$_POST['password']}' AND email='{$_POST['email']}'";
	$query = mysqli_query($con, $query_text);

	if(mysqli_num_rows($query) > 0) {
		$user = mysqli_fetch_assoc($query);
		session_start();
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['status'] = user['status'];
		header("Location: index.php");
	} else {
		header("Location: loginstr.php");
	}
?>