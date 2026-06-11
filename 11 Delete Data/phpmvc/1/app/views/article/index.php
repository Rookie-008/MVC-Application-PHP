<div class="container mt-5">
	
	<div class="row">
		<div class="col-5">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formArticle">
				Add Data Article
			</button>

			<h3>Article Collection</h3>

			<ul class="list-group">
				<?php foreach( $data['article2'] as $article2 ) : ?>
					<li class="list-group-item d-flex justify-content-between align-items-start">
						<?php echo $article2['articleTitle']; ?>
						<a href="<?php 	echo BASEURL; ?>/article/detail/<?php echo $article2['id']; ?>" class="badge text-bg-primary">detail</a>		
						<a href="<?php 	echo BASEURL; ?>/article/delete/<?php echo $article2['id']; ?>" class="badge text-bg-danger" onclick="return confirm('Delete Data?');">delete</a>		
					</li>
				<?php endforeach; ?>
			</ul>		

		</div>
	</div>

</div>

<!-- Modal -->
<div class="modal fade" id="formArticle" tabindex="-1" aria-labelledby="titleArticle" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="titleArticle">Add Data Article</h1>
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
