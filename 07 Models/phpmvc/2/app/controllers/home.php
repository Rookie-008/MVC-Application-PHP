<?php  

	class Home extends Controller {
		public function index() {
			$data['title'] = 'Home';
			$data['string1'] = $this->model('String_model')->getString();

			$this->view('templates/header', $data);
			$this->view('home/index', $data);
			$this->view('templates/footer');
		}
	}
	
?>