<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="<?php echo base_url() . 'assets/css/bootstrap.css'; ?>" rel="stylesheet" />

    <style>
        .full-page-wrapper {
            min-height: 100vh;
            padding-left: 0;
            padding-right: 0;
        }

        .auth {
            min-height: 100vh;
        }

        .auth.auth-bg-1 {
            background: url(../assets_admin/img/login_1.jpg);
            background-size: cover;
        }

        .auth.theme-one .auto-form-wrapper {
            background: #fff;
            padding: 40px 40px 10px;
            border-radius: 4px;
            -webkit-box-shadow: 0 -25px 37.7px 11.3px rgba(8, 143, 220, 0.07);
            box-shadow: 0 -25px 37.7px 11.3px rgba(8, 143, 220, 0.07);
        }
    </style>

</head>
<?php if($this->session->flashdata('item')){  $message =  $this->session->flashdata('item');}    ?>
<body>

    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auto-form-wrapper">
                        <form action="<?php echo base_url('admin/dashboard'); ?>" method="post">
                            <div class="text-center mb-3">
                                <h5 class="text-capitalize">Admin Login</h5>
                            </div>
                            <div class="text-danger text-center"> <?php if(!empty($message)) {echo $message['message']; }?></div>
                            <div class="form-group">
                                <label class="label">Email</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Username" name="admin_email">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="*********" name="admin_password">
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <button class="btn btn-primary submit-btn btn-block" type="submit" name="admin_login">Login</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</body>

</html>