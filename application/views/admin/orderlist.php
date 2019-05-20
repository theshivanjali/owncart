<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Orders List</h4>
                        <!-- <p class="category"></p> -->
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead class="bg-light">
                                <tr>
                                    <th class="py-4 text-uppercase text-sm">Order #</th>
                                    <th class="py-4 text-uppercase text-sm">Date</th>
                                    <th class="py-4 text-uppercase text-sm">Total</th>
                                    <th class="py-4 text-uppercase text-sm">Status</th>
                                    <!-- <th class="py-4 text-uppercase text-sm">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($orderList)) {
                                    foreach ($orderList as $order) {
                                        ?>
                                        <tr>
                                            <th class="py-4 align-middle"><?php echo '#123' . $order['order_id']; ?></th>
                                            <td class="py-4 align-middle"><?php echo $order['order_date']; ?></td>
                                            <td class="py-4 align-middle"><?php echo $order['order_total']; ?></td>
                                            <td class="py-4 align-middle"><?php echo $order['order_status']; ?></td>
                                            <!-- <td class="py-4 align-middle"><a href="#" class="btn btn-outline-dark btn-sm">View</a></td> -->
                                        </tr>

                                    <?php }
                            } ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>