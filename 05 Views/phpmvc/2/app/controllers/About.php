<?php  

	class About extends Controller {
		public function index($string1 = 'Calm', $string2 = 'Humble', $string3 = 'Strong') {
			$data['string1'] = $string1;
			$data['string2'] = $string2;
			$data['string3'] = $string3;
			
			$this->view('about/index', $data);
		}

		public function page() {
			$this->view('about/page');
		}
	}
	
?>
