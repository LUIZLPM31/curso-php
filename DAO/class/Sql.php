<?php 

class Sql extends PDO {

	private $conn;

	public function __construct(){

		$this->conn = new PDO("mysql:host=localhost;dbname=bd_php", "root", "");

	}

	private function setParams($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {
			
			$this->setParam($statement, $key, $value);

		}

	}

	private function setParam($statement, $key, $value){

		$statement->bindParam($key, $value);

	}


	public function select($rawQuery, $params = array()):array
	{

		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);

	}

}

 ?>