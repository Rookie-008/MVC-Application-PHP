<div class="container mt-5">
	
	<div class="card" style="width: 18rem;">
		<div class="card-body">
			<h5 class="card-title"><?php echo $data['article2']['articleTitle']; ?></h5>
			<h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $data['article2']['dataArticle']; ?></h6>
			<p class="card-text"><?php echo $data['article2']['releaseNumber']; ?></p>
			<p class="card-text"><?php echo $data['article2']['email']; ?></p>
			<p class="card-text"><?php echo $data['article2']['genre']; ?></p>
			<a href="<?php echo BASEURL; ?>/article" class="card-link">Back to article</a>
		</div>
	</div>

</div>