<?php 
// print_r($productDetails);

?>

<div class="content">
    <div class="container-fluid">

    <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Product List</h4>
                        <!-- <p class="category"></p> -->
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Category</th>
                                <th>SubCategory</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Size</th>
                                <th>Color</th>
                                <th>Image</th>
                                <!-- <th></th> -->
                                <th></th>
                            </thead>
                            <tbody>
                                <?php foreach ($productDetails as $details) { ?>
                                    <tr>
                                        <td><?php echo $details['pid']; ?></td>
                                        <td><?php echo $details['pname']; ?></td>
                                        <td><?php echo $details['gender']; ?></td>
                                        <td><?php echo $details['category']; ?></td>
                                        <td><?php echo $details['subcategory']; ?></td>
                                        <td><?php echo $details['price']; ?></td>
                                        <td><?php echo $details['discount']; ?></td>
                                        <td><?php echo $details['size']; ?></td>
                                        <td>   <i class="fas fa-brush" style="color:<?php echo $details['color']; ?> "></i></td>
                                        <td><img src= "<?php echo base_url().'assets/img/'.$details['pimage']; ?>" class="img-fluid" style="height: 50px; width: 40px;"></td>
                                        <!-- <td><?php echo '<a href ="' . base_url() . 'admin/editProduct?id=' . $details['pid'], '"><i class="fas fa-edit" style="color:green;"></i></a>'; ?></td> -->
                                        <td><?php echo '<a href ="' . base_url() . 'admin/deleteProduct?id=' . $details['pid'], '"><i class="fas fa-trash-alt" style="color:red;"></i></a>'; ?></td>
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