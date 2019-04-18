<?php

// echo "<pre>";
// print_r($productDetail);
// echo "</pre>";
foreach ($productDetail as $product) {

  ?>
  <section class="mt-8 mb-5">
    <div class="container">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url() . 'category/' . $product['gender'] . '/' . $product['category']; ?>"><?php echo ucfirst($product['category']); ?></a></li>
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
          <form action="#">
            <div class="row">
              <div class="col-sm-12 col-lg-12 detail-option mt-3">
                <h5 class="detail-option-heading">Size</h5>
                <label for="size_0" class="btn btn-lg btn-outline-secondary detail-option-btn-label ml-0">
                  XL
                  <input type="radio" name="size" value="value_0" id="size_0" required class="input-invisible">
                </label>
                <label for="size_1" class="btn btn-lg btn-outline-secondary detail-option-btn-label">
                  L
                  <input type="radio" name="size" value="value_1" id="size_1" required class="input-invisible">
                </label>
                <label for="size_2" class="btn btn-lg btn-outline-secondary detail-option-btn-label">
                  M
                  <input type="radio" name="size" value="value_2" id="size_2" required class="input-invisible">
                </label>
                <label for="size_3" class="btn btn-lg btn-outline-secondary detail-option-btn-label">
                  S
                  <input type="radio" name="size" value="value_3" id="size_3" required class="input-invisible">
                </label>
                <label for="size_4" class="btn btn-lg btn-outline-secondary detail-option-btn-label">
                  XS
                  <input type="radio" name="size" value="value_4" id="size_4" required class="input-invisible">
                </label>

                <a href="#">
                  <p class="workFont text-muted mt-2">Size Guide</p>
                </a>

                <div class="mt-4">
                  <h6 class="font-weight-light">Check COD Availability</h6>
                  <label for="pincode">
                    <input type="text" class="form-control mt-2" placeholder="Enter Pincode">
                  </label>
                </div>
              </div>
            </div>
          </form>
          <div>
            <button type="submit" class="btn btn-lg btn-outline-dark text-uppercase mt-5"><i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button>
          </div>
        </div>

      </div>
    </div>
    </div>
  </section>
<?php
}
?>

<section class="my-4">
  <div class="container">
    <div class="row row-equal-height">

      <div class="py-5 mx-auto">
        <h2 class="display-4 letter-spacing-5">Trending Collection</h2>
      </div>
      <div class="owl-carousel product-slider owl-theme mb-5">
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w1.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="#" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="#" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div>
        <!-- /product -->
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w2.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="#" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="#" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div>
        <!-- /product -->
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w3.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="detail.html" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="detail.html" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div>
        <!-- /product -->
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w4.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="detail.html" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="detail.html" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div>
        <!-- /product -->
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w5.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="detail.html" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="detail.html" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div> <!-- /product -->
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w6.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="detail.html" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="detail.html" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div> <!-- /product -->
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w7.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="detail.html" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="detail.html" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div> <!-- /product -->
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w8.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="detail.html" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="detail.html" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div> <!-- /product -->
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w9.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="detail.html" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="detail.html" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div> <!-- /product -->
        <!-- product -->
        <div class="item">
          <div class="product-image">
            <img src="<?php echo base_url() . 'assets/img/w10.jpg'; ?>" class="pimage img-fluid">
            <div class="product-hover-overlay">
              <a href="detail.html" class="product-hover-overlay-link"></a>
              <div class="product-hover-overlay-buttons">
                <a href="detail.html" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                  <span>View</span></a>
              </div>
            </div>
          </div>

          <div class="py-2">
            <p class="text-muted text-sm mb-1">Accessories</p>
            <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">College jacket</a></h3><span class="text-muted">$40.00</span>
          </div>

        </div> <!-- /product -->


      </div>
    </div>
  </div>
</section>

<script>
  $('.detail-option-btn-label').on('click', function() {
    var button = $(this);

    button.parents('.detail-option').find('.detail-option-btn-label').removeClass('active');

    button.toggleClass('active');
  });
</script>