<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('main/header');
		$this->load->view('main/homepage');
		$this->load->view('main/footer');
	}

	public function contact()
	{
		$this->load->view('main/header');
		$this->load->view('main/contact');
		$this->load->view('main/footer');
	}

	public function men(){
		$this->load->view('main/header');
		$this->load->view('pages/men');
		$this->load->view('pages/trending-men');
		$this->load->view('main/footer');
	}

	public function women(){
		$this->load->view('main/header');
		$this->load->view('pages/women');
		$this->load->view('main/footer');
	}
}

	