<?php
session_start();
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
                <a href="index.php" class="logo">
                  <h1 class="title">VertexWin
                  </h1>				
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
                        <i class="fa fa-users">
                        </i>
                        <span>Add Category
                        </span>
                        <span class="fa fa-angle-right" style="float: right">
                        </span>
                        <div class="clearfix">
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-user">
                        </i>
                        <span>All Products
                        </span>
                        <span class="fa fa-angle-right" style="float: right">
                        </span>
                        <div class="clearfix">
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-tasks">
                        </i>
                        <span>Add New Item
                        </span>
                        <span class="fa fa-angle-right" style="float: right">
                        </span>
                        <div class="clearfix">
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-bell">
                        </i>
                        <span>Top Items
                        </span>
                        <span class="fa fa-angle-right" style="float: right">
                        </span>
                        <div class="clearfix">
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-money">
                        </i>
                        <span>Orders
                        </span>
                        <span class="fa fa-angle-right" style="float: right">
                        </span>
                        <div class="clearfix">
                        </div>
                      </a>
                    </li>
                    <li id="menu-academico">
                      <a href="changepassword.php">
                        <i class="fa fa-cogs">
                        </i>
                        <span>Change Password
                        </span>
                      </a> 
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-money">
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
