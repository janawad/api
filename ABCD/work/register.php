<?php 
require_once ("dbcontroller.php");

$db_handle = new DBController();

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$res = $db_handle->insertQuery("insert into users(firstname, lastname, mobile, password) values('$firstname', '$lastname', '$mobile', '$password')");

if($res){
	echo "success";
} else {
	echo "null";
}

?>