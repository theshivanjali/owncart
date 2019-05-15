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
        
        // echo "<pre>";
        // print_r($productDetail);
        // echo "</pre>";
        if (!empty($productDetail['productDetail'])) {

            $gender =  $productDetail['productDetail'][0]['gender']; //returns the gender so that we can display the trending products.

            $this->load->view('main/header');
            $this->load->view('pages/products', $productDetail);

            if($gender == 'women'){
                $this->load->view('pages/trending-women');
            }else{
                $this->load->view('pages/trending-men');
            }
            $this->load->view('main/footer');
        }

    }
}