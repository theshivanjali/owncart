<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Ordermodel extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);
        }

        public function listOrders($userId){
            $this->db->select("*");
            $this->db->where("user_id", $userId);
         $orderList =   $this->db->get('orders')->result_array();
         return $orderList;
        }

        public function totalOrders(){
        $this->db->select("*");
         $orderList =   $this->db->get('orders')->result_array();
         return $orderList;
        }
    }