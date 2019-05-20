<div class="row">
    <div class="col-xl-8 offset-xl-2 text-center mb-5">
        <p class="lead text-muted">Choose your delivery method.</p>
    </div>
</div>


<section>
    <div class="container">
        <div class="row mb-5">   <!-- Closed at the end -->
       
        <div class="col-lg-8">

        <ul class="custom-nav nav nav-pills mb-5">
              <li class="nav-item w-25"><a href="<?php echo base_url('shopping/getAddress'); ?>" class="nav-link text-sm">Address</a></li>
              <li class="nav-item w-25"><a href="#" class="nav-link text-sm active">Delivery Method</a></li>
              <li class="nav-item w-25"><a href="#" class="nav-link text-sm disabled">Payment Method </a></li>
              <li class="nav-item w-25"><a href="#" class="nav-link text-sm disabled">Order Review</a></li>
            </ul>

            <form action="<?php echo base_url('shopping/deliveryMethodInput'); ?>" method="POST">
            <div class="block my-5">
              <div class="block-body">
                <div class="row">
                  <div class="form-group col-md-12 d-flex align-items-center">
                    <input type="radio" name="shipping" id="normalDelivery" value="normal" required>
                    <label for="option0" class="ml-3"><strong class="d-block text-uppercase mb-2">Normal Delivery</strong><span class="text-muted text-sm">Get it in 7 - 10 Business Days.</span></label>
                  </div>
                  <div class="form-group col-md-12 d-flex align-items-center">
                    <input type="radio" name="shipping" id="expressDelivery" value="express" required>
                    <label for="option2" class="ml-3"><strong class="d-block text-uppercase mb-2">Express Delivery</strong><span class="text-muted text-sm">Get it in 2 - 3 Business Days. Extra Charges Applicable.</span></label>
                  </div>
                </div>
              </div>
            </div>
 
        <div class=" mb-5 d-flex justify-content-between flex-column flex-lg-row">
                  <a href="<?php echo base_url('shopping/getAddress');  ?>" class="btn btn-link text-muted text-capitalize">
                      <i class="fas fa-arrow-left"></i>&nbsp;Back to the address
                    </a>
                      <!-- <a href="<?php echo base_url('shopping/paymentMethod');  ?>" class="btn btn-outline-dark text-capitalize">Choose payment method&nbsp;<i class="fas fa-arrow-right"></i></a> -->
                      <button type="submit" class="btn btn-outline-dark">Choose payment method&nbsp;<i class="fas fa-arrow-right"></i name="paymentButton"></button>  
                    
                    </form>
        </div>


        </div>