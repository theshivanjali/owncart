<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('products');
    }

    public function index($gender = null, $category = null)
    {
        $gender = $this->uri->segment(2);
        $category = $this->uri->segment(3);
        $list['categories'] = $this->products->subCategory($gender);  // to return the subcategories that are been displayed in the filters.
        $list['color'] = $this->products->colorList($gender);

        //    echo $gender . $category ;
        if (!empty($gender)) {
            if (!empty($category)) {
                $list['products'] = $this->products->productsList($gender, $category);
            } else {
                $list['products'] = $this->products->allproducts($gender);
            }
        }
        if (!empty($list['products'])) {
            $this->load->view('main/header');
            $this->load->view('pages/category', $list);
            $this->load->view('main/footer');
        }
    }
}
