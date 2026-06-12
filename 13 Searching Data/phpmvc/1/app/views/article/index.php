<div class="container mt-5">
	<div class="row">
		<div class="col-lg-5">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-lg-5">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary buttonAddArticle" data-bs-toggle="modal" data-bs-target="#formArticle">
				Add Data Article
			</button>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-lg-5">
			<form action="<?php echo BASEURL; ?>/article/search" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search Article..." name="keyword" id="keyword" autocomplete="off">
					<button class="btn btn-primary" type="submit" id="searchButton">Search</button>
				</div>
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-5">
			<h3>Article Collection</h3>

			<ul class="list-group">
				<?php foreach( $data['article2'] as $article2 ) : ?>
					<li class="list-group-item">
						<?php echo $article2['articleTitle']; ?>
						<a href="<?php 	echo BASEURL; ?>/article/delete/<?php echo $article2['id']; ?>" class="badge text-bg-danger float-end" onclick="return confirm('Delete Data?');">delete</a>		
						<a href="<?php 	echo BASEURL; ?>/article/change/<?php echo $article2['id']; ?>" class="badge text-bg-success float-end showChangeArticle" data-bs-toggle="modal" data-bs-target="#formArticle" data-id="<?php echo $article2['id']; ?>">change</a>		
						<a href="<?php 	echo BASEURL; ?>/article/detail/<?php echo $article2['id']; ?>" class="badge text-bg-primary float-end">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>		

		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formArticle" tabindex="-1" aria-labelledby="formArticleLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="formArticleLabel">Add Data Article</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">

				<form action="<?php echo BASEURL; ?>/article/add" method="post">
					<div class="mb-3">
						<label for="id" class="form-label">Id</label>
						<input type="number" class="form-control" id="id" name="id">
					</div>

					<div class="mb-3">
						<label for="articleTitle" class="form-label">Article Title</label>
						<input type="text" class="form-control" id="articleTitle" name="articleTitle">
					</div>

					<div class="mb-3">
						<label for="dataArticle" class="form-label">Data Article</label>
						<input type="text" class="form-control" id="dataArticle" name="dataArticle">
					</div>

					<div class="mb-3">
						<label for="releaseNumber" class="form-label">Release Number</label>
						<input type="number" class="form-control" id="releaseNumber" name="releaseNumber">
					</div>

					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>

					<div class="form-group">
					    <label for="genre">Genre</label>
					    <select class="form-control" id="genre" name="genre">
					      <option value="Romance">Romance</option>
					      <option value="Thriller">Thriller</option>
					      <option value="Fantasy">Fantasy</option>
					      <option value="Scifi">Sci-Fi</option>
					      <option value="Horor">Horor</option>
					    </select>
					</div>


			</div>

			<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add Data</button>
				</form>
			</div>
		</div>
	</div>
</div>