<?php
include "./vpanel/includes/sessions.php";
include "./vpanel/includes/functions.php";

date_default_timezone_set('Asia/Manila');
$time = time();

//adding mail
if (isset($_POST['mail-submit'])) {
    $dateTime = strftime('%Y-%m-%d', $time);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    if (empty($email)) {
        $_SESSION['errorMessage'] = "Field Is Empty!";
    } else {
        $query = "INSERT INTO subscribers (date_time, email)
			VALUES ('$dateTime', '$email')";

        $exec = Query($query);
        if ($exec) {
            $_SESSION['successMessage'] = "Thank you for your subscription!";
        } else {
            $_SESSION['errorMessage'] = "Please Try Again!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vertex Win - Find machinery for every necessity</title>

		<link rel="icon" href="https://www.vertexwinbd.com/resource/img/logo.png" type="image/x-icon">
    	<meta name="description" content="Find machinery for every necessity, find heavyweight parts, your industrial companion, easy communication, order today.">
    	<meta name="keywords"
        content="Machineries, Equipments, Mechanism
, Vertexwinbd, Textile, Components, Spare Parts, Tools, Spinning Machine, Vertex Win">

		<!-- Facebook Meta -->
		<meta property="og:type" content="website">
		<meta property="og:title" content="Vertex Win - Find machinery for every necessity">
		<meta property="og:description"
			content="Find machinery for every necessity, find heavyweight parts, your industrial companion, easy communication, order today.">
		<meta property="og:site_name" content="Vertex Win - Find machinery for every necessity">
		<meta property="og:image" content="https://www.vertexwinbd.com/resource/img/thumbnail.jpg">
		<meta property="og:image:alt"
			content="Find machinery for every necessity">
		<meta property="og:image:width " content="1080">
		<meta property="og:image:height" content="564">
		<meta property="og:locale" content="en_US">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
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
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
					<div class="object"></div>
				</div>
			</div>
		</div>

		</div>

		<!-- HEADER -->
		<header>

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-4 clearfix">
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
						<div class="col-md-8">
							<nav id="navigation">
								<!-- responsive-nav -->
								<div id="responsive-nav">
									<ul class="main-nav nav navbar-nav">
										<li><a href="index.php">Home</a></li>
										<li><a href="products.php">Products</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="contact.php">Contact</a></li>
										<li>
<?php
if (isset($_SESSION["username"])) {
    echo '
			<a href="vpanel/control/dashboard.php">Admin</a>
		';
} else {
    echo '
			<a href="vpanel/control/dashboard.php">Account</a>
		';
}
?>
										</li>
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
								<form action="products.php" method="GET">
									<select class="input-select" name="category" id="post-category">
										<option value="allcat">All categories</option>
<?php
$sql = "SELECT * FROM categories";

$exec = Query($sql);
while ($row = mysqli_fetch_assoc($exec)) {
    $catid = $row["cat_id"];
    echo "

			<option>$row[cat_title]</option>

		";
}
?>
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
