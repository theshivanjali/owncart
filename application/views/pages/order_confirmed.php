<?php
// echo "<pre>";
// print_r($productDetail);
// echo "</pre>";

$sessionData = $this->session->userdata();
print_r($sessionData);
echo $sessionData['name'];


?>
<section class="mt-8 mb-5">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">Order Confirmed</li>
        </ol>
    </div>

    <div class="text-center">
        <h1 class="display-4 letter-spacing-5 text-uppercase font-weight-bold">Order Confirmed</h1>
    </div>
    </div>
</section>

<section class="pb-5">
      <div class="container text-center">
        <div class="icon-rounded bg-purple mb-3 mx-auto text-white">
         <i class="fas fa-check fa-2x"></i>
        </div>
        <h4 class="mb-3 ff-base">Thank you, <?php echo $sessionData['name'];?>. Your order is confirmed.</h4>
        <p class="text-muted mb-5">Your order hasn't shipped yet but we will send you ane email when it does.</p>
        <p> <a href="<?php echo base_url('order/orderList');?>" class="btn btn-outline-dark">View or manage your order</a></p>
      </div>
    </section>