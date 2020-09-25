<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Vertex Win - A Machinery Website</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/media.css"/>

    </head>
	<body>
		<!-- HEADER -->
		<header>

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-5 clearfix">
							<div class="hamburger-menu">
							<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
							<!-- /Menu Toogle -->
							</div>
							<div class="header-logo">
								<a href="index.php" class="logo">
									<h1 class="title">VertexWin</h1>				
								</a>
							</div>
						</div>
						<div class="col-md-7">
							<nav id="navigation">
								<!-- responsive-nav -->
								<div id="responsive-nav">
									<ul class="main-nav nav navbar-nav">
										<li class="active"><a href="index.php">Home</a></li>
										<li><a href="store.php">Products</a></li>
										<li><a href="store.php">About</a></li>
										<li><a href="store.php">Contact</a></li>
									<ul>
								</div>
								<!-- /responsive-nav -->
							</nav>
						</div>
					</div>
				</div>
				
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">

						<!-- SEARCH BAR -->
						<div class="col-md-12">
							<div class="header-search">
								<form action="store.php">
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Bobbin</option>
										<option value="1">Spare</option>
										<option value="1">Tester/Length</option>
										<option value="1">Reeds</option>
										<option value="1">Bearing</option>
										<option value="1">Expansion</option>
										<option value="1">Ultrasonic</option>
										<option value="1">Unicutter</option>
										<option value="1">Balloon</option>
										<option value="1">Caster</option>
										<option value="1">Snail</option>
										<option value="1">Rubber</option>
									</select>
									<button type="submit" id="search_btn" class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->
						
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		