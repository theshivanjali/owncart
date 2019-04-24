<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
	{
        parent::__construct();
        
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('email');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');

	}
    //////////////////////////////////*****************************************/////////////////////////////////////////////
    ////////////////////////////////// 0 - Error, 1 - Email, 2- Mobile Number /////////////////////////////////////////////
    //////////////////////////////////****************************************/////////////////////////////////////////////
    public function login()
    {

        $loginInput = $this->input->post('loginInput');

        $input = $this->checkInput($loginInput);

        if($input == 1){
            $this->form_validation->set_rules('regInput', 'Email/Mobile No.', 'required|is_unique[users.email]|callback_email_check');
            $email = $loginInput;
            $mobile = "";
           // email_check($registerInput);
        }else if($input == 2){
            $this->form_validation->set_rules('regInput', 'Email/Mobile No.', 'required|is_unique[users.mobile]|exact_length[10]|is_natural');
            $mobile = $loginInput;
            $email = "";
        }else{
            $mobile="";
            $email="";
        }

        $this->form_validation->set_rules('loginPassword', 'Password', 'trim|required|min_length[5]|max_length[50]|callback_password_check');
	
        if ($this->form_validation->run() == FALSE)
        {
            echo validation_errors();
            exit;
        }
        else
        {
            $password = $this->input->post('loginPassword');
            echo "yeah! you did it bitch!".$email.' '.$password.' '.$mobile;
        }
        
    }

    public function register()
    {
        $registerInput = $this->input->post('regInput');
        $inPut = $this->checkInput($registerInput);

        if($inPut == 1){
            $this->form_validation->set_rules('regInput', 'Email/Mobile No.', 'required|is_unique[users.email]|callback_email_check');
            $email = $registerInput;
            $mobile = "";
           // email_check($registerInput);
        }else if($inPut == 2){
            $this->form_validation->set_rules('regInput', 'Email/Mobile No.', 'required|is_unique[users.mobile]|exact_length[10]|is_natural');
            $mobile = $registerInput;
            $email = "";
        }else{
            $mobile="";
            $email="";
        }

        $this->form_validation->set_rules('regPass', 'Password', 'trim|required|min_length[5]|max_length[50]|callback_password_check');
		$this->form_validation->set_rules('regPass2', ' Confirm Password', 'trim|required|matches[regPass2]');
        $this->form_validation->set_rules('gender', ' Gender', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            echo validation_errors();
            exit;
        }
        else
        {
            $password = $this->input->post('regPass');
            $gender = $this->input->post('gender');
            echo "yeah! you did it bitch!".$email.' '.$password.' '.$gender.'  '.$mobile;
        }

    }

    public function email_check($email){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return TRUE;
        }else {
            $this->form_validation->set_message('email_check', 'Please Enter a valid Email id!');
            return FALSE;
        }

    }

    public function password_check($password){

        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/', $password)) {
                       $this->form_validation->set_message('password_check', 'Password Must Contain Captial Letters, Number and Special Characters, with minimum 8 Characters Long!');
                   return FALSE;
           }
           else{
               return TRUE;
           }

    }

    public function checkInput($registerInput){

        $emailPattern = '/^\w{2,}@\w{2,}\.\w{2,4}$/';
        $mobilePattern = "/^[6-9][0-9]{9}$/";

        if (preg_match($emailPattern, $registerInput)) {
            return 1;
        } else if (preg_match($mobilePattern, $registerInput)) {
            return 2;
        } else {
            return 0;
        }
    }

}
