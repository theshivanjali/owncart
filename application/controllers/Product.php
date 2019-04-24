<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('products');
    }

    public function index($id){
        $pid = $this->uri->segment(3);
        //echo $pid;
        $productDetail['productDetail'] = $this->products->getProductByID($pid);

        if (!empty($productDetail['productDetail'])) {
            $this->load->view('main/header');
            $this->load->view('pages/products', $productDetail);
            $this->load->view('main/footer');
        }

    }
}