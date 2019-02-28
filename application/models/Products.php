<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Products extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);

        }

        function productsList($gender, $category){

            $this->db->select("*");
            $this->db->from('product');
            $this->db->where('gender', $gender);
            $this->db->where('category', $category);
            $categorizedList = $this->db->get()->result_array();
            return $categorizedList;
            
        }

        function allproducts(){

           $productList = $this->db->get('product')->result_array();
            return $productList;
        
        }

    }
