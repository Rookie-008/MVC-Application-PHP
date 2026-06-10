<div class="container mt-5">
	
	<div class="row">
		<div class="col-5">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formArticle">
				Add Data Article
			</button>
			<br><br>
			
			<h3>Article Collection</h3>

			<ul class="list-group">
				<?php foreach( $data['article'] as $article ) : ?>
					<li class="list-group-item d-flex justify-content-between align-items-start">
						<?php echo $article['string1']; ?>
						<a href="<?php 	echo BASEURL; ?>/article/detail/<?php echo $article['id']; ?>" class="badge text-bg-primary">detail</a>		
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

				<form action="" method="post">
					<div class="mb-3">
						<label for="string1" class="form-label">Article Title</label>
						<input type="text" class="form-control" id="string1" name="name">
					</div>

					<div class="mb-3">
						<label for="string1" class="form-label">Article Date</label>
						<input type="text" class="form-control" id="string1" name="name">
					</div>

			</div>

			<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Add Data</button>
				</form>
			</div>
		</div>
	</div>
</div>