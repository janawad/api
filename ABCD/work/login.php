<?php 
require_once('dbcontroller.php');

$db_handle = new DBController();


$mobile = $_POST['mobile'];
$password = $_POST['password'];

$res = $db_handle->runQuery("select * from users WHERE mobile= '$mobile' AND password = '$password'");

print(json_encode($res));
?>
