<?php  

	class App {
		public function __construct() {
			// echo 'The Only Way To DO Great Work Is To Love What You Do'; 
			var_dump($_GET);
		}

		public function parseURL() {
			if( isset($_GET['url']) ) {
				$url = $_GET['url'];
				return $url;
			}
		}
	}

?>