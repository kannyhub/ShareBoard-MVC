<?php
abstract class Model {
	protected $dbh;
	protected $stmt;

	public function __construct() {
		try {
		  	$conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
		  			// set the PDO error mode to exception
		  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  	$this->dbh=$conn;
		  	if ($this->dbh) {
		  		$sql="CREATE TABLE IF NOT EXISTS `tblusers` (
				  `id` INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
				  `name` varchar(50) NOT NULL,
				  `email` varchar(70),
				  `password` varchar(20),
				  `register_date` datetime(6)
				) CHARACTER SET utf8 COLLATE utf8_general_ci";
				$this->query($sql);
				$this->execute();
		  	}
		} catch(PDOException $e) {
		  echo "Connection failed: " . $e->getMessage();
		}	
	}

	public function query($query) {
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param,$value) {
		$this->stmt->bindValue($param,$value);
	}

	public function execute() {
		$this->stmt->execute();
	}

	public function lastInsertId() {
		return $this->dbh->lastInsertId();
	}

	public function result() {
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}