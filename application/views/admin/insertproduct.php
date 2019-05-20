<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Product</h4>
                    </div>
                    <div class="content">
                        <form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/insertProduct'); ?>">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Product Name" required name="productName">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <!-- <input type="text" class="form-control" placeholder="Username" value="michael23"> -->
                                        <select class="form-control" name="gender" required>
                                            <option value="men">Men</option>
                                            <option value="women">Women</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select class="form-control" name="category" required>
                                            <option value="ethnic">Ethnic</option>
                                            <option value="formal">Formal</option>
                                            <option value="western">Western</option>
                                            <option value="winter">Winter</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="subcategory">Subcategory</label>
                                        <input type="text" class="form-control" placeholder="Sub-Category like Jeans, Shirt " required name="subcategory">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" class="form-control" placeholder="Product Price" required name="price">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Discount</label>
                                        <input type="number" class="form-control" placeholder="Discount of Product" value="0" name="discount">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check-inline">
                                        <label class=" form-check-inline">Size: </label>
                                       <label class="form-check-inline"><input type="checkbox" name="size[]" value="xl">&nbsp;X-Large</label>
                                       <label class="form-check-inline"><input type="checkbox" name="size[]" value="l">&nbsp;Large</label>
                                       <label class="form-check-inline"><input type="checkbox" name="size[]" value="m">&nbsp;Medium</label>
                                       <label class="form-check-inline"><input type="checkbox" name="size[]" value="s">&nbsp;Small</label>
                                       <label class="form-check-inline"><input type="checkbox" name="size[]" value="xs">&nbsp;X-Small</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input type="text" class="form-control" placeholder="Enter Color's Hex Code" required name="color">
                                    </div>
                                </div>
                         
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label>Image Upload</label>
                                        <input type="file" class="form-control" required name="image">
                                    </div>
                                </div>
                            </div>                             
                        
                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Product</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
    
        </div>
    </div>
</div>