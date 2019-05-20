<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ordermodel');
    }

    public function orderList(){
        $userId = $this->session->userdata('userID');

        $userOrders['orderList'] = $this->ordermodel->listOrders($userId);

        // print_r($userOrders);

            $this->load->view('main/header');            
            $this->load->view('pages/ordersList', $userOrders);
            $this->load->view('main/footer');

    }
}