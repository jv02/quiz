<?php
session_start();
class users
{
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "phpquiz";
	public $conn;
	public function __construct()
	{

		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		} 
	}
	public function register1($data)
	{
		$this->conn->query($data);
		return true;
	}
	public function login($email,$password)
	{
		$query=$this->conn->query("SELECT email,password FROM user WHERE email='$email' AND password='$password'");
		$query->fetch_array(mysqli_assoc);
		if($query->num_rows>0)
		{
			$_SESSION['email']=$email;
			return true;
		}
		else
		{
			return false;
		}
	}
	public function url($url)
	{
		header("location:".$url);
	}
}

?>