<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class CustomerDetails extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);

        }

        public function registerUser($data){
            $this->db->insert('users', $data);
            $userID = $this->db->insert_id();
            return $userID;
        }

        public function checkLogin($mobile, $email){
           
                $this->db->select("*");
                $this->db->from('users');

                if($mobile == NULL){
                    $this->db->where('email', $email);
                }
                else{
                $this->db->where('mobile', $mobile);
                }
                $cartItems = $this->db->get()->row();
                return $cartItems;
        }
    }