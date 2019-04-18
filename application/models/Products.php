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

        function allproducts($gender){

            $this->db->select("*");
            $this->db->from('product');
            $this->db->where('gender', $gender);
            $productList = $this->db->get()->result_array();
            return $productList;
        
        }

        function subCategory($gender){
            $this->db->distinct();
            $this->db->select('subcategory');
            $this->db->from('product');
            $this->db->where('gender', $gender);
            $subCategories = $this->db->get()->result_array();
            return $subCategories;

        }

        function colorList($gender){
            $this->db->distinct();
            $this->db->select('color');
            $this->db->from('product');
            $this->db->where('gender', $gender);
            $colorList = $this->db->get()->result_array();
            return $colorList;
        }

        function getProductByID($id){
            $this->db->select("*");
            $this->db->from('product');
            $this->db->where('pid', $id);
            $productDetail = $this->db->get()->result_array();
            return $productDetail;


        }

    }
