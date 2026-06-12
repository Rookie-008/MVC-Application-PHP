<?php  

	class Article extends Controller{
		public function index() {
			$data['title'] = 'Article Collection';
			$data['article2'] = $this->model('Article_model')->getDataArticle();

			$this->view('templates/header', $data);
			$this->view('article/index', $data);
			$this->view('templates/footer');
		}

		public function detail($id) {
			$data['title'] = 'Article Collection';
			$data['article2'] = $this->model('Article_model')->getDataArticleById($id);

			$this->view('templates/header', $data);
			$this->view('article/detail', $data);
			$this->view('templates/footer');
		}

		public function add() {
			// var_dump($_POST);

			if( $this->model('Article_model')->addDataArticle($_POST) > 0 ) {
				Flasher::setFlash('updated','adding','success');
				header('Location: ' . BASEURL . '/article');
				exit;
			} else {
				Flasher::setFlash('updated','adding','danger');
				header('Location: ' . BASEURL . '/article');
				exit;
			}
		}

		public function delete() {
			// var_dump($_POST);

			if( $this->model('Article_model')->deleteDataArticle($_POST) > 0 ) {
				Flasher::setFlash('updated','deleting','success');
				header('Location: ' . BASEURL . '/article');
				exit;
			} else {
				Flasher::setFlash('updated','deleting','danger');
				header('Location: ' . BASEURL . '/article');
				exit;
			}
		}

		public function getChange() {
			echo json_encode($this->model('Article_model')->getDataArticleById($_POST['id']));
		}


		public function change() {
			// var_dump($_POST);

			if( $this->model('Article_model')->changeDataArticle($_POST) > 0 ) {
				Flasher::setFlash('updated','data change','success');
				header('Location: ' . BASEURL . '/article');
				exit;
			} else {
				Flasher::setFlash('updated','data not change','danger');
				header('Location: ' . BASEURL . '/article');
				exit;
			}
		}


		public function search() {
			$data['title'] = 'Article Collection';
			$data['article2'] = $this->model('Article_model')->searchDataArticle();

			$this->view('templates/header', $data);
			$this->view('article/index', $data);
			$this->view('templates/footer');
		}

	}

?>