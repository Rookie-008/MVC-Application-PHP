<?php  

	class Article_model {

		// private $table = 'article';
		private $database;

		public function __construct() {
			$this->database = new Database;
		}

		public function getDataArticle() {
			// $this->database->query('SELECT * FROM' . $this->table); // ERROR - DATABASE NOT CONNECTED
			$this->database->query('SELECT * FROM article'); // DATABASE CONNECTED
			return $this->resultSet();
		}

		public function getDataArticleById($id) {
			// $this->database->query('SELECT * FROM' . $this->table . 'WHERE id=:id'); // ERROR - DATABASE NOT CONNECTED
			$this->database->query('SELECT * FROM article WHERE id=:id'); // DATABASE CONNECTED
			$this->databae->bind('id', $id);
			return $this->database->single();
		}
	}

?>