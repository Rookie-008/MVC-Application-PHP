<?php  

	class Article_model {

		// private $table = 'article';
		private $database;

		public function __construct() {
			$this->database = new Database;
		}

		public function getDataArticle() {
			// $this->database->query('SELECT * FROM' . $this->table); // ERROR - DATABASE NOT CONNECTED
			$this->database->query('SELECT * FROM article2'); // DATABASE CONNECTED
			return $this->resultSet();
		}

		public function getDataArticleById($id) {
			// $this->database->query('SELECT * FROM' . $this->table . 'WHERE id=:id'); // ERROR - DATABASE NOT CONNECTED
			$this->database->query('SELECT * FROM article2 WHERE id=:id'); // DATABASE CONNECTED
			$this->databae->bind('id', $id);
			return $this->database->single();
		}

		public function addDataArticle($data) {
			$query = "INSERT INTO article2 VALUES (:id, :articleTitle, :dataArticle, :releaseNumber, :email, :genre)";

			$this->database->query($query);

			$this->database->bind('id', $data['id']);
			$this->database->bind('articleTitle', $data['articleTitle']);
			$this->database->bind('dataArticle', $data['dataArticle']);
			$this->database->bind('releaseNumber', $data['releaseNumber']);
			$this->database->bind('email', $data['email']);
			$this->database->bind('genre', $data['genre']);

			$this->database->execute();

			return $this->database->dataCount();
		}

		public funtion deleteDataArticle($id) {
			$query = "DELETE FROM article2 WHERE id=:id";

			$this->database->query($query);
			$this->database->bind('id',$id);

			$this->database->execute();

			return $this->database->dataCount();
		}
	}

?>