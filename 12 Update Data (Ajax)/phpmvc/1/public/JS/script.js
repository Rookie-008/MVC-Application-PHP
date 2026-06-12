$(function() {

	$('.buttonAddArticle').on('click', function() {

		$('#formArticleLabel').html('Add Data Article');
		$('.modal-footer button[type=submit]').html('Add Data');

	});

	$('.showChangeArticle').on('click', function() {

		$('#formArticleLabel').html('Change Data Article');
		$('.modal-footer button[type=submit]').html('Change Data');
		$('.modal-body form').attr('action', 'http://localhost/phpmvc/public/article/change');

		const id = $(this).data('id');
		console.log(id);

		$.ajax({

			url: 'http://localhost/phpmvc/public/article/getChange',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				// console.log(data);

				$('#articleTitle').val(data.articleTitle);
				$('#dataArticle').val(data.dataArticle);
				$('#releaseNumber').val(data.releaseNumber);
				$('#email').val(data.email);
				$('#genre').val(data.genre);
			};

		});

	});

});