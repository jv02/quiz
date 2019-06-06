<?php
include('../controller/users.php');
$login = new users;

extract($_POST);
if($login->login($email,$password))
{
	$login->url("../userhome.php");
}
else
{
	$login->url("../user_login.php?run=failed");
}

?>