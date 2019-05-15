<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shopping extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products');
    }

    public function checkCart(){

        $ipAddr = $this->input->ip_address();


        $size = $this->input->post('size');
        $pid = $this->input->post('pid');
        $size = $this->input->post('size');

        $checkCart =  $this->products->checkCart($pid, $ipAddr, $size);

        if(empty($checkCart))
        {
        $cartData = array(
            'product_id' => $pid,
            'ip_address' => $ipAddr,
            'size' => $size
        );
        
       $this->products->insertCart($cartData);
       $this->cart();
        }
        else {
            $this->cart();
        }
    }
    public function cart(){ //add to cart
        $ipAddr = $this->input->ip_address();
        $showCart = $this->products->showCart($ipAddr);
    
        if(!empty($showCart)){
   //   print_r($showCart);
     
     foreach ($showCart as $values){
        $implodedValue[] = $values['product_id'];
     }
     $implodedValue = implode(',' ,$implodedValue);
     //echo $implodedValue;

    

     $productDetail['productDetail'] = $this->products->getProductsForCart($implodedValue);
    }
    else{
        $productDetail['productDetail']= "";
    }
     //  print_r($productDetail);
        $this->load->view('main/header');
        $this->load->view('pages/cart', $productDetail);
        $this->load->view('pages/cart_table');
        $this->load->view('pages/order_summary');
		$this->load->view('main/footer');
         
    }

    public function deleteItem(){
        $id = $this->input->get('id');
        $size = $this->input->get('size');
    //    echo $id;
    //    echo $size;
        $this->products->deleteCartItem($id, $size);
        redirect('shopping/cart/');
    }

    public function checkPinCode(){
      $pincode =  $this->input->post('pincode');

        if(strlen($pincode) < 6 || strlen($pincode) > 6)
    {  //$text = "Wrong Pincode";
        $completeMessage =  '<p class="workFont mt-2 text-danger"> Wrong Pincode </p>';
    }
    //   else{

        // $apiResults = file_get_contents(base_url('/assets/json/all-india-pincode-json-array.json'));
      
        // $result = json_decode($apiResults, true);
    //   print_r($result);
 //   $completeMessage = $result;
    //   }
    //   $message = $result['Message'];
    //     // $text = "Expected Delivery 10 - 15 days";

    //     if($message === 'No records found'){
    //         // $text = "Expected Delivery 10 - 15 days";
    //         $completeMessage =  '<p class="workFont mt-2 text-success">Expected Delivery 10 - 15 days. </p>';
    //     }
    //     else {
    //     //    $text = "No COD Available";
    //         $completeMessage =  '<p class="workFont mt-2 text-danger">No COD Available</p>';
    //     }
    //   }
     
        $data = array('text' => $completeMessage);
        echo json_encode($data);
    }


    public function getAddress(){

        $this->load->view('main/header');
        $this->load->view('pages/checkout-heading');
        $this->load->view('pages/address');
        $this->load->view('pages/order_summary');
		$this->load->view('main/footer');
         
    }


    public function deliveryMethod(){
        $this->load->view('main/header');
        $this->load->view('pages/checkout-heading');
        $this->load->view('pages/deliveryMethod');
        $this->load->view('pages/order_summary');
		$this->load->view('main/footer');
    }

    public function paymentmethod(){
        $this->load->view('main/header');
        $this->load->view('pages/checkout-heading');
        $this->load->view('pages/paymentMethod');
        $this->load->view('pages/order_summary');
		$this->load->view('main/footer');
    }

    public function orderReview(){
        $this->load->view('main/header');
        $this->load->view('pages/checkout-heading');
        $this->load->view('pages/order_review');
        $this->load->view('pages/order_summary');
		$this->load->view('main/footer');
    }


}