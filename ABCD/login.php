<?php
/**
 * Created by PhpStorm.
 * User: Praveen
 * Date: 11/8/2015
 * Time: 11:39 AM
 */

require_once('dbcontroller.php');

$db_handle = new DBController();

$userName = $_POST['username'];
$password = $_POST['password'];

$result = $db_handle->runQuery("select * from users WHERE username = '$userName' AND password = '$password'");

print(json_encode($result));

?>