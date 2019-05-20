<?php

$email = $this->session->userdata('email');

if (isset($email)) {
  // print_r($billDetails);
}

if (!empty($billDetails)) {

  foreach ($billDetails as $details) {

    ?>

    <div class="row">
      <div class="col-xl-8 offset-xl-2 text-center mb-5">
        <p class="lead text-muted">Please fill in your address.</p>
      </div>
    </div>


    <section>
      <div class="container">
        <div class="row mb-5">
          <!-- Closed at the end -->

          <div class="col-lg-8">

            <ul class="custom-nav nav nav-pills mb-5">
              <li class="nav-item w-25"><a href="checkout1.html" class="nav-link text-sm active">Address</a></li>
              <li class="nav-item w-25"><a href="#" class="nav-link text-sm disabled">Delivery Method</a></li>
              <li class="nav-item w-25"><a href="#" class="nav-link text-sm disabled">Payment Method </a></li>
              <li class="nav-item w-25"><a href="#" class="nav-link text-sm disabled">Order Review</a></li>
            </ul>
            <form action="<?php echo base_url('shopping/getAddressInput'); ?>" method="POST">
              <div class="block">
                <!-- Invoice Address-->
                <div class="block-header">
                  <h6 class="text-uppercase mb-0">Invoice address</h6>
                </div>
                <div class="block-body">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="fullname_invoice" class="form-label">Full Name</label>
                      <input type="text" name="fullname_invoice" placeholder="Full Name" id="fullname_invoice" class="form-control" required 
                      value="<?php echo $details['name']; ?>" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="emailaddress_invoice" class="form-label">Email Address</label>
                      <input type="email" name="email_invoice" placeholder="abc@gmail.com" id="email_invoice" class="form-control" required value="<?php if (isset($email)) echo $email; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="street_invoice" class="form-label">Street</label>
                      <input type="text" name="street_invoice" placeholder="123 Main St." id="street_invoice" class="form-control" required
                      value="<?php echo $details['street']; ?>" >
                    </div>
                    <div class="form-group col-md-6">
                      <label for="city_invoice" class="form-label">City</label>
                      <input type="text" name="city_invoice" placeholder="City" id="city_invoice" class="form-control" required
                      value="<?php echo $details['city']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="zip_invoice" class="form-label">ZIP</label>
                      <input type="number" name="zip_invoice" placeholder="Postal code" id="zip_invoice" class="form-control" required minlength="6" maxlength="6"  value="<?php echo $details['zip']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="state_invoice" class="form-label">State</label>
                      <input type="text" name="state_invoice" placeholder="State" id="state_invoice" class="form-control" required
                      value="<?php echo $details['state']; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="phone_invoice" class="form-label">Phone Number</label>
                      <input type="number" name="phone_invoice" placeholder="Phone Number" id="phone_invoice" class="form-control" required minlength="10" maxlength="12"  value="<?php echo $details['mobile']; ?>">
                    </div>


                  <?php   }
              } ?>
              </div>
              <!-- /Invoice Address-->
            </div>
          </div>
          <div class=" mb-5 d-flex justify-content-between flex-column flex-lg-row">
            <a href="<?php echo base_url('shopping/cart');  ?>" class="btn btn-link text-muted">
              <i class="fas fa-arrow-left"></i>&nbsp;Back
            </a>
            <!-- <a href="<?php echo base_url('shopping/deliveryMethod');  ?>" class="btn btn-outline-dark">Choose delivery method&nbsp;<i class="fas fa-arrow-right"></i></a> -->
            <button type="submit" class="btn btn-outline-dark">Choose delivery method&nbsp;<i class="fas fa-arrow-right"></i name="deliveryButton"></button>
          </div>
        </form>

      </div>