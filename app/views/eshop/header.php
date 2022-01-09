<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<style>
		i {
			color: white;
		}
	</style>
	<title><?= $data['page_title'] ?> | eShop</title>
	<link href="<?= ASSETS . THEME ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/prettyPhoto.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/price-range.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/animate.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/main.css" rel="stylesheet">
	<link href="<?= ASSETS . THEME ?>css/responsive.css" rel="stylesheet">
	<!--[if lt IE 9]>
    <script src="<?= ASSETS . THEME ?>js/html5shiv.js"></script>
    <script src="<?= ASSETS . THEME ?>js/respond.min.js"></script>
    <![endif]-->

	<link rel="shortcut icon" href="<?= ASSETS . THEME ?>images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?= ASSETS . THEME ?>images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top" style="background: #BBD2C5;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #292E49, #536976, #BBD2C5); 
background: linear-gradient(to right, #292E49, #536976, #BBD2C5);
">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<?php if (isset($data['user_data'])) : ?>
									<li><a href="#"><i class="fa fa-user"></i> <?= $data['user_data']->name ?></a></li>
								<?php endif; ?>

								<?php if (isset($data['user_data']) && $data['user_data']->rank == 'admin') : ?>
									<li><a style="color: orange;" href="<?= ROOT ?>admin">Admin Back Office </a></li>
								<?php endif; ?>
							</ul>



						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a target="_new" href="<?= Settings::linkedin_link() ?>"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-phone"></i> <?= Settings::telemovel() ?></a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> <?= Settings::email() ?></a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->

		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4 companyinfo">
						<a href="<?= ROOT ?>">
							<h2><span>e</span>shop</h2>
						</a>
					</div>

					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if (isset($data['user_data']) && $data['user_data']->rank == 'admin') : ?>
									<li><a href="<?= ROOT ?>profile"><i class="fa fa-user"></i> A tua Conta</a></li>
								<?php endif; ?>
								<li><a href="<?= ROOT ?>checkout"><i class="fa fa-crosshairs"></i>Finalizar compra</a></li>
								<li><a href="<?= ROOT ?>cart"><i class="fa fa-shopping-cart"></i>Carrinho</a></li>

								<?php if (isset($data['user_data'])) : ?>
									<li><a href="<?= ROOT ?>logout"><i class="fa fa-lock"></i>Fechar Sessão</a></li>
								<?php else : ?>
									<li><a href="<?= ROOT ?>login"><i class="fa fa-lock"></i>Iniciar Sessão</a></li>
								<?php endif; ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->

		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Navegar</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">

								<li><a href="<?= ROOT ?>index" class="<?= $page_title == "Home" ? "active" : ""; ?>">Página Principal</a></li>
								<li class="dropdown"><a href="<?= ROOT ?>shop" class="<?= $page_title == "Shop" ? "active" : ""; ?>">eShop</a></li>
								<li><a href="<?= ROOT ?>contact-us" class="<?= $page_title == "Contact-us" ? "active" : ""; ?>">Contacta-nos</a></li>
							</ul>
						</div>
					</div>
					<?php if (isset($show_search)) : ?>
						<div class="col-sm-3">
							<form method="get">
								<div class="search_box pull-right">
									<input name="find" type="text" placeholder="Procura artigos aqui" style="border-style: solid;"/>
								</div>
							</form>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->

	<style type="text/css">
		.product-image {
			transition: all 1s ease;
		}

		.product-image:hover {
			transform: scale(1.5);
		}
	</style>