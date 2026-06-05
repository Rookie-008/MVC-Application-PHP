<?php  

	class Article_model {
		private $dbHandler; // database handler
		private $statement;

		public function __construct() {
			// data Source Name
			$dbSource = 'mysql:home=localhost;dbname=dbPhpMVC';

			try {
				$this->dbHandler = new PDO($dbSource, 'newUsername', 'abcd1234');
			} catch(PDOException $error) {
				die($error->getMessage());
			}
		}

		public function getDataArticle() {
			$this->statement = $this->dbHandler->prepare('SELECT * FROM article');
			$this->statement->execute();
			return $this->statement->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>