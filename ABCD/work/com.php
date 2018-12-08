<?php 
require_once ("dbcontroller.php");

$db_handle = new DBController();


$mobile = $_POST['mobile'];
$password = $_POST['password'];

$result = $db_handle->runQuery1("SELECT * FROM user1 WHERE mobile = '$mobile' AND password = '$password'");

print(json_encode($result));
?>