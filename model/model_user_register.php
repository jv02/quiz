<?php
include('../controller/users.php');
$register = new users;

extract($_POST);
$query="INSERT INTO user (username,email,password) VALUES('$username','$email','$password')";
if($register->register1($query))
{
	$register->url("../user_register.php?run=success");
}

?>