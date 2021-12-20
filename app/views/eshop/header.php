<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $data['page_title'] ?> | Eshop Projecto Backend </title>
	<link href="<?php echo ASSETS . THEME ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/price-range.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/main.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/responsive.css" rel="stylesheet">

	<!--[if lt IE 9]>
    <script src="<?= ASSETS . THEME ?>js/html5shiv.js"></script>
    <script src="<?= ASSETS . THEME ?>js/respond.min.js"></script>
    <![endif]-->

    
    <!-- Custom styles for this template -->
   

	<link rel="shortcut icon" href="<?php echo ASSETS . THEME ?>images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo ASSETS . THEME ?>images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo ASSETS . THEME ?>images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo ASSETS . THEME ?>images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo ASSETS . THEME ?>images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
							
								<li><a href="#"><i class="fa fa-phone"></i> +00351 969597640</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
								<?php if (isset($data['user_data'])) : ?>
									<li><a href="#"><i class="fa fa-user"></i> <?= $data['user_data']->full_name ?> </a></li>
								<?php endif; ?>
								<?php if (isset($data['user_data']) && $data['user_data']->rank == 'admin') : ?>
								<li><a style="color:orange;font-size:12px;"href="<?= ROOT ?>admin">Admin</a></li>
							<?php endif; ?>
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
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?php echo ASSETS . THEME ?>images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>

							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if (isset($data['user_data']) && $data['user_data']->rank == 'admin') : ?>
									<li><a href="<?= ROOT ?>profile"><i class="fa fa-user"></i> Account</a></li>
								<?php endif; ?>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>

								<?php if (isset($data['user_data'])) : ?>
									<li><a href="<?= ROOT ?>logout"><i class="fa fa-lock"></i> Logout</a></li>
								<?php else : ?>
									<li><a href="<?= ROOT ?>login"><i class="fa fa-lock"></i> Login</a></li>
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
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="shop">Products</a></li>
										<li><a href="product-details">Product Details</a></li>
										<li><a href="checkout">Checkout</a></li>
										<li><a href="cart">Cart</a></li>
										<li><a href="login">Login</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
										<li><a href="blog">Blog List</a></li>
										<li><a href="blog-single">Blog Single</a></li>
									</ul>
								</li>
								<li><a href="404">404</a></li>
								<li><a href="contact-us">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->