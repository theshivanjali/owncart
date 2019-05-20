<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Adminmodel extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);
        }
////////////////////////////////--------------------------------------Admins------------------------------/////////////////////////////////

     public function checkAdmin($admin_email, $admin_password){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('admin_email',$admin_email);
            $this->db->where('admin_password',$admin_password);
            $checkDetail =  $this->db->get()->result_array();
            return $checkDetail;
        }
       
    public function getAdmins(){
        $this->db->select('*');
        $this->db->from('admin');
        $checkDetail =  $this->db->get()->result_array();
        return $checkDetail;
    } 
        public function addAdmins($data)
        {
            $this->db->insert('admin', $data);
        }

        public function deleteAdmin($id){
            $this->db->where('admin_id', $id);
            $this->db->delete('admin');

        }
/////////////////////////////////////////-------------------------Products---------------------------/////////////////////////////////////////

        public function getProducts(){
            $this->db->select('*');
            $this->db->from('product');
            $checkDetail =  $this->db->get()->result_array();
            return $checkDetail;
        }

        public function deleteProduct($id){
            $this->db->where('pid', $id);
            $this->db->delete('product');

        }

        public function insertProduct($data){
            $this->db->insert('product', $data);
        }

    }