<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class FiltersModel extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);

        }

    function filterProduct($categoryList, $gender){

        //print_r($subCategory);

        if (!empty($categoryList)) {
            $data = explode(',', $categoryList);

        $this->db->select("*");
            $this->db->from('product');
            $this->db->where_in('subcategory', $data);
            $this->db->where_in('gender', $gender);
            $categorizedList = $this->db->get()->result_array();
       return $categorizedList;
        }
            
    }   
        
    }