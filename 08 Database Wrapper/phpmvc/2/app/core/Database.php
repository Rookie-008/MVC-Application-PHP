<?php  

	class Database {
		private $host = DB_HOST;
		private $user = DB_USER;
		private $password = DB_PASSWORD;
		private $dbName = DB_NAME;

		private $dbHandler;
		private $dbStatement;

		public function __construct() {
			// data Source Name
			$dbSource = 'mysql:'. $this->host . ';dbname=' . $this->dbName;

			$option = [
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			];

			try {
				$this->dbHandler = new PDO($dbSource, $this->user, $this->password, $option);
			} catch(PDOException $error) {
				die($error->getMessage());
			}
		}

		public function query($query) {
			$this->statement = $this->dbHandler->prepare($query);
		}

		public function bind($param, $value, $type = null) {
			if( is_null($type) ) {
				switch( true ) {
					case is_int($value) :
						$type = PDO::PARAM_INT;
						break;
					case is_bool($value) :
						$type = PDO::PARAM_BOOL;
						break;
					case is_null($value) :
						$type = PDO::PARAM_NULL;
						break;
					default :
						$type = PDO::PARAM_STR;
				}	
			}

			$this->statement->bindvalue($param, $value, $type);
		}

		public function execute() {
			$this->statement->execute();
		}

		public function resultSet() {
			$this->execute();
			return $this->statement->fethAll(PDO::FETCH_ASSOC);
		}

		public function single() {
			$this->execute();
			return $this->statement->fetch(PDO::FETCH_ASSOC);
		}
	}


?>
