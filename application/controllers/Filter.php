<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Filter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('filtersModel');
        $this->load->model('products');
    }

    public function toString($className)
    {
        if (!empty($className)) {

            for ($i = 0; $i < count($className); $i++) {
                $arr[] = $className[$i];
            }    
            return implode(",", $arr);
        }
    }

    public function index()
    {

        $subCategory = $this->input->post('category[]');
        $size = $this->input->post('size[]');
        $color = $this->input->post('color[]');
        $discount = $this->input->post('discount[]');
        $maximumPrice = $this->input->post('maximumPrice');
        $minimumPrice = $this->input->post('minimumPrice');
        $gender = $this->input->post('gender');

        $categoryList = $this->toString($subCategory);
        $sizeList = $this->toString($size);
        $colorList = $this->toString($color);
        $discountList = $this->toString($discount);
    
       $list = $this->filtersModel->filterData($categoryList, $sizeList, $colorList, $discountList, $maximumPrice, $minimumPrice, $gender);

       //print_r($list);

        $output = '';
        $i = 0;

     if(!empty($list))   {
        foreach ($list as $lists) {
            $i++;
            $output .= '<div class="col-lg-4 my-4">
    <div class="product-image">
    <img src="' . base_url() . 'assets/img/' . $lists['pimage'] . '" class="pimage img-fluid">
        <div class="product-hover-overlay">
            <a href="' . base_url() . 'product/index/' . $lists['pid'] . '" class="product-hover-overlay-link"></a>
            <div class="product-hover-overlay-buttons">
                <a href="' . base_url() . 'product/index/' . $lists['pid'] . '" class="btn btn-outline-dark btn-buy"><i class="fa-search fa"></i>
                    <span>View</span>
                </a>
            </div>
        </div>
    </div>
    <div class="py-2">
        <p class="text-muted text-sm mb-1">' . $lists['subcategory'] . '
        </p>
        <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">' .
                $lists['pname'] . '</a>
        </h3><span class="text-dark"><i class="fas fa-rupee-sign"></i>'
                . $lists['price'] . '</span>
    </div>
</div>';
        }
    }
        else {
            $output.= '<div class="mt-8 mx-auto">
                <h2>Oops! No Results Found!</h2>
                <p class="text-center">Please Reset the Filters and try again!</p>
            </div>';
        }

         $data = array('row' => $i, 'products' => $output);
         echo json_encode($data);
   }
 }
   

// category: "ethnic"
// color: "#000066"
// discount: "0"
// gender: "men"
// pid: "1"
// pimage: "men/ethnic/m14.jpg"
// pname: "Navy Blue indo-Western"
// price: "1049"
// size: "X-Large,Large,Medium,"
