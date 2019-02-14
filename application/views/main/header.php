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
                <div class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
                  <!-- <form><input type="search" class="form-control" name="search" placeholder="search" aria-label="Search"> </form> -->
                </div>
                <div data-toggle="modal" data-target="#logModal" class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
                </div>
                <div class="nav-item">
                  <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </div>
            </div>
          </div>
        </div>
      </nav>
  </header>

<div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <!--Content-->
    <div class="modal-content" id="login">
      <!--Header-->
      <div class="modal-header text-center border-0">
        <h3 class="modal-title w-100 font-weight-bold my-3" id="myModalLabel"><strong>Login</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="mb-3">
        <form>
        <label data-error="wrong" data-success="right" for="Form-email1">Email&nbsp;/&nbsp;Mobile No.</label>
          <input type="email" id="login_email" class="form-control">
        </div>

        <div class="pb-3">
        <label data-error="wrong" data-success="right" for="Form-pass1">Password</label>
          <input type="password" id="login_password" class="form-control">
        </div>
          <div class="font-small blue-text d-flex justify-content-between flex-row ">
          <label for="checkbox" class="form-check-label">
               <input type="checkbox" name="login_checkbox" required>
               Remember me?
           </label>
      
          <p>Forgot <a href="#" class="blue-text">
              Password?</a></p>
          </div>
        </form>

        <div class="text-center mb-3">
          <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Login</button>
        </div>
        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Login
          with:</p>

        <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-white mr-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
          <!--Google +-->
          <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#registerButton" id="registerButton" class="blue-text ml-1">
            Register</a></p>
      </div>
  </div>
    <!--/.Content-->

      <!-- Register -->
      <div class="modal-content d-none" id="register">
      <!--Header-->
      <div class="modal-header text-center border-0">
        <h3 class="modal-title w-100 font-weight-bold my-3" id="myModalLabel"><strong>Register</strong></h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body mx-4">
        <!--Body-->
        <div class="mb-3"><form>
        <label data-error="wrong" data-success="right" for="Form-email1">Email&nbsp;/&nbsp;Mobile No.</label>
          <input type="email" id="email123" class="form-control">
        </div>

        <div class="pb-3">
        <label data-error="wrong" data-success="right" for="Form-pass1">Password</label>
          <input type="password" id="pass1" class="form-control">
        </div>

        <div class="pb-3">
        <label data-error="wrong" data-success="right" for="Form-pass2"> Confirm Password</label>
          <input type="password" id="pass2" class="form-control">
        </div>
          </form>
        <div class="text-center my-3">
          <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Register</button>
        </div>
        <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Register
          with:</p>

        <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-white mr-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
          <!--Google +-->
          <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Already a member? <a href="#loginButton" class="blue-text ml-1" id="loginButton">
            Login</a></p>
      </div>
    </div>



  </div>
</div>
<!-- Modal -->