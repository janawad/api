<?php
/**
 * Created by PhpStorm.
 * User: Praveen
 * Date: 11/8/2015
 * Time: 11:45 AM
 */

require_once('dbcontroller.php');

$db_control = new DBController();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$result = $db_control->runQuery("SELECT * FROM users WHERE firstname = '$firstname' AND lastname = '$lastname'");

print(json_encode($result));

?>