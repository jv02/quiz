<?php
include('../controller/users.php');
$register = new users;

extract($_POST);

$query="insert into user values('','$username','$email','$password')";

$register->register1($query);

?>