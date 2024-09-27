<?php

$action = htmlentities($_POST['action']);

if($action == 0 || $action == 1){
    setcookie('switcher',$action,time()+(86400 * 365), "/");
}



header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'theme' => $_COOKIE['switcher'] ?? 0

]);