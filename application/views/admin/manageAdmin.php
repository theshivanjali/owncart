<?php if ($this->session->flashdata('item')) {
    $message =  $this->session->flashdata('item');
}    ?>

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Admin</h4>
                    </div>
                    <div class="<?php if (!empty($message)) {
                                    echo $message['class'];
                                } ?>"><?php if (!empty($message)) {
                                                                                                echo $message['message'];
                                                                                            } ?></div>
                    <div class="content">
                        <form action="<?php echo base_url() . 'admin/addAdmin'; ?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" placeholder="Full Name" name="newAdminName" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" placeholder="Email" name="newAdminEmail" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Password" name="newAdminPass" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password" name="newAdminPass2" required>
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-info btn-fill text-center">Add Admin</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List of Admins</h4>
                        <!-- <p class="category"></p> -->
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                <?php foreach ($adminDetails as $details) { ?>
                                    <tr>
                                        <td><?php echo $details['admin_id']; ?></td>
                                        <td><?php echo $details['admin_name']; ?></td>
                                        <td><?php echo $details['admin_email']; ?></td>
                                        <td><?php echo '<a href ="' . base_url() . 'admin/deleteAdmin?id=' . $details['admin_id'], '"><i class="fas fa-trash-alt" style="color:red;"></i></a>'; ?></td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>