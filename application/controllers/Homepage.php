<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

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

	public function category(){
		$this->load->view('main/header');
		$this->load->view('categories/categories');
		$this->load->view('main/footer');
	}
}

	