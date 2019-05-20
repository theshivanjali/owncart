<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Biling extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);
        }

        public function checkDetails($id){
            $this->db->select("*");
            $this->db->from('billing_details');
            $this->db->where('user_id', $id);
          $checkDetail =  $this->db->get()->result_array();
          return $checkDetail;
        }

        public function updateDetail($data, $id){
            // print_r($data);
            $this->db->where('user_id', $id);
            $this->db->update('billing_details', $data);
        }

        public function insertAddress($data){
            $this->db->insert('billing_details', $data);
           
        }
        public function updateDeliveryMethod($deliveryMethod, $userId){
            $this->db->set('delivery_method', $deliveryMethod);
            $this->db->where('user_id', $userId);
            $this->db->update('billing_details');   
        }
        
        public function updatePaymentMethod($paymentMethod, $userId){
            $this->db->set('payment_method', $paymentMethod);
            $this->db->where('user_id', $userId);
            $this->db->update('billing_details');   
        }
    }
