<?php


$servername = "sql79.lh.pl";
$username = "serwer141977_csgott";
$password = "@sdf12LOP";
$table = "serwer141977_csgott";
// Create connection
$conn = new mysqli($servername, $username, $password, $table);


$article = htmlentities($_POST['article']);

$sql = "SELECT * FROM tutorials WHERE name LIKE '%" . $article . "%'";
$result = $conn->query($sql);

$array = [];
if ($result->num_rows > 0) {
    foreach ($result->fetch_assoc() as $row) {
        $array[] = $row;
    }
}
header('Content-Type: application/json; charset=utf-8');

echo json_encode($array);
