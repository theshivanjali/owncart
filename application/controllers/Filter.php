<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Filter extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('filtersModel');
    }

    public function index(){
        $subCategory['sub-categories'] = $this->input->post('category[]');

        //print_r($subCategory);

        $list = $this->filtersModel->filterProduct($subCategory);
        echo "<pre>";
        print_r($list);
        echo "</pre>";
    
    }

    public function filterData(){

       $subCategory = $this->input->post('category[]');

        return $subCategory;

        // $list = $this->filtersModel->filterProduct($subCategory);
        // echo "<pre>";
        // print_r($list);
        // echo "</pre>";
    }
}
