<?php  

	class Article extends Controller{
		public function index() {
			$data['title'] = 'Article Collection';
			$data['article'] = $this->model('Article_model')->getDataArticle();

			$this->view('templates/header', $data);
			$this->view('article/index', $data);
			$this->view('templates/footer');
		}

		public function detail($id) {
			$data['title'] = 'Article Collection';
			$data['article'] = $this->model('Article_model')->getDataArticleById($id);

			$this->view('templates/header', $data);
			$this->view('article/detail', $data);
			$this->view('templates/footer');
		}
	}

?>