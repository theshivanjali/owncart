<?php

// echo "<pre>";
// print_r($products);
// echo "</pre>";
$i = 1;

$category = array();
$color = array();
foreach ($products as $list) {
    $total = $i++;
    $category[] = $list['subcategory'];
    $color[] = $list['color'];
}

//echo $total;
$uniqueCategory = array_unique($category);
$uniqueColor = array_unique($color);

?>
<section class="mt-8 mb-5">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Clothing</li>
        </ol>
    </div>

    <div class="text-center">
        <h1 class="display-4 font-weight-bold letter-spacing-5 text-capitalize">Clothing</h1>
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
                            <div class="card-body category-list categoryFilter">
                                <ul class="list-unstyled">
                                    <?php 

                                    foreach ($uniqueCategory as $category) {

                                        ?>
                                       <li>
                                            <input class="styled-checkbox" id="<?php echo $category; ?>" type="checkbox">
                                            <label for ="<?php echo $category; ?>"><?php echo $category; ?></label></li>
                                    
                                    <?php } ?>
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
                                        <input class="styled-checkbox" id="X-Small" type="checkbox" value="X-Small">
                                        <label for="X-Small">X-Small</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="Small" type="checkbox" value="Small">
                                        <label for="Small">Small</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="Medium" type="checkbox" value="Medium">
                                        <label for="Medium">Medium</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="Large" type="checkbox" value="Large">
                                        <label for="Large">Large</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox" id="X-Large" type="checkbox" value="X-Large">
                                        <label for="X-Large">X-Large</label>
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
                            <div class="card-body colorFilter">
                                <ul class="list-inline colours-wrapper">

                                    <?php 

                                    foreach ($uniqueColor as $color) {

                                ?>
                                                    
                                    <li class="list-inline-item">
                                        <label for="<?php echo $color; ?>" class="btn-colour" data-allow-multiple style="background-color:<?php echo $color; ?>"></label>
                                        <input id="<?php echo $color; ?>" type="checkbox" value="<?php echo $color; ?>" class="input-invisible">
                                    </li>
                                                    
                                    <?php
                                    }
                                    ?>

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
                            Showing <strong>
                                <?php echo "1 - " . $total; ?> </strong>of <strong>
                                <?php echo $total; ?> </strong>products
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


                <div class="row mt-3 py-3 mb-5">
                   
                    <?php
                    foreach ($products as $lists) {
                            ?>
                            
                        <div class="col-lg-4 my-4">
                                        <div class="product-image"><img src="<?php echo base_url() . 'assets/img/' . $lists['pimage']; ?> "class="pimage img-fluid">
                                        <div class="product-hover-overlay">
                                         <a href="detail.html" class="product-hover-overlay-link"></a>
                                            <div class="product-hover-overlay-buttons">
                                                <a href="detail.html" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                                                    <span>View</span>
                                                </a>
                                            </div>
                                     </div>
                                </div>
                                <div class="py-2">
                                    <p class="text-muted text-sm mb-1"><?php echo $lists['subcategory']; ?></p>
                                    <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark"><?php echo $lists['pname']; ?></a>
                                    </h3><span class="text-dark"><i class="fas fa-rupee-sign"></i><?php echo $lists['price']; ?></span>
                                </div>
                             </div>
                             
                   <?php
                    }
                    ?>

</div>
               

                <!-- <nav aria-label="page navigation" class="d-flex justify-content-center mb-5 mt-3">
                    <ul class="pagination">
                        <li class="page-item"><a href="#" aria-label="Previous" class="page-link disabled"><span aria-hidden="true">Prev</span><span class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a href="#" class="page-link">1 </a></li>
                        <li class="page-item"><a href="#" class="page-link">2 </a></li>
                        <li class="page-item"><a href="#" class="page-link">3 </a></li>
                        <li class="page-item"><a href="#" class="page-link">4 </a></li>
                        <li class="page-item"><a href="#" class="page-link">5 </a></li>
                        <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">Next</span><span class="sr-only">Next </span></a></li>
                    </ul>
                </nav> -->

            </div>
        </div>
    </div>
</section> 