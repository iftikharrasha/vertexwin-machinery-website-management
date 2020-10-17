<?php
	require_once('../includes/sessions.php');
	require_once('../includes/functions.php');
	
	if(!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
		header("Location:../index.php?login_first");
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel
    </title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../../css/bootstrap.min.css"/>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../../css/style.css"/>
    <link type="text/css" rel="stylesheet" href="../../css/media.css"/> 
  </head>
  <body>
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
                    <i class="fa fa-bars">
                    </i>
                    <span>Menu
                    </span>
                  </a>
                </div>
                <!-- /Menu Toogle -->
              </div>
              <div class="header-logo md-hl">
                <a href="../control/dashboard.php" class="logo">
              
<?php
			if(isset($_SESSION["username"])){
				echo '
				
					<h1 class="title">' . $_SESSION["username"] . '</h1>	
				';
			}else{
				echo '
					
					<h1 class="title"> My Account</h1>
				';
			}
?>

                </a>
              </div>
            </div>
            <div class="col-md-7 ham-none">
              <nav id="navigation">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                  <ul class="main-nav nav navbar-nav ham-none">
                    <li>
                      <a href="../control/dashboard.php">
                        <i class="fa fa-tachometer">
                        </i> 
                        <span class="v_active">Admin Panel	
                        </span>
                        <div class="clearfix">
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="../category/categories.php">
                        <i class="fa fa-hashtag">
                        </i>
                        <span>Add Category
                        </span>
                        </span>
                      <div class="clearfix">
                      </div>
                    </a>
                  </li>
                <li>
                  <a href="../allproducts/manageproducts.php">
                    <i class="fa fa-database">
                    </i>
                    <span>All Products
                    </span>
                    </span>
                  <div class="clearfix">
                  </div>
                </a>
              </li>
            <li>
              <a href="#">
                <i class="fa fa-plus-circle">
                </i>
                <span>Add New Item
                </span>
                </span>
              <div class="clearfix">
              </div>
            </a>
          </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope">
            </i>
            <span>Orders
            </span>
            </span>
          <div class="clearfix">
          </div>
        </a>
      </li>
      <li id="menu-academico">
            <a target="_blank" href="../../index.php">
              <i class="fa fa-location-arrow">
              </i>
              <span>Visit Site
              </span>
            </a> 
      </li>
    <li id="menu-academico">
      <a href="../settings/changepass.php">
        <i class="fa fa-cogs">
        </i>
        <span>Change Password
        </span>
      </a> 
    </li>
    <li>
      <a href="#">
        <i class="fa fa-sign-out">
        </i>
        <span>Logout
        </span>
        <div class="clearfix">
        </div>
      </a>
    </li>
    <ul>
      </div>
    <!-- /responsive-nav -->
    </nav>
  </div>
</div>
</div>
</div>
<!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
