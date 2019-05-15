<?php

// echo "<pre>";
// print_r($products);
// print_r($color);
// print_r($categories);
// echo "</pre>";
$i = 1;
foreach ($products as $list) {
    $total = $i++;
  // echo $list['price'];
   $priceArray[] = $list['price']; 
}

// print_r($priceArray);
$maximumPrice = max($priceArray);
$minimumPrice = min($priceArray);
// echo $maximumPrice." ".$minimumPrice;
?>

<section class="mt-8 mb-5">
    <div class="container">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
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

                                    foreach ($categories as $category) {
                                        //  print_r($category);
                                        ?>
                                        <li>
                                            <input class="styled-checkbox sub-category" id="<?php echo $category['subcategory']; ?>" type="checkbox" value="<?php echo $category['subcategory']; ?>">
                                            <label for="<?php echo $category['subcategory']; ?>">
                                                <?php echo $category['subcategory']; ?></label></li>

                                    <?php
                                } ?>
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
                                        <input class="styled-checkbox check-size" id="X-Small" type="checkbox" value="xs">
                                        <label for="X-Small">X-Small</label>
                                    </li>
                                    <li>    
                                        <input class="styled-checkbox check-size" id="Small" type="checkbox" value="s">
                                        <label for="Small">Small</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox check-size" id="Medium" type="checkbox" value="m">
                                        <label for="Medium">Medium</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox check-size" id="Large" type="checkbox" value="l">
                                        <label for="Large">Large</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox check-size" id="X-Large" type="checkbox" value="xl">
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
                                    <div class="min">From <i class="fas fa-rupee-sign"></i>&nbsp;<span id="slider-snap-value-lower"></span></div>
                                    <div class="max">To <i class="fas fa-rupee-sign"></i>&nbsp;<span id="slider-snap-value-upper"></span></div>
                                    <input type="hidden" name="pricefrom" id="slider-snap-input-lower" value="100" class="slider-snap-input">
                                    <input type="hidden" name="priceto" id="slider-snap-input-upper" value="10000" class="slider-snap-input">
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

                                    foreach ($color as $colorList) {

                                        ?>

                                        <li class="list-inline-item">
                                            <label for="<?php echo $colorList['color']; ?>" class="btn-colour" data-allow-multiple style="background-color:<?php echo $colorList['color']; ?>"></label>
                                            <input id="<?php echo $colorList['color']; ?>" type="checkbox" value="<?php echo $colorList['color']; ?>" class="input-invisible color styled-checkbox">
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
                                        <input class="styled-checkbox discount" id="10" type="checkbox" value="10">
                                        <label for="10">10% or above</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox discount" id="20" type="checkbox" value="20">
                                        <label for="20">20% or above</label>
                                    </li>
                                    <li>
                                        <input class="styled-checkbox discount" id="30" type="checkbox" value="30">
                                        <label for="30">Upto 30%</label>
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
                                <?php echo "1 - " ?></strong><strong id="numRows">
                                <?php echo $total; ?></strong>&nbsp;products
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


                <div class="row mt-3 py-3 mb-5" id="ajaxData">

                    <?php
                    foreach ($products as $lists) {

                        $id = $lists['pid'];

                        ?>

                        <div class="col-lg-4 my-4">
                            <div class="product-image">
                                <img src="<?php echo base_url() . 'assets/img/' . $lists['pimage']; ?> " class="pimage img-fluid">
                                <div class="product-hover-overlay">
                                    <a href="<?php echo base_url() . 'product/index/' . $id; ?>" class="product-hover-overlay-link"></a>
                                    <div class="product-hover-overlay-buttons">

                                        <a href="<?php echo base_url() . 'product/index/' . $id; ?>" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                                            <span>View</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-2">
                                <p class="text-muted text-sm mb-1">
                                    <?php echo $lists['subcategory']; ?>
                                </p>
                                <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">
                                        <?php echo $lists['pname']; ?></a>
                                </h3><span class="text-dark"><i class="fas fa-rupee-sign"></i>
                                    <?php echo $lists['price']; ?></span>
                            </div>
                        </div>

                    <?php

                }
                ?>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    // --------------------------------------------------------------------------------------------
    // -----* .color : for color filters
    // -----* .sub-category : for categories filter 
    // -----* .check-size: for size filters
    // -----* .discount: for discout check-boxes
    // ------------------------------------------------------------------------------------------>
    const values = document.querySelectorAll('.styled-checkbox');


    // const category = [];
    // const size = [];
    // const color = [];
    // const discount = [];        
    $(values).click(function() {
        //   console.log('checkbox changed');
        filter();
    });

    // function uniqueArray(arr){
    //     var result = [...new Set(arr)];
    //     return result;
    // }


    var segment = window.location.href.split('/');
    console.log(segment);
    var gender = segment[5];
    //console.log(gender);

    function filter() {
        var size = [];
        var category = [];
        var color = [];
        var discount = [];
        size = filterData('check-size');
        category = filterData('sub-category');
        color = filterData('color');
        discount = filterData('discount');

        var minimumPrice = document.querySelector('#slider-snap-input-lower').value;
        var maximumPrice = document.querySelector('#slider-snap-input-upper').value;       
        //    console.group('Size');
        //     console.log(size);
        //     console.log(category);
        //     console.log(color);
        //     console.log(discount);
        //     console.groupEnd();    

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>filter/',
            dataType: "JSON",
            data: {
                category: category,
                size: size,
                color: color,
                discount: discount,
                minimumPrice: minimumPrice,
                maximumPrice: maximumPrice,
                gender: gender
            },

            success: function(data) {
             JSON.stringify(data);
                //console.log(data);
                //console.log(data.row);
                $('#numRows').html(data.row);
                $('#ajaxData').html(data.products);
                //    
            },
            error: function(jqXhr, textStatus, errorMessage) {
                console.log("Error: ", errorMessage);
            }
        });
    }

  function filterData(className) {
        var filter = [];
        $('.' + className + ':checked').each(function() {
            filter.push($(this).val());
        });
        return filter;
    }

    //filter(); //if u want to fire on load (usefull when n items are checked by default...)
</script>