<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shopping extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('products');
        $this->load->model('cart');
        $this->load->model('biling');
    }



    public function checkCart()
    {

        $ipAddr = $this->input->ip_address();


        //   $size = $this->input->post('size');
        $pid = $this->input->post('pid');
        $size = $this->input->post('size');
        $price = $this->input->post('price');
        $userId = NULL;
        $userId = $this->session->userdata('userID');

        if (isset($userId)) { //if session exist
            $checkCart = $this->cart->checkCartProduct($pid, $userId, $size); // checks if same product exists or not by userID
        } else {
            $checkCart =  $this->cart->checkCart($pid, $ipAddr, $size); // checks if same product exists or not by IP
        }

        $cartData = array(      
            'product_id' => $pid,
            'ip_address' => $ipAddr,
            'size' => $size,
            'price' => $price,
            'user_id' => $userId
        );

        if (empty($checkCart)) {
            $this->cart->insertCart($cartData);
            $this->cart();
        } else { 
            $this->cart();
        }
    }



    public function orderSummary()
    {
        $id = $this->session->userdata('userID');
        $ipAddr = $this->input->ip_address();
        if (isset($id))
            // $cartSubTotal['userID'] = $id;
        {
            $cartSubTotal['subtotal'] = $this->cart->getCartTotalPrice($id);
        } else {
            $cartSubTotal['subtotal'] =  $this->cart->getCartTotalPriceByIP($ipAddr);
        }
        // print_r($cartSubTotal);
      
        $this->load->view('pages/order_summary', $cartSubTotal);
    }



    public function cart()
    { //add to cart
        $ipAddr = $this->input->ip_address();

        $userId = $this->session->userdata('userID');

        $sessionIPAddr = $this->session->userdata('ipAddr');

        if ($sessionIPAddr === $ipAddr) {

            //if session ip address == local ipaddress update cart by entering the user id in the cart
            $this->cart->updateCartID($userId, $ipAddr);
            // $this->cart();
        }

        if (!isset($userId)) {
            $showCart = $this->cart->showCart($ipAddr);
        } else {
            $showCart = $this->cart->showCartByID($userId);
        }

        if (!empty($showCart)) {
            //   print_r($showCart);

            foreach ($showCart as $values) {
                $implodedValue[] = $values['product_id'];
            }
            $implodedValue = implode(',', $implodedValue);
            //echo $implodedValue;
            $productDetail['productDetail'] = $this->cart->getProductsForCart($implodedValue);
        } else {
            $productDetail['productDetail'] = NULL;
        }
        //  print_r($productDetail);
        $this->load->view('main/header');
        $this->load->view('pages/cart', $productDetail);
        $this->load->view('pages/cart_table');
        $this->orderSummary();
        // $this->load->view('pages/order_summary');
        $this->load->view('main/footer');
    }

    public function deleteItem()
    {
        $id = $this->input->get('id');
        $size = $this->input->get('size');
        //    echo $id;
        //    echo $size;
        $this->cart->deleteCartItem($id, $size);
        redirect('shopping/cart/');
    }

    public function checkPinCode()
    {
        $pincode =  $this->input->post('pincode');

        if (strlen($pincode) < 6 || strlen($pincode) > 6) {  //$text = "Wrong Pincode";
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



    public function getAddressInput()
    {
        $userId = $this->session->userdata('userID');
    //  $deliveryButton = $this->input->post('deliveryButton');
        $data = array();

         $checkDetailResult = $this->biling->checkDetails($userId);

        //  print_r($checkDetailResult);

        if (!empty($checkDetailResult)) {

           
            $dataToUpdate = array();    
            $dataToUpdate['name'] = $this->input->post('fullname_invoice');
            $dataToUpdate['email'] = $this->input->post('email_invoice');
            $dataToUpdate['street'] = $this->input->post('street_invoice');
            $dataToUpdate['city'] = $this->input->post('city_invoice');
            $dataToUpdate['zip'] = $this->input->post('zip_invoice');
            $dataToUpdate['state'] = $this->input->post('state_invoice');
            $dataToUpdate['mobile'] = $this->input->post('phone_invoice');

            // print_r($dataToUpdate);
             $this->biling->updateDetail($dataToUpdate, $userId);

        //    echo $result;
             $this->session->set_userdata($dataToUpdate);
        }
         else {

            $data['user_id'] = $this->session->userdata('userID');
            $data['name'] = $this->input->post('fullname_invoice');
            $data['email'] = $this->input->post('email_invoice');
            $data['street'] = $this->input->post('street_invoice');
            $data['city'] = $this->input->post('city_invoice');
            $data['zip'] = $this->input->post('zip_invoice');
            $data['state'] = $this->input->post('state_invoice');
            $data['mobile'] = $this->input->post('phone_invoice');
    
            $data =  $this->biling->insertAddress($data);
           
            $this->session->set_userdata($data);
        }

    $this->deliveryMethod();

    }
    public function getAddress(){

        $userId = $this->session->userdata('userID'); //to check if cart is empty or not. if not empty then don't redirect
    
        $checkCart = $this->cart->checkCartByID($userId);

        if(!empty($checkCart)){

            $checkAddress['billDetails'] = $this->biling->checkDetails($userId);
        
        $this->load->view('main/header');
        $this->load->view('pages/checkout-heading');
        $this->load->view('pages/address', $checkAddress);
        $this->orderSummary();
        // $this->load->view('pages/order_summary');
        $this->load->view('main/footer');
            } 
            else {
                $this->cart();
            }
        }
    


    public function deliveryMethod()
    {
        $this->load->view('main/header');
        $this->load->view('pages/checkout-heading');
        $this->load->view('pages/deliveryMethod');
        $this->orderSummary();
        // $this->load->view('pages/order_summary');
        $this->load->view('main/footer');
    }

    public function deliveryMethodInput(){
      $deliveryMethod =  $this->input->post('shipping');
        $userId = $this->session->userdata('userID');

        echo $deliveryMethod;  
        echo $userId;
           $updated = $this->biling->updateDeliveryMethod($deliveryMethod, $userId);

           $this->paymentmethod();
        }

    public function paymentmethod()
    {
        $this->load->view('main/header');
        $this->load->view('pages/checkout-heading');
        $this->load->view('pages/paymentMethod');
        $this->orderSummary();
        // $this->load->view('pages/order_summary');
        $this->load->view('main/footer');
    }

    public function paymentMethodInput(){
        $paymentMethod =  $this->input->post('paymentMethod');
        $userId = $this->session->userdata('userID');

        // echo $deliveryMethod;  
        // echo $userId;
           $updated = $this->biling->updatePaymentMethod($paymentMethod, $userId);

           $this->orderReview();
        
    }

    public function orderReview()

    {   $userId = $this->session->userdata('userID');

        $showCart = $this->cart->showCartByID($userId);

        if (!empty($showCart)) {
            //   print_r($showCart);

            foreach ($showCart as $values) {
                $implodedValue[] = $values['product_id'];
            }
            $implodedValue = implode(',', $implodedValue);
            //echo $implodedValue;
            $productDetail['productDetail'] = $this->cart->getProductsForCart($implodedValue);
        } else {
            $productDetail['productDetail'] = NULL;
        }

        $this->load->view('main/header');
        $this->load->view('pages/checkout-heading');
        $this->load->view('pages/order_review', $productDetail);
        $this->orderSummary();
        // $this->load->view('pages/order_summary');
        $this->load->view('main/footer');
    }

    public function confirmOrder(){
        //shift all the data in order and order details table, and empty the cart. 
        date_default_timezone_set('Asia/Kolkata');// change according timezone
       
        $currentDate = date('Y-m-d', time());

            $userId = $this->session->userdata('userID');
            $total = $this->session->userdata('total');
            $showCart = $this->cart->showCartByID($userId);
            $order = array();
            $order['user_id'] = $userId;
            $order['order_total'] = $total;
            $order['order_status'] = 'confirm';
            $order['order_date'] = $currentDate;

           $orderId =  $this->cart->placeOrder($order);
           
        //    $orderDetail = array();
        //    $orderDetails['order_id'] = $orderId;
            foreach ($showCart as $cart){
    
                 $orderDetails['order_id'] = $orderId;
              $orderDetails['product_id'] = $cart['product_id'];
              $orderDetails['product_price'] = $cart['price'];
              $orderDetails['product_size'] = $cart['size'];
              $orderDetails['product_quantity'] = $cart['quantity'];

              $orderDetailId = $this->cart->insertOrderDetails($orderDetails);

            }

            // print_r($orderDetails);

       
        if(!empty($orderDetailId)){
            
            $deleteCart = $this->cart->deleteCartByUserId($userId);
            
            $this->load->view('main/header');            
            $this->load->view('pages/order_confirmed');
            $this->load->view('main/footer');
        }
        else redirect();



    }



}
