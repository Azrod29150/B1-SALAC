<?php
class Database{

	private $pdo;

	public function __construct(){
        $db_host= "localhost";
        $db_user= "adminer";
        $db_pass= "Azerty123";
        $db_name= "salac_projet_b1";
		$this->pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	}

	/**
	* @param $query
	* @param bool|array $param
	* @return PDOStatement
	*/
	public function query($query, $params = []){
		$req = $this->pdo->prepare($query);
		$req->execute($params);
		return $req;
	}
}

$db = new Database();
?>