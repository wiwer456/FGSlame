<?php 
    $con = mysqli_connect("mysql.j38017730.myjino.ru", "j38017730", "65323735bd", "j38017730");
    $delete = "DELETE FROM posts WHERE post_id = {$_POST['id']} ";
    $query = mysqli_query($con, $delete);
    header("Location: chat.php");
?>