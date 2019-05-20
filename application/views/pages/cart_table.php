<?php $total = 0;  

$data = $this->session->userdata();

if(!empty($productDetail)){
foreach($productDetail as $product)
{
    $total++;
}
}
?>

<div class="row">
<div class="col-xl-8 offset-xl-2 text-center mb-5"><p class="lead text-muted">You have <?php echo $total; ?> items in your shopping cart</p></div>
</div>

<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <div class="cart">
                    <div class="cart-header text-center">
                        <div class="row">
                            <div class="col-md-5">Item</div>
                            <div class="col-md-7 d-md-block d-none">
                                <div class="row">
                                    <div class="col-md-3">Price</div>
                                    <div class="col-md-4">Quantity</div>
                                    <div class="col-md-3">Total</div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Body =========> Product Starts Here -->
                    <?php 
                    
                    if(!empty($productDetail)){                    
                    foreach ($productDetail as $product) { ?>
                    <div class="cart-body">
                        <div class="cart-item">
                            <div class="row d-flex align-items-center text-left text-md-center">
                                <div class="col-12 col-md-5">
                                    <a href="<?php echo base_url().'shopping/deleteItem?id='.$product['pid'];?>" class="cart-remove close mt-3 d-md-none"><i class="fa fa-times"></i></a>
                                    <div class="d-flex align-items-center">
                                        <a href="<?php echo base_url().'product/index/'.$product['pid'];?>">
                                            <img src="<?php echo base_url() . 'assets/img/' . $product['pimage']; ?>" class="cart-item-img">
                                        </a>
                                        <div class="cart-title text-left">
                                            <a href="<?php echo base_url().'product/index/'.$product['pid'];?>" class="text-uppercase text-dark"><strong><?php echo ucfirst($product['category']) . " " . $product['pname']; ?></strong></a>
                                            <br>
                                            <span class="text-muted text-sm">Size: <?php echo strtoupper($product['size']);?></span>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7 mt-4 mt-md-0">
                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-6 d-md-none text-muted">Price per item</div>
                                                <div class="col-6 col-md-12 text-right text-md-center" id="price"><i class="fas fa-rupee-sign"></i><?php echo $product['price']; ?></div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row align-items-center">
                                                <div class="d-md-none col-7 col-sm-9 text-muted">Quantity</div>
                                                <div class="col-5 col-sm-3 col-md-12">
                                                    <div class="d-flex align-items-center">
                                                        <!-- <div class="btn btn-items btn-items-decrease">-</div> -->
                                                        <input type="text" value="1" class="form-control text-center border-0 border-md input-items" id="quantity" disabled>
                                                        <!-- <div class="btn btn-items btn-items-increase" id="updatePrice">+</div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-6 d-md-none text-muted">Total price </div>
                                                <div class="col-6 col-md-12 text-right text-md-center" id="totalPrice"><i class="fas fa-rupee-sign"></i> <?php echo $product['price'] ?> </div>
                                            </div>
                                        </div>

                                        <div class="col-2 d-none d-md-block text-center">
                                            <a href="<?php echo base_url().'shopping/deleteItem?id='.$product['pid'].'&size='.$product['size'];?>" class="cart-remove">
                                                <i class="delete fa fa-times"></i>
                                            </a>
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cart Body =========> Product Ends Here -->
                    <?php
                   
                    }
                    }
                        else echo "<div class = 'p-5'>
                            <h3 class='text-center workFont'>Let's Do some shopping First!</h3>
                        </div>";
                    ?>
                </div>
            
                <!-- Cart Ends -->

                <div class="my-5 d-flex justify-content-between flex-column flex-lg-row">
                    <a href="<?php echo base_url();?>" class="btn btn-link text-muted">
                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                    <a 
                    <?php

                    if(isset($data['userID'])){
                        echo "href = '".base_url('shopping/getAddress')."'";
                    }else {
                        echo ' data-toggle="modal" href="#logModal" ';
                    }
                    
                    ?>
                                
                    class="btn btn-outline-dark" id="proceedToCheckOut">Proceed to checkout
                    <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
             
            </div>
