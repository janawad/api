<?php 
require_once ("dbcontroller.php");

$db_handle = new DBController();

$firstc = $_POST['firstc'];
$lastc = $_POST['lastc'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$res = $db_handle->insertQuery1("insert into user1(firstc, lastc, mobile, password) values('$firstc', '$lastc', '$mobile', '$password')");

if($res){
	echo "success";
} else {
	echo "null";
}

?>