<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class FiltersModel extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);

        }

    function filterProduct($subCategory){

        $this->db->select("*");
            $this->db->from('product');
            $this->db->where('subcategory', $subCategory);
            $categorizedList = $this->db->get()->result_array();
            return $categorizedList;
            
    }   
        
    }