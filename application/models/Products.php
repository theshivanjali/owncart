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

        function checkCart($pid, $ipAddr, $size){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('product_id', $pid);
            $this->db->where('ip_address', $ipAddr);
            $this->db->where('size', $size);
            $cartChecked = $this->db->get()->result_array();
            return $cartChecked;
        }

        function insertCart($cartData){
            $this->db->insert('cart', $cartData);
        }

        function showCart($ipAddr){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('ip_address', $ipAddr);
            $cartItems = $this->db->get()->result_array();
            return $cartItems;
        }

        function getProductsForCart($implodedValue){
         
            if (!empty($implodedValue)) {
                $data = explode(',', $implodedValue);
            }
            $this->db->select("*");
            $this->db->from('product');
            $this->db->where_in('pid', $data);
            $this->db->join('cart', 'cart.product_id = product.pid');
                  
            $productDetail = $this->db->get()->result_array();
            return $productDetail;
        }

        function deleteCartItem($id, $size){
            $this->db->where('product_id', $id);
            $this->db->where('size', $size);
            $this->db->delete('cart');
        }
    }
