<!-- <?php 

$session_data = $this->session->userdata();

if(!empty($session_data)){
    print_r($session_data);
}
 ?> -->


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>OwnCart | Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.css'; ?>">
    <link href="<?php echo base_url().'assets_admin/css/bootstrap.min.css';?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url().'assets_admin/css/animate.min.css';?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url().'assets_admin/css/light-bootstrap-dashboard.css?v=1.4.0';?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url().'assets_admin/css/demo.css';?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url().'assets_admin/css/pe-icon-7-stroke.css';?>" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url().'assets_admin/img/sidebar-5.jpg';?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url('admin/dashboard')?>" class="simple-text" style="letter-spacing: 3px;">
                    OwnCart
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url('admin/dashboard');?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/manageAdmin');?>">
                        <i class="pe-7s-user"></i>
                        <p>Manage Admin</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/productlist');?>">
                        <i class="pe-7s-note2"></i>
                        <p>Manage Products</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/productinsert');?>">
                        <i class="pe-7s-note"></i>
                        <p>Insert Products</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/manageorders');?>">
                        <i class="pe-7s-shopbag"></i>
                        <p>Manage Orders</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/userslist');?>">
                        <i class="pe-7s-users"></i>
                        <p>User's List</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/logout');?>">
                        <i class="pe-7s-back-2"></i>
                        <p>Logout</p>
                    </a>
                </li>
                <!-- <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li> -->
				<!-- <li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li> -->
            </ul>
    	</div>
    </div>
