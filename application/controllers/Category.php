<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('products');
    }

    function products($gender = null, $category = null)
    {
       $gender = $this->uri->segment(3);
       $category = $this->uri->segment(4);

    //    echo $gender . $category ;
        if (!empty($gender)&&(!empty($category))) {

            $list['products'] = $this->products->productsList($gender, $category);
            if (!empty($list['products'])) {
                $this->load->view('main/header');
                $this->load->view('categories/category', $list);
                $this->load->view('main/footer');
            }
        else {
            $list['products'] = $this->products->allproducts();
            $this->load->view('main/header');
            $this->load->view('categories/category', $list);
            $this->load->view('main/footer');
        }
     }
    }
}
