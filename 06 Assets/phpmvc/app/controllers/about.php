<?php  

	class About extends Controller {
		public function index($string1 = 'Calm', $string2 = 'Humble', $string3 = 'Strong') {
			$data['string1'] = $string1;
			$data['string2'] = $string2;
			$data['string3'] = $string3;

			$data['title'] = 'About Page';
			$this->view('templates/header', $data);
			$this->view('about/index', $data);
			$this->view('templates/footer');
		}

		public function page() {
			$data['title'] = 'Page';
			$this->view('templates/header', $data);
			$this->view('about/page');
			$this->view('templates/footer');
		}
	}
	
?>
