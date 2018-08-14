<?php
include('load.php');

class connectNewsletter extends mysqli{
	private $host;
	private $username;
	private $password;
	private $database;

	public function databaseVariables() {
		$config = new newsletterConfig();
		$this->host = $config->host;
		$this->username = $config->username;
		$this->password = $config->password;
		$this->database = $config->database;
	}

	public function mysqliOpen() {
		$config = new newsletterConfig();
		$host = $config->host;
		$username = $config->username;
		$password = $config->password;
		$database = $config->database;
		//var_dump($host);
		$mysqli = new mysqli($host, $username, $password, $database);
		if(!$mysqli) {
			die('Connect error (' . mysqli_connect_errno() . ')' . mysqli_connect_error());
		}
		return $mysqli;
	}
	public function mysqliClose() {
		$close = $this->mysqliOpen();
		return $close->close();
	}
	public function insertData() {
		$sql = "INSERT INTO dma271283_uic(nume, prenume, email, gdpr, oferte, spectacole, conferinte, activitati, inaugarari, infoPublic) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		return $sql;
	}

	public function checkEmailData() {
		$sql = "SELECT * FROM dma271283_uic WHERE email= ? ";
		return $sql;
	}
} 

//$connect = new connectNewsletter();

?>