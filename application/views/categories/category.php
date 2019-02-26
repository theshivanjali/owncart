<section class="mt-8">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Men's Clothing</li>
        </ol>
    </div>

    <div class="text-center">
        <h1 class="display-4 font-weight-bold letter-spacing-5 text-capitalize">Men's Clothing</h1>
    </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <h3 class='h4 my-3 p-3 text-uppercase letter-spacing-5'>Filters</h3>
                <div class="accordion" id="filters">
                    <div class="card">
                        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h2 class="mb-0 h6">
                                Category
                                <i class="fas fa-angle-down" style="float:right;"></i>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                            <div class="card-body category-list">
                                <ul class="list-unstyled">
                                    <li>
                                        <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                                        <label for="styled-checkbox-1">T-Shirt</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="shirt" type="checkbox" value="shirt">
                                        <label for="shirt">Shirt</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="trouser" type="checkbox" value="trouser">
                                        <label for="trouser">Trouser</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="indo" type="checkbox" value="indo">
                                        <label for="indo">Indo-Western</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="jacket" type="checkbox" value="jacket">
                                        <label for="jacket">Jackets</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="winter" type="checkbox" value="winter">
                                        <label for="winter">Winters</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h2 class="mb-0 h6">
                                Sizes
                                <i class="fas fa-angle-down" style="float:right;"></i>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                            <div class="card-body category-list">
                                <ul class="list-unstyled">
                                    <li>
                                        <input class="styled-checkbox" id="xs" type="checkbox" value="xs">
                                        <label for="xs">X-Small</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="s" type="checkbox" value="s">
                                        <label for="s">Small</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="m" type="checkbox" value="m">
                                        <label for="m">Medium</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="l" type="checkbox" value="l">
                                        <label for="l">Large</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="xl" type="checkbox" value="xl">
                                        <label for="xl">X-Large</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Size Filter Ends -->

                    <div class="card">
                        <div class="card-header">
                            <h2 class="mb-0 h6">
                                Price
                            </h2>
                        </div>
                        <div class="card-body category-list mt-3">

                            <div id="priceFilterMenu">
                                <div id="slider-snap" class="mt-4 mt-lg-0"> </div>
                                <div class="nouislider-values">
                                    <div class="min">From $<span id="slider-snap-value-lower"></span></div>
                                    <div class="max">To $<span id="slider-snap-value-upper"></span></div>
                                    <input type="hidden" name="pricefrom" id="slider-snap-input-lower" value="40" class="slider-snap-input">
                                    <input type="hidden" name="priceto" id="slider-snap-input-upper" value="110" class="slider-snap-input">
                                </div>
                            </div>

                        </div>
                    </div> <!-- Price Slider Ends -->

                    <div class="card">
                        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h2 class="mb-0 h6">
                                Color
                                <i class="fas fa-angle-down" style="float:right;"></i>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                            <div class="card-body">
                                <ul class="list-inline colours-wrapper">
                                    <li class="list-inline-item">
                                        <label for="color" class="btn-colour" data-allow-multiple style="background-color:blue;"></label>
                                        <input id="color" type="checkbox" value="blue" class="input-invisible">
                                    </li>
                                    <li class="list-inline-item">
                                        <label for="color1" class="btn-colour" data-allow-multiple style="background-color:red;"></label>
                                        <input id="color1" type="checkbox" value="red" class="input-invisible">
                                    </li>
                                    <li class="list-inline-item">
                                        <label for="color2" class="btn-colour" data-allow-multiple style="background-color:green;"></label>
                                        <input id="color2" type="checkbox" value="green" class="input-invisible">
                                    </li>
                                    <li class="list-inline-item">
                                        <label for="color3" class="btn-colour" data-allow-multiple style="background-color:black;"></label>
                                        <input id="color3" type="checkbox" value="black" class="input-invisible">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- Color div ends -->

                    <div class="card">
                        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h2 class="mb-0 h6">
                                Discount
                                <i class="fas fa-angle-down" style="float:right;"></i>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                            <div class="card-body category-list">

                                <ul class="list-unstyled">
                                    <li>
                                        <input class="styled-checkbox" id="10" type="checkbox" value="10">
                                        <label for="10">10% or above</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="20" type="checkbox" value="20">
                                        <label for="20">20% or above</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="30" type="checkbox" value="30">
                                        <label for="30">Upto 50%</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- Discount div ends -->
                </div> <!-- Accordian Ends ends -->

            </div> <!-- Col -3 ends -->

            <div class="col-xl-9">

                <div class="col-12 mt-3 pt-3">
                    <div class="d-flex flex-row justify-content-between">
                        <div class="p-2">
                            Showing <strong>1-12 </strong>of <strong>158 </strong>products
                        </div>
                        <div>
                            <span class="mr-1">Sort by</span>
                            <select class="custom-select w-auto border-0">
                                <option value="orderby_0">Default</option>
                                <option value="orderby_1">Popularity</option>
                                <option value="orderby_2">Rating</option>
                                <option value="orderby_3">Newest first</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="row mt-3 py-3">

                    <div class="col-lg-4">
                        <div class="product-image">
                            <img src="<?php echo base_url() . 'assets/img/m1.jpg'; ?>" class="pimage img-fluid">
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

                    <div class="col-lg-4">
                        <div class="product-image">
                            <img src="<?php echo base_url() . 'assets/img/m9.jpg'; ?>" class="pimage img-fluid">
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

                    <div class="col-lg-4">
                        <div class="product-image">
                            <img src="<?php echo base_url() . 'assets/img/m15.jpg'; ?>" class="pimage img-fluid">
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


                </div>


                <div class="row mt-3 py-3">

                    <div class="col-lg-4">
                        <div class="product-image">
                            <img src="<?php echo base_url() . 'assets/img/m11.jpg'; ?>" class="pimage img-fluid">
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

                    <div class="col-lg-4">
                        <div class="product-image">
                            <img src="<?php echo base_url() . 'assets/img/m8.jpg'; ?>" class="pimage img-fluid">
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

                    <div class="col-lg-4">
                        <div class="product-image">
                            <img src="<?php echo base_url() . 'assets/img/m9.jpg'; ?>" class="pimage img-fluid">
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


                </div>

                <div class="row mt-3 py-3">

                    <div class="col-lg-4">
                        <div class="product-image">
                            <img src="<?php echo base_url() . 'assets/img/m10.jpg'; ?>" class="pimage img-fluid">
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

                    <div class="col-lg-4">
                        <div class="product-image">
                            <img src="<?php echo base_url() . 'assets/img/m13.jpg'; ?>" class="pimage img-fluid">
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

                    <div class="col-lg-4">
                        <div class="product-image">
                            <img src="<?php echo base_url() . 'assets/img/m12.jpg'; ?>" class="pimage img-fluid">
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

                </div>

                <nav aria-label="page navigation" class="d-flex justify-content-center mb-5 mt-3">
            <ul class="pagination">
              <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
              <li class="page-item active"><a href="#" class="page-link">1       </a></li>
              <li class="page-item"><a href="#" class="page-link">2       </a></li>
              <li class="page-item"><a href="#" class="page-link">3       </a></li>
              <li class="page-item"><a href="#" class="page-link">4       </a></li>
              <li class="page-item"><a href="#" class="page-link">5 </a></li>
              <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span class="sr-only">Next     </span></a></li>
            </ul>
          </nav>

            </div>
        </div>
    </div>
</section> 