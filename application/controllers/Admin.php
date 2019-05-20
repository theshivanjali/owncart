<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('adminmodel');
        $this->load->model('ordermodel');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function sidebarHeader()
    {
        $this->load->view('admin/sidebar');
        $this->load->view('admin/header');
    }

    public function footer()
    {
        $this->load->view('admin/footer');
    }

    public function dashboard()
    {

        // if($this->input->post('admin_login')){
        if ($this->session->userdata('admin_email')) {

            $this->sidebarHeader();
            $this->load->view('admin/dashboard');
            $this->footer();
        }

        else{
        $admin_name = $this->input->post('admin_email');
        $admin_password = $this->input->post('admin_password');

        //  echo $admin_name. $admin_password;
        $checkAdmin = $this->adminmodel->checkAdmin($admin_name, $admin_password);

        // print_r($checkAdmin);
        if (!empty($checkAdmin)) {

            // echo "hello";
            $data = array();

            foreach ($checkAdmin as $admin) {
                $data['admin_id'] = $admin['admin_id'];
                $data['admin_name'] = $admin['admin_name'];
            }

            $data['admin_email'] = $admin_name;

            $this->session->set_userdata($data);

            $this->sidebarHeader();
            $this->load->view('admin/dashboard');
            $this->footer();
        } else {

            $message = array('message' => 'Oops! Something Went Wrong!');
            $this->session->set_flashdata("item", $message);
            redirect('admin/', 'refresh');
        }
      }      
    }

    public function manageAdmin()
    {
       $details['adminDetails'] = $this->adminmodel->getAdmins();

        $this->sidebarHeader();        
        $this->load->view('admin/manageAdmin', $details);
        $this->footer();
    }

    public function addAdmin(){
        $data = array();
        $data['admin_name'] = $this->input->post('newAdminName');
        $data['admin_email'] = $this->input->post('newAdminEmail');
        $data['admin_password'] = $this->input->post('newAdminPass');
        $admin_password2 = $this->input->post('newAdminPass2');

        $this->form_validation->set_rules('newAdminEmail', 'Email', 'required|is_unique[admin.admin_email]|callback_email_check');
        $this->form_validation->set_rules('newAdminPass', 'Password', 'trim|required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('newAdminPass2', ' Confirm Password', 'trim|required|matches[newAdminPass]');
    
        if ($this->form_validation->run()) {
            $this->adminmodel->addAdmins($data);
            $message = array('message' => 'Another Admin Added', 'class' => 'text-success text-center');
            $this->session->set_flashdata("item", $message);
            redirect('admin/manageAdmin', 'refresh');
            // $this->manageAdmin();
        } else {
            $message = array('message' => 'Oops! Something Went Wrong!', 'class' => 'text-danger text-center');
            $this->session->set_flashdata("item", $message);
            redirect('admin/manageAdmin', 'refresh');
        }

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

    public function deleteAdmin(){
        $id = $this->input->get('id');
        $this->adminmodel->deleteAdmin($id);
        redirect('admin/manageAdmin', 'refresh');
    }


    public function productlist(){
        $details['productDetails'] = $this->adminmodel->getProducts();

        $this->sidebarHeader();        
        $this->load->view('admin/productlist', $details);
        $this->footer();
    }

    public function deleteProduct(){
        $id = $this->input->get('id');
        $this->adminmodel->deleteProduct($id);
        redirect('admin/productlist', 'refresh');
    }

    public function productinsert(){

        $this->sidebarHeader();        
        $this->load->view('admin/insertproduct');
        $this->footer();
    }

    public function insertProduct() //function that handles the backend of inert-product
    {
        $data = array();
         $data['pname'] =  $this->input->post('productName');
         $data['gender'] =  $this->input->post('gender');
         $data['category'] =  $this->input->post('category');
         $data['subcategory'] =  $this->input->post('subcategory');
         $data['price'] =  $this->input->post('price');
         $data['discount'] =  $this->input->post('discount');
         $size =  $this->input->post('size');
         $data['color'] =  $this->input->post('color');

         $config['upload_path']          = 'assets/img/'.$data['gender'].'/'. $data['category'];
         $config['allowed_types']        = 'gif|jpg|png|jpeg';
         $config['max_size']             = 10000;
         $config['max_width']            = 10000;
         $config['max_height']           = 10000;
         $config['encrypt_name']			= TRUE;
         $config['remove_spaces']		= TRUE;
          $config['overwrite']			= FALSE;

         $this->load->library('upload', $config);

         if ( ! $this->upload->do_upload('image'))
         {
                 $error = array('error' => $this->upload->display_errors());

                 print_r($error);
                 echo "<br>";
                 echo $config['upload_path'];
               //  $this->load->view('dashboard/student_profile', $error);
         }
         else
         {
                 $imagePath = $this->upload->data();

                //   print_r($imagePath); echo "<br>"; 
                  $data['pimage'] = $data['gender'].'/'. $data['category'].'/'.$imagePath['file_name'];
                //   $path = $data['file_name'];

               $data['size'] = implode(',', $size);

         }

        //  print_r($data);
        $this->adminmodel->insertProduct($data);

        $this->productlist();
    }

    public function manageorders(){

        $userOrders['orderList'] = $this->ordermodel->totalOrders();

        $this->sidebarHeader();        
        $this->load->view('admin/orderlist', $userOrders);
        $this->footer();
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/', 'refresh');
    }
}
