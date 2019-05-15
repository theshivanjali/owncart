

              <?php
              
              $subTotal = 0;
              $shipping = 0.0;
              $grandTotal = 0.0;

              if(!empty($productDetail)){
              foreach ($productDetail as $product) {
                  (int)  $subTotal += (int)$product['price'];
              
              }
            // echo $subTotal;
              if ($subTotal <= 500){
                  $shipping = 50;
              }

          $grandTotal = $subTotal + floatval($shipping);
          floatval($grandTotal);

          }
              
              ?>

            <div class="col-lg-4">
            <div class="block mb-5">
              <div class="block-header">
                <h6 class="text-uppercase mb-0">Order Summary</h6>
              </div>
              <div class="block-body bg-light pt-1">
                <p class="text-sm">Shipping and additional costs are calculated based on values you have entered.</p>
                <ul class="order-summary mb-0 list-unstyled">
                  <li class="order-summary-item"><span>Order Subtotal </span><span><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $subTotal; ?></span></li>
                  <li class="order-summary-item"><span>Shipping and handling</span><span><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $shipping; ?></span></li>
                  <li class="order-summary-item"><span>Tax</span><span><i class="fas fa-rupee-sign"></i>&nbsp;0.00</span></li>
                  <li class="order-summary-item border-0"><span>Total</span><strong class="order-summary-total"><i class="fas fa-rupee-sign"></i>&nbsp;<?php echo $grandTotal; ?></strong></li>
                </ul>
              </div>
            </div>
          </div>

        </div>
    </div>

