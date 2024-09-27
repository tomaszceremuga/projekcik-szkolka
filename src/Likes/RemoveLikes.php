<?php 


$servername = "sql79.lh.pl";
$username = "serwer141977_csgott";
$password = "@sdf12LOP";
$table = "serwer141977_csgott";
// Create connection
$conn = new mysqli($servername, $username, $password,$table);

$browser= $_SERVER['HTTP_USER_AGENT'];
$article = htmlentities($_POST['article']);

$sql = "DELETE FROM `likes` WHERE browser = '".$browser."' AND article = '".$article."'";
$result = $conn->query($sql);

setcookie('likes-'.$article,0,time()+(86400 * 365), "/");