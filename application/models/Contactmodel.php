<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Contactmodel extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);
        }

        function insertContact($cnt_data){
            $this->db->insert('contact', $cnt_data);
        }
    }