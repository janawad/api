<?php
/**
 * Created by PhpStorm.
 * User: Praveen
 * Date: 11/8/2015
 * Time: 11:45 AM
 */

require_once('dbcontroller.php');

$db_control = new DBController();

$bloodGroup = $_POST['blood_group'];
$city = $_POST['city'];

$result = $db_control->runQuery("SELECT * FROM users WHERE blood_group = '$bloodGroup' AND city = '$city'");

print(json_encode($result));

?>

