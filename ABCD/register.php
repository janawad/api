<?php

require_once("dbcontroller.php");

$db_handle = new DBController();

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$userName = $_POST['user_name'];
$password = $_POST['password'];
$bloodGroup = $_POST['blood_group'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];

$res = $db_handle->insertQuery("insert into users(firstname, lastname, username, password, blood_group, email, phone, city) values('$firstName', '$lastName', '$userName', '$password', '$bloodGroup', '$email', '$phone', '$city')");

if($res){
    echo "success";
}else{
    echo null;
}

?>