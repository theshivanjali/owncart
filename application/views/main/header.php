<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>

   <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">

    <!-- Custom Fonts for this CSS -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

    <!-- Custom Stylesheet For this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/creative.css'; ?>">
   </head> 
<body>

<header class="header-absolute">

      <!-- Top NavBar -->

      <div class="top-bar" style="height:45px">
          <div class="container-fluid">
               <div class="row d-flex align-items-center">
                  <div class="col-lg-12">
                      <ul class="list-inline mb-0">
                      <li class="list-inline-item mr-2"><i class="fas fa-phone"></i> +91-12345-67890</li>
                       <li class="list-inline-item border-left px-3 d-none d-sm-inline"> Free Shipping on orders over $100</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>

      <!-- Nav bar -->
      <nav class="navbar navbar-expand-lg navbar-light navbar-airy fixed-top py-lg-4 px-lg-5 text-uppercase mb-5"  id="mainNav" data-toggle="affix">
        <div class="container-fluid" id="main-navbar">
          <a class="navbar-brand" href="#page-top">SHOP.</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Women</a>
                 <div class="sub-menu">
                    <ul class="list-unstyled list-inline">
                    <li><a href="#">Ethnic Wear</a></li>
                    <li><a href="#">Western Wear</a></li>
                    <li><a href="#">Formal Wear</a></li>
                    <li><a href="#">Winter Wear</a></li>
                    </ul>  
                  </div>
                  <!-- <div class="dropdown">
                  <a id="womenDropdown" href="#" data-target="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Women</a>
                <ul aria-labelledby="womenDropdown" class="dropdown-menu">
                <li class="dropdown-item">Ethnic Wear</li>
                <li class="dropdown-item">Western Dress</li>
                <li class="dropdown-item">Formal Dresses</li>
                </ul>
              </div> -->
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Men</a>
                <div class="sub-menu">
                    <ul class="list-unstyled list-inline">
                    <li><a href="#">Ethnic Wear</a></li>
                    <li><a href="#">Formal Wear</a></li>
                    <li><a href="#">Winter Wear</a></li>
                    </ul>  
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'homepage/contact'; ?>">Contact</a>
              </li>
            </ul>
            <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
              <!-- Search Button-->
                <div data-toggle="search" class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                </div>
                <div data-toggle="search" class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                </div>
                <div data-toggle="search" class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
          </div>
        </div>
      </nav>
  </header>
 