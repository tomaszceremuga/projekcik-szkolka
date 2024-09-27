<?php


$servername = "sql79.lh.pl";
$username = "serwer141977_csgott";
$password = "@sdf12LOP";
$table = "serwer141977_csgott";
// Create connection
$conn = new mysqli($servername, $username, $password, $table);

$article = htmlentities($_POST['article']);

$sql = "SELECT * FROM likes WHERE article = '" . $article . "'";
$result = $conn->query($sql);
header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'count' => $result->num_rows,
    'is_filled' => (isset($_COOKIE['likes-'.$article]))?$_COOKIE['likes-'.$article]:0
]);
