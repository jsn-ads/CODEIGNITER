<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="<?= BASE_URL();?>public/favicon.ico">
		<title>Lattes - Onepage Multipurpose Bootstrap HTML</title>
		<!-- Bootstrap core CSS -->
		<link href="<?= BASE_URL();?>public/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="<?= BASE_URL();?>public/css/owl.carousel.css" rel="stylesheet">
		<link href="<?= BASE_URL();?>public/css/owl.theme.default.min.css"  rel="stylesheet">
		<link href="<?= BASE_URL();?>public/css/style.css" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="<?= BASE_URL();?>public/js/ie-emulation-modes-warning.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<?php if(isset($styles)):?>
			<?php foreach($styles as $item):?>
				<?php $href = base_url().'public/css/'.$item; ?>
				<link rel="stylesheet" type="text/css" href="<?= $href ?>">
			<?php endforeach;?>
		<?php endif;?>

	</head>
	<body id="page-top">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-shrink navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top"><img class="b7web" src="<?= BASE_URL();?>public/images/b7web.png" alt="Lattes theme logo"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="<?= BASE_URL();?>#">Sobre</a>
						</li>
						<li>
							<a class="page-scroll" href="<?= BASE_URL();?>#">Cursos</a>
						</li>
						<li>
							<a class="page-scroll" href="<?= BASE_URL();?>#">Equipe</a>
						</li>
						<li>
							<a class="page-scroll" href="<?= BASE_URL();?>#">Contato</a>
						</li>
						<li>
							<a class="page-scroll" href="<?= BASE_URL();?>LoginController">Login</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Header -->