<?php
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
	public function register($data)
	{

	$this->conn->query($data);
}
}

new users;
?>