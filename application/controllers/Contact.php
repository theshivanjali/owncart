<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contactmodel');
      
    }

    public function index(){

    // if(isset($this->session->userID)){    
        $cnt_data = array();
        date_default_timezone_set('Asia/Kolkata');// change according timezone
              $currentDate = date( 'd-m-Y', time() );

      $cnt_data['cnt_fname'] = $this->input->post('cnt_fname');
      $cnt_data['cnt_lname'] = $this->input->post('cnt_lname');
      $cnt_data['cnt_email'] = $this->input->post('cnt_email');
      $cnt_data['cnt_message'] = $this->input->post('cnt_message');
      $cnt_data['cnt_date'] = $currentDate;
      $this->contactmodel->insertContact($cnt_data);
      $message = array('message' => 'Thankyou! We will get back to you shortly!', 'class' => 'alert alert-success text-center text-success mb-3');
      $this->session->set_flashdata("item" , $message);

      redirect('shop/contact', 'refresh');
        // } else{
            
        //     $message = array('message' => 'Please Login to send a message', 'class' => 'alert alert-success');
        //     $this->session->set_flashdata("item" , $message);

        // }
        
    }
}