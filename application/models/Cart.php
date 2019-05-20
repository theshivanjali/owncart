<?php 

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Cart extends CI_Model{

        function __construct()
        {
            parent::__construct();

            $this->db = $this->load->database('default', true);

        }

        function checkCart($pid, $ipAddr, $size){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('product_id', $pid);
            $this->db->where('ip_address', $ipAddr);
            $this->db->where('size', $size);
            $cartChecked = $this->db->get()->result_array();
            return $cartChecked;
        }

        function checkCartProduct($pid, $userId, $size){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('product_id', $pid);
            $this->db->where('user_id', $userId);
            $this->db->where('size', $size);
            $cartChecked = $this->db->get()->result_array();
            return $cartChecked;
        }

        function checkCartById($userid){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('user_id', $userid);
            $cartChecked = $this->db->get()->result_array();
            return $cartChecked;
        }

        function insertCart($cartData){
            $this->db->insert('cart', $cartData);
        }

        function updateCartID($userID, $ipAddr){
            $this->db->set('user_id', $userID);
            $this->db->where('ip_address', $ipAddr);
            $this->db->update('cart');
        }

        function showCart($ipAddr){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('ip_address', $ipAddr);
            $cartItems = $this->db->get()->result_array();
            return $cartItems;
        }

        function showCartByID($userID){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where('user_id', $userID);
            $cartItems = $this->db->get()->result_array();
            return $cartItems;
        }

        function getProductsForCart($implodedValue){
         
            if (!empty($implodedValue)) {
                $data = explode(',', $implodedValue);
            }
            $this->db->select("*");
            $this->db->from('product');
            $this->db->where_in('pid', $data);
            $this->db->join('cart', 'cart.product_id = product.pid');
                  
            $productDetail = $this->db->get()->result_array();
            return $productDetail;
        }

        function deleteCartItem($id, $size){
            $this->db->where('product_id', $id);
            $this->db->where('size', $size);
            $this->db->delete('cart');
        }

        function getCartByID($id, $ipAddr){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where_in('product_id', $id);
            $this->db->or_where('ip_address', $ipAddr);
            $cartItems = $this->db->get()->result_array();
            return $cartItems;
        }

        function getTotalItemsInCart($id, $ipAddr){
            $this->db->select("*");
            $this->db->from('cart');
            $this->db->where_in('product_id', $id);
            $this->db->or_where('ip_address', $ipAddr);
            $cartItems = $this->db->count_all_results();
            return $cartItems;
        }

        function getCartTotalPrice($id){
            $this->db->select_sum("price");
            $this->db->where('user_id', $id);
            $this->db->from('cart');
           $result = $this->db->get()->result_array();
           return $result;
        }

       function getCartTotalPriceByIP($ipAddr){
        $this->db->select_sum("price");
        $this->db->where('ip_address', $ipAddr);
        $this->db->from('cart');
       $result = $this->db->get()->result_array();
       return $result;
       }

       public function placeOrder($order){
           $this->db->insert('orders', $order);
           $orderID = $this->db->insert_id();
           return $orderID;
       }

       public function insertOrderDetails($orderDetails)
       {
       $this->db->insert('order_details', $orderDetails);
           $orderID = $this->db->insert_id();
           return $orderID;
       }

       function deleteCartByUserId($id){
        $this->db->where('user_id', $id);
        $this->db->delete('cart');
    }


    }
