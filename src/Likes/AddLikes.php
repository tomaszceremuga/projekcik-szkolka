<?php 


$servername = "sql79.lh.pl";
$username = "serwer141977_csgott";
$password = "@sdf12LOP";
$table = "serwer141977_csgott";
// Create connection
$conn = new mysqli($servername, $username, $password,$table);

$agent= $_SERVER['HTTP_USER_AGENT'];
$article = htmlentities($_POST['article']);

$sql = "INSERT INTO `likes`(`browser`, `article`) VALUES ('".$agent."','".$article."')";
$result = $conn->query($sql);

setcookie('likes-'.$article,1,time()+(86400 * 365), "/");