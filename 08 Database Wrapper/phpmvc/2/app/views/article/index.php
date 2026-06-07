<div class="container mt-5">
	
	<div class="row">
		<div class="col-5">
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