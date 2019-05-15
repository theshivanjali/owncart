<?php

// echo "<pre>";
// print_r($productDetail);
// echo "</pre>";
foreach ($productDetail as $product) {


  $size = $product['size'];
  $sizeArr = explode(',', $size);
  ?>
  <section class="mt-8 mb-5">
    <div class="container">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'pages/' . $product['gender'] . '/' . $product['category']; ?>"><?php echo ucfirst($product['category']); ?></a></li>
        <li class="breadcrumb-item active"><?php echo $product['pname']; ?></li>
      </ol>
    </div>
    </div>
  </section>

  <section>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 ">

          <div class="owl-carousel product-detail-slider owl-theme mb-5">
            <!-- product -->
            <div class="item">
              <div class="product-detail-image">
                <img src="<?php echo base_url() . 'assets/img/' . $product['pimage']; ?>" class="pimage img-fluid">
              </div>
            </div>

            <div class="item">
              <div class="product-detail-image">
                <img src="<?php echo base_url() . 'assets/img/' . $product['pimage']; ?>" class="pimage img-fluid">
              </div>
            </div>

            <div class="item">
              <div class="product-detail-image">
                <img src="<?php echo base_url() . 'assets/img/' . $product['pimage']; ?>" class="pimage img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div>
            <!--  product Name -->
            <p class="h3 workFont"><?php echo ucfirst($product['category']) . " " . $product['pname']; ?></p>
          </div>
          <div class="mt-4 mb-3">
            <!--  product Price -->
            <h1><i class="fas fa-rupee-sign"></i>
              <?php echo $product['price']; ?></h1>
            <p id="discount-display">
              <span class="text-success font-weight-bold h3">52% OFF</span></p>
            <p class="workFont text-muted">Inclusive of all taxes.</p>

          </div>
          <!--  product Size -->
          <form action="<?php echo base_url() . 'shopping/checkCart/'; ?>" method="POST" id="selectSize">
            <div class="row">
              <div class="col-sm-12 col-lg-12 detail-option mt-3">
                <h5 class="detail-option-heading">Size</h5>
                <label for="xl" class="btn btn-lg btn-outline-secondary detail-option-btn-label ml-0 
                <?php if (in_array('xl', $sizeArr, true)) { echo ""; } else { echo "disabled"; } ?>">
                  XL
                  <input type="radio" name="size" value="xl" id="xl" required class="input-invisible">
                </label>
                <label for="l" class="btn btn-lg btn-outline-secondary detail-option-btn-label  
                <?php if (in_array('l', $sizeArr, true)) { echo ""; } else { echo "disabled"; } ?> ">
                  L
                  <input type="radio" name="size" value="l" id="l" required class="input-invisible">
                </label>
                <label for="m" class="btn btn-lg btn-outline-secondary detail-option-btn-label  
                <?php if (in_array('m', $sizeArr, true)) { echo ""; } else { echo "disabled"; } ?> ">
                  M
                  <input type="radio" name="size" value="m" id="m" required class="input-invisible">
                </label>
                <label for="s" class="btn btn-lg btn-outline-secondary detail-option-btn-label  
                <?php if (in_array('s', $sizeArr, true)) { echo ""; } else { echo "disabled"; } ?> ">
                  S
                  <input type="radio" name="size" value="s" id="s" required class="input-invisible">
                </label>
                <label for="xs" class="btn btn-lg btn-outline-secondary detail-option-btn-label  
                <?php if (in_array('xs', $sizeArr, true)){ echo "";   } else {    echo "disabled"; } ?> ">
                  XS
                  <input type="radio" name="size" value="xs" id="xs" required class="input-invisible">
                </label>
                <input type="hidden" name="pid" value="<?php echo $product['pid']; ?>" id="pid">

                <a href="#">
                  <p class="workFont text-muted mt-2">Size Guide</p>
                </a>

                <div class="mt-4">
                  <h6 class="font-weight-light">Check COD Availability</h6>
                  <label for="pincode">
                    <input type="number" class="form-control mt-2" placeholder="Enter Pincode" name ="pincode" id="pincode" minlength="6" maxlength="6">
                  </label>
                 <div id ="cod">

                 </div>
                </div>
              </div>
            </div>
            <div>
              <button type="submit" class="btn btn-lg btn-outline-dark text-uppercase mt-5" id="addToCart"><i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button>
            </div>
          </form>
        </div>

      </div>
    </div>
    </div>
  </section>
<?php
}
//  echo $abc;
// echo "<br>";
// $arr = implode($abc);
// print_r($size);

//print_r($arr);

?>



<script>

let pincode = document.querySelector('#pincode');

function checkPinCode()
{
 let pincodeValue = pincode.value;
$.ajax({
            type: 'POST',
            url: '<?php echo base_url().'shopping/checkPinCode/'; ?>',
            dataType: "JSON",
            data: {
              pincode : pincodeValue
            },

            success: function(data) {
             JSON.stringify(data);
              
                $('#cod').html(data.text);
               
            },
            error: function(jqXhr, textStatus, errorMessage) {
                console.log("Error: ", errorMessage);
            }
        });
}      

pincode.addEventListener('keyup', checkPinCode);


</script>