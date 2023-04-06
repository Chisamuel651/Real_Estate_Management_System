<?php
  session_start();
  define("APPURL", "http://localhost/rems");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Homeland &mdash; Real Estate Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="<?php echo APPURL ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo APPURL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>/css/mediaelementplayer.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo APPURL ?>/css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="<?php echo APPURL ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo APPURL ?>/css/style.css">
    
  </head>
  <body>
    <div class="site-loader"></div>
    
    <div class="site-wrap">

      <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div> <!-- .site-mobile-menu -->

      <div class="site-navbar mt-4">
          <div class="container py-1">
            <div class="row align-items-center">
              <div class="col-8 col-md-8 col-lg-4">
                <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>Rems<span class="text-danger">.</span></strong></a></h1>
              </div>
              <div class="col-4 col-md-4 col-lg-8">
                <nav class="site-navigation text-right text-md-right" role="navigation">

                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class="active">
                      <a href="index.php">Home</a>
                    </li>
                    <li><a href="buy.html">Buy</a></li>
                    <li><a href="rent.html">Rent</a></li>
                    <li class="has-children">
                      <a href="properties.html">Properties</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="#">Condo</a></li>
                        <li><a href="#">Property Land</a></li>
                        <li><a href="#">Commercial Building</a></li>
                      </ul>
                    </li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="<?php echo APPURL; ?>/contact.php">Contact</a></li>

                    <?php if(isset($_SESSION['username'])){ ?>

                      <li class="has-children">
                        <a href="properties.html"><?php echo $_SESSION['username']; ?></a>
                        <ul class="dropdown arrow-top">
                          <li><a href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>           
                        </ul>
                      </li>

                    <?php }else { ?>

                      <li><a href="<?php echo APPURL ?>/auth/login.php">Login</a></li>
                      <li><a href="<?php echo APPURL ?>/auth/register.php">Register</a></li>

                    <?php } ?>
                  </ul>
                </nav>
              </div>
            

            </div>
          </div>
        </div>
    </div>