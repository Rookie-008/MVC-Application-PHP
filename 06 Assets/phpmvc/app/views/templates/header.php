<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $data['title']; ?></title>
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/CSS/bootstrap.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-body-tertiary">
		<div class="container-fluid">
		    <a class="navbar-brand" href="<?php echo BASEURL; ?>">Application MVC</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			    <div class="navbar-nav">
			        <a class="nav-link active" aria-current="page" href="<?php echo BASEURL; ?>">Home</a>
			        <a class="nav-link" href="<?php echo BASEURL; ?>/about">About</a>
			        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
			    </div>
		    </div>
		</div>
	</nav>
