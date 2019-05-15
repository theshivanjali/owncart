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

    function make1_query($categoryList, $sizeList, $colorList, $discountList, $maximumPrice, $minimumPrice, $gender)
    {
     $query = "
     SELECT * FROM product 
     WHERE gender = '$gender' 
     ";
   
     if(isset($minimumPrice, $maximumPrice) && !empty($minimumPrice) &&  !empty($maximumPrice))
     {
      $query .= "
       AND price BETWEEN '".$minimumPrice."' AND '".$maximumPrice."'
      ";
     }
   
     if(isset($categoryList))
     {
      $categorizedList = explode("','", $categoryList);
      $query .= "
       AND subcategory IN('".$categorizedList."')
      ";
     }
   
     if(isset($colorList))
     {
      $colorsList = explode("','", $colorList);
      $query .= "
       AND color IN('".$colorsList."')
      ";
     }
   
     if(isset($sizeList)){
         $sizesList = explode("','", $sizeList);
         $query .= "
         AND size IN('".$sizesList."')
        ";
     }


     if(isset($discountList))
     {
      $discountsList = explode("','", $discountList);
      $query .= "
       AND discount IN('".$discountsList."')
      ";
     }
     return $query;
    }


    function filterData($categoryList, $sizeList, $colorList, $discountList, $maximumPrice, $minimumPrice, $gender){
        
        $this->db->select("*");
        $this->db->from('product');
        $this->db->where("price BETWEEN $minimumPrice AND $maximumPrice");

        if (!empty($categoryList)) {
            $data = explode(',', $categoryList);
            $this->db->where_in('subcategory', $data);
        }

        if (!empty($sizeList)) {
         $data = explode(',', $sizeList);
            $this->db->like('size', $sizeList); 
        }

        if (!empty($colorList)) {
            $data = explode(',', $colorList);
            $this->db->where_in('color', $data);
        }

        if (!empty($discountList)) {
            $data = explode(',', $discountList);
            $this->db->where_in('discount', $data);
        }

        $this->db->where_in('gender', $gender);
        $filteredOutput = $this->db->get()->result_array();
        return $filteredOutput;

    }
        
 }