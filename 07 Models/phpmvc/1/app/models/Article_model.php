<?php  

	class Article_model {
		private $article = [
			[
				"string1" => "Stay Humble",
				"string2" => "Stay Strong",
				"string3" => "Keep Fighting",
			],

			[
				"string1" => "Keep Work",
				"string2" => "Stay Focused",
				"string3" => "Keep Struggle",
			]
		];

		public function getDataArticle() {
			return $this->article;
		}
	}

?>