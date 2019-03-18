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

    //    echo $gender . $category ;
        if (!empty($gender)&&(!empty($category))) {

            $list['products'] = $this->products->productsList($gender, $category);

        }else{
            
            $list['products'] = $this->products->allproducts();
        }
           
        if (!empty($list['products'])) {
                $this->load->view('main/header');
                $this->load->view('categories/category', $list);
                $this->load->view('main/footer');
        }
    }
}
