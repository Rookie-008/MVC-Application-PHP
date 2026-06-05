<div class="container mt-5">
	
	<div class="row">
		<div class="col-5">
			<h3>Article Collection</h3>

			<?php foreach( $data['article'] as $article ) : ?>
				<ul>
					<li><?php echo $article['string1']; ?></li>
					<li><?php echo $article['string2']; ?></li>
					<li><?php echo $article['string3']; ?></li>
				</ul>		
			<?php endforeach; ?>
		</div>
	</div>

</div>