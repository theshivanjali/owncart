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
        $this->load->model('customerDetails');
        $this->load->model('cart');
    }
    //////////////////////////////////*****************************************/////////////////////////////////////////////
    ////////////////////////////////// 0 - Error, 1 - Email, 2- Mobile Number /////////////////////////////////////////////
    //////////////////////////////////****************************************/////////////////////////////////////////////


    public function login()
    {
        $ipAddr = $this->input->ip_address();

        $loginInput = $this->input->post('loginInput');

        $input = $this->checkInput($loginInput);

        if ($input == 1) {
            $this->form_validation->set_rules('loginInput', 'Email/Mobile No.', 'required|callback_email_check');
            $email = $loginInput;
            $mobile = NULL;
            // email_check($registerInput);
        } else if ($input == 2) {
            $this->form_validation->set_rules('loginInput', 'Email/Mobile No.', 'required|exact_length[10]|is_natural');
            $mobile = $loginInput;
            $email = NULL;
        } else {
            $mobile = NULL;
            $email = NULL;
        }

        $this->form_validation->set_rules('loginPassword', 'Password', 'trim|required|min_length[5]|max_length[50]|callback_password_check');

        if ($this->form_validation->run() == FALSE) {
            //   echo "errr";
            $data['error'] = validation_errors();
        } else {
            $checkLogin = $this->customerDetails->checkLogin($mobile, $email);

            $password = $this->input->post('loginPassword');
            $encryptPassword = sha1($password);

            if ($encryptPassword == $checkLogin->password) {
                $sessionData['userID'] = $checkLogin ->uid;
                $sessionData['email'] = $checkLogin->email;
                $sessionData['mobile'] = $checkLogin->mobile;
                $sessionData['gender'] = $checkLogin->gender;
                $sessionData['ipAddr'] = $ipAddr;

                // $sessionData['cartTotalItem'] = $this->cart->getTotalItemsInCart($checkLogin->uid, $ipAddr);

                $this->session->set_userdata($sessionData);

             

                $checkCart =  $this->cart->getCartByID($checkLogin->uid, $ipAddr);
    
                if ($checkLogin->gender == 'f') {
                    $gender = 'women';
                } else {
                    $gender = 'men';
                }
    
                if (empty($checkCart)) {
                    $data['url'] = base_url() . 'shop/' . $gender;
                } else {
                    
                    $data['url'] = base_url() . 'shopping/cart';
                }
            } else {
                $data['error'] = "Password is incorrect!";
            }
        }
        echo json_encode($data);
    }

    public function register()
    {
        $registerInput = $this->input->post('regInput');
        $inPut = $this->checkInput($registerInput);

        if ($inPut == 1) {
            $this->form_validation->set_rules('regInput', 'Email/Mobile No.', 'required|is_unique[users.email]|callback_email_check');
            $email = $registerInput;
            $mobile = NULL;
            // email_check($registerInput);
        } else if ($inPut == 2) {
            $this->form_validation->set_rules('regInput', 'Email/Mobile No.', 'required|is_unique[users.mobile]|exact_length[10]|is_natural');
            $mobile = $registerInput;
            $email = NULL;
        } else {
            $mobile = NULL;
            $email = NULL;
        }

        $this->form_validation->set_rules('regPass', 'Password', 'trim|required|min_length[5]|max_length[50]|callback_password_check');
        $this->form_validation->set_rules('regPass2', ' Confirm Password', 'trim|required|matches[regPass2]');
        $this->form_validation->set_rules('gender', ' Gender', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['error'] = "Please Check your details and try again!";
            // echo json_encode($data);

        } else {
            $password = $this->input->post('regPass');
            $hashPassword = sha1($password);
            $gender = $this->input->post('gender');
            // echo "yeah! you did it bitch!".$email.' '.$password.' '.$gender.'  '.$mobile;

            $ipAddr = $this->input->ip_address();

            $data = array(
                'email' => $email,
                'mobile' => $mobile,
                'password' => $hashPassword,
                'gender' => $gender
            );


            $data['userID'] =  $this->customerDetails->registerUser($data);
            
            // $data['cartTotalItem'] = $this->cart->getTotalItemsInCart($data['userID'], $ipAddr);

            $data['ipAddr'] = $ipAddr;

            $checkCart =  $this->cart->getCartByID($data['userID'], $ipAddr);

            $this->session->set_userdata($data);

            if ($gender === 'f') {
                $gender = 'women';
            } else {
                $gender = 'men';
            }

            if (empty($checkCart)) {
                // redirect('shop/'.$gender);
                $data['url'] = base_url() . 'shop/' . $gender;
            } else {
                // redirect('shopping/cart', 'refresh');
                $data['url'] = base_url() . 'shopping/cart';
            }
        }

        echo json_encode($data);
    }

    public function email_check($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return TRUE;
        } else {
            $this->form_validation->set_message('email_check', 'Please Enter a valid Email id!');
            return FALSE;
        }
    }

    public function password_check($password)
    {

        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/', $password)) {
            $this->form_validation->set_message('password_check', 'Password Must Contain Captial Letters, Number and Special Characters, with minimum 8 Characters Long!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function checkInput($registerInput)
    {

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

    public function logout(){
        $this->session->sess_destroy();
		redirect();
    }
}
