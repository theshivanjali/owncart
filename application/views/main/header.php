<?php
defined('BASEPATH') or exit('No direct script access allowed');

$data = $this->session->userdata();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ecommerce</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.css'; ?>">

  <!-- Price RangeBar CSS -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/nouislider.css'; ?>">

  <!-- Custom Fonts for this CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

  <!-- owl carousel css -->
  <link rel='stylesheet' href="<?php echo base_url() . 'assets/css/owl.carousel.min.css'; ?>">
  <link rel='stylesheet' href="<?php echo base_url() . 'assets/css/owl.theme.default.min.css'; ?>">

  <!-- Custom Stylesheet For this template -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/creative.css'; ?>">

  <!-- Bootstrap core javascript -->
  <script src="<?php echo base_url() . 'assets/js/jquery.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/popper.js'; ?>"></script>
  <script src="<?php echo base_url() . 'assets/js/bootstrap.js'; ?>"></script>

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
              <li class="list-inline-item border-left px-3 d-none d-sm-inline"> Free Shipping on orders over <i class="fa fa-rupee-sign"></i>&nbsp;100</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-airy fixed-top py-lg-4 px-lg-5 text-uppercase mb-5" id="mainNav" data-toggle="affix">
      <div class="container-fluid" id="main-navbar">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">OWNCART.</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . 'shop/women'; ?>">Women</a>
              <div class="sub-menu">
                <ul class="list-unstyled list-inline">
                  <li><a href="<?php echo base_url() . 'category/women/ethnic'; ?>">Ethnic Wear</a></li>
                  <li><a href="<?php echo base_url() . 'category/women/western'; ?>">Western Wear</a></li>
                  <li><a href="<?php echo base_url() . 'category/women/formal'; ?>">Formal Wear</a></li>
                  <li><a href="<?php echo base_url() . 'category/women/winter'; ?>">Winter Wear</a></li>
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
              <a class="nav-link" href="<?php echo base_url() . 'shop/men'; ?>">Men</a>
              <div class="sub-menu">
                <ul class="list-unstyled list-inline">
                  <li><a href="<?php echo base_url() . 'category/men/ethnic'; ?>">Ethnic Wear</a></li>
                  <li><a href="<?php echo base_url() . 'category/men/formal'; ?>">Formal Wear</a></li>
                  <li><a href="<?php echo base_url() . 'category/men/winter'; ?>">Winter Wear</a></li>
                  <li><a href="<?php echo base_url() . 'category/men/western'; ?>">Western Wear</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() . 'shop/contact'; ?>">Contact</a>
            </li>
          </ul>
          <div class="d-flex align-items-center justify-content-between justify-content-lg-end mt-1 mb-2 my-lg-0">
            <!-- Search Button-->
            <!-- <div class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-search"></i></a> -->
            <!-- <form><input type="search" class="form-control" name="search" placeholder="search" aria-label="Search"> </form> -->
            <!-- </div> -->

            <?php if (isset($data['userID'])) {

              echo ' <div class="nav-item dropdown"><a id="userdetails" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fas fa-user"></i>
              </a>
            <div aria-labelledby="userdetails" class="dropdown-menu dropdown-menu-right"> 
              <a href="'.base_url('order/orderList').'" class="dropdown-item">Orders</a>
               
              <div class="dropdown-divider my-0"></div><a href="'.base_url('user/logout').'" class="dropdown-item">Logout</a>
            </div>
          </div>';
            } else {
              echo '
                <div data-toggle="modal" data-target="#logModal" class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
              </div>
  ';
            }

            // <a href="#" class="dropdown-item">Addresses</a>
            //    <a href="#" class="dropdown-item">Profile</a>

            ?>





            <div class="nav-item">
              <a class="nav-link" href="<?php echo base_url('shopping/cart'); ?>"> 
              <i class="fas fa-shopping-cart"></i>        
            </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

        <form action="#" method="post">
          <!-- <?php echo base_url() . 'user/login/'; ?> -->
          <div class="modal-body mx-4">

            <div class='text-danger text-center mb-4' id="loginError"></div>
            <!--Body-->

            <div class="mb-3">
              <label data-error="wrong" for="Form-email1">Email&nbsp;/&nbsp;Mobile No.</label>
              <input type="text" id="loginInput" name="loginInput" class="form-control" required>
            </div>

            <div class="pb-3">
              <label data-error="wrong" for="Form-pass1">Password</label>
              <input type="password" id="loginPassword" class="form-control" name="loginPassword" required>
              <span toggle="#loginPassword" class="fas fa-eye field-icon togglePassword"></span>
            </div>
            <div class="font-small blue-text d-flex justify-content-between flex-row flex-wrap">
              <label for="checkbox" class="form-check-label">
                <input type="checkbox" name="loginCheckbox" id="loginCheckbox" value="checked">
                Remember me?
              </label>

              <p>Forgot <a href="#" class="blue-text">
                  Password?</a></p>
            </div>
            <div class="text-center mb-3">
              <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a" id="submitLogin">Login</button>
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
        </form>
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
        <form method="post" action="#" id="registration">

          <!-- <?php echo base_url() . 'user/register/'; ?> -->
          <div class="modal-body mx-4">

            <div class='text-danger text-center mb-4' id="error">

            </div>
            <!--Body-->
            <div class="mb-3">

              <label data-error="wrong" data-success="right" for="Form-email1">Email&nbsp;/&nbsp;Mobile No.</label>
              <input type="text" id="regInput" name="regInput" class="form-control" required minlength="10">
              <!-- <ul class="input-requirement">
                <li>Please Enter A Valid Email Address</li>
              </ul> -->
            </div>

            <div class="pb-3">
              <label data-error="wrong" data-success="right" for="Form-pass1">Password</label>
              <input type="password" id="regPass" name="regPass" class="form-control" minlength="8" maxlength="50" required>
              <ul class="input-requirement">
                <li>Atleast 8 Characters Long (and less then 50 characters)</li>
                <li>Contains atleast 1 number</li>
                <li>Contains atleast 1 lowercase letter</li>
                <li>Contains atleast 1 uppercase letter</li>
                <li>Contains a special character (e.g. @!)</li>
              </ul>
            </div>

            <div class="pb-3">
              <label data-error="wrong" data-success="right" for="Form-pass2"> Confirm Password</label>
              <input type="password" id="regPass2" name="regPass2" class="form-control" minlength="8" maxlength="50" required>
            </div>
            <div class="form-check form-check-inline"><label class="form-check-label">Gender :</label></div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male" value="m">
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="female" value="f">
              <label class="form-check-label" for="female">Female</label>
            </div>

            <div class="text-center my-3">
              <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a" id="submitRegister">Register</button>
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

        </form>
        <!--Footer-->
        <div class="modal-footer pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Already a member? <a href="#loginButton" class="blue-text ml-1" id="loginButton">
              Login</a></p>
        </div>
      </div>



    </div>
  </div>
  <!-- Modal -->


  <script>
    let registerButton = document.querySelector('#submitRegister');

    $(registerButton).click(function() {

      displayRegisterErrors();

    });

    function displayRegisterErrors() {

      let regInput = document.getElementById('regInput').value;
      let regPass = document.getElementById('regPass').value;
      let regPass2 = document.getElementById('regPass2').value;
      let regGender = document.querySelector('input[type ="radio"]').value;

      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>user/register',
        dataType: "JSON",
        data: {
          regInput: regInput,
          regPass: regPass,
          regPass2: regPass2,
          gender: regGender
        },

        success: function(data) {
          JSON.stringify(data);
          if (data.error != undefined) {
            $('#error').html(data.error);
          } else {
            window.location.href = data.url;
          }

          // $('#numRows').html(data.row);
          // $('#ajaxData').html(data.products);
        },
        error: function(jqXhr, textStatus, errorMessage) {
          console.log("Error: ", errorMessage);
        }
      });
    }

    let loginButton = document.querySelector('#submitLogin');
    $(loginButton).click(function() {

      displayLoginErrors();

    });


    function displayLoginErrors() {
      let loginInput = document.getElementById('loginInput').value;
      let loginPassword = document.getElementById('loginPassword').value;
      let checkBox = document.querySelector('input[type ="checkbox"]').checked;

      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>user/login',
        dataType: "JSON",
        data: {
          loginInput: loginInput,
          loginPassword: loginPassword,
          checkBox: checkBox
        },

        success: function(data) {
          JSON.stringify(data);
          if (data.error != undefined) {
            $('#loginError').html(data.error);
          } else {
            window.location.href = data.url;
          }
        },
        error: function(jqXhr, textStatus, errorMessage) {
          console.log("Error: ", errorMessage);
        }
      });
    }
  </script>