<?php  

	class Article extends Controller{
		public function index() {
			$data['title'] = 'Article Collection';
			$data['article'] = $this->model('Article_model')->getDataArticle();

			$this->view('templates/header', $data);
			$this->view('article/index', $data);
			$this->view('templates/footer');
		}
	}

?>