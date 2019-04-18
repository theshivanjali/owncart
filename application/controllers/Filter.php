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

    public function index()
    {

        $subCategory = $this->input->post('category[]');
        $size = $this->input->post('size[]');
        $gender = $this->input->post('gender');

        //print_r($subCategory);

        //$categorySize = sizeof($subCategory);

        //echo $categorySize;
        // $data = count($subCategory);
        //var_dump($data);
        //$variable = sizeof($subCategory);
        //echo $variable;
        if (!empty($subCategory)) {

            for ($i = 0; $i < count($subCategory); $i++) {
                $arr[] = $subCategory[$i];
            }
            $categoryList = implode(",", $arr);

            //echo $categoryList;
            $list = $this->filtersModel->filterProduct($categoryList, $gender);
        } else {

            $list = $this->products->allproducts($gender);
        }

        $output = '';
        $i = 0;
        foreach ($list as $lists) {
            $i++;
            $output .= '<div class="col-lg-4 my-4">
    <div class="product-image">
    <img src="' . base_url() . 'assets/img/' . $lists['pimage'] . '" class="pimage img-fluid">
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
        <p class="text-muted text-sm mb-1">' . $lists['subcategory'] . '
        </p>
        <h3 class="h6 text-uppercase mb-1"><a href="#" class="text-dark">' .
                $lists['pname'] . '</a>
        </h3><span class="text-dark"><i class="fas fa-rupee-sign"></i>'
                . $lists['price'] . '</span>
    </div>
</div>';
        }

        $data = array('row' => $i, 'products' => $output);
        echo json_encode($data);
    }

    public function filterData()
    {

        $subCategory = $this->input->post('category[]');

        return $subCategory;

        // $list = $this->filtersModel->filterProduct($subCategory);
        // echo "<pre>";
        // print_r($list);
        // echo "</pre>";
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


