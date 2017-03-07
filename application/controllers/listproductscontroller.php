<?php
  class ListProductsController extends CI_Controller {
    private $limit = 3;
    public function __construct(){
      parent::__construct();
      $this->load->helper('app');
      $this->load->model('ProductModel');
      $this->load->model('MarketModel');
      $this->load->model('CustomerModel');
    }

    public function getStoreProducts(){
      $searchData = $this->input->post('searchData');

      $result = $this->ProductModel->getMarketProducts($searchData);

      if(!empty($result)){
        foreach ($result as $row):
          echo "<li><a href=".base_url('listproductscontroller/product/index?id='.$row->prod_id).">".$row->prod_name."</a></li>";
        endforeach;
      }else{
        echo "<li><em>Item not found</em></li>";
      }
    }

    public function index(){
      $subcatid = $this->input->get('subcategory');
      $data['title'] = 'productlist';

      $products = $this->ProductModel->getProductsbySubcategory($subcatid, $this->limit);
      $total_rows = $this->ProductModel->countProducts($subcatid);

      $data['listproducts'] = $products;

      $page_links = pagination($total_rows, $this->limit);
      $data['page_links'] = $page_links;

      checkMarketSession();
      $this->load->view('clickbasket',$data);
      $this->load->view('navigation/mainfooter');
      $this->load->view('layouts/footer');
    }

    public function product(){
      $data['title'] = 'product';
      $prodid = $this->input->get('id');

      checkMarketSession();
      if($prodinfo = $this->ProductModel->getStoreprodByID($prodid)){
        $prodratinginfo = $this->ProductModel->getProductRating($prodid);
        $countRating = $this->ProductModel->countRatings($prodid);

        if($discounts = $this->ProductModel->getDiscounts($prodid)){
          $data['discounts'] = $discounts;
        }

        $data['product_info'] = $prodinfo;
        $data['productrating_info'] = $prodratinginfo;
        $data['productrating_count'] = $countRating;

        $this->load->view('clickbasket',$data);
        $this->load->view('navigation/mainfooter');
        $this->load->view('layouts/footer');
      }
    }

    public function shoppingcart(){
      $globalcart = $this->session->userdata('globalcart');
      $data['cart'] = $globalcart;
      $data['title'] = 'shoppingcart';

      checkMarketSession();
      $this->load->view('clickbasket', $data);
      $this->load->view('navigation/mainfooter');
      $this->load->view('layouts/footer');
    }

    public function input_cart(){
      $found = 0;
      $prodid = $this->input->post('productid');
      $qty = $this->input->post('qty');
      $finalprice = $this->input->post('finalprice');

      $cartsession = array('id'=>$prodid,'qty'=>$qty,'price'=>$finalprice);

      if($this->session->userdata('globalcart')){
        $globalcart = $this->session->userdata('globalcart');
        for ($i = 0; $i < count($globalcart); $i++){
          if($globalcart[$i]['id'] == $prodid){
            $globalcart[$i]['qty'] += $qty;
            $this->session->set_userdata('globalcart', $globalcart);
            $found = 1;
          }
        }

        if($found == 0){
          if($this->cartdata = $this->ProductModel->getProductToCart($cartsession)){
            $globalcart[] =  $this->cartdata;
            $this->session->set_userdata('globalcart', $globalcart);
          }
        }
      }else{
        if($cart[] = $this->ProductModel->getProductToCart($cartsession)){
          $this->session->set_userdata('globalcart', $cart);
        }
      }
    }

    public function editcart_item(){
      $globalcart = $this->session->userdata('globalcart');
      $id = $this->input->post('productid');
      $btndata = $this->input->post('data');

      for ($i = 0; $i < count($globalcart); $i++){
        if($globalcart[$i]['id'] == $id){
          if($btndata == 'subtract'){
            $globalcart[$i]['qty']--;
            $newtotal = $globalcart[$i]['qty'] * $globalcart[$i]['price'];
          }else{
            $globalcart[$i]['qty']++;
            $newtotal = $globalcart[$i]['qty'] * $globalcart[$i]['price'];
          }
        }
      }

      $this->session->set_userdata('globalcart', $globalcart);
      echo $newtotal;
    }

    public function deleteItemfromCart(){
      $id = $this->input->post('productid');
      $i = 0;

      if($this->session->userdata('globalcart')){
        $globalcart = $this->session->userdata('globalcart');
        $size = sizeof($globalcart);
        while($i <= $size){
          if($globalcart[$i]['id']!= $id){
            $productcart[$i] = $globalcart[$i];
          }else{
            if(array_key_exists('id', $globalcart[$i+1])){
              $productcart[$i] = $globalcart[$i+1];
              $i++;
            }
            $size--;
          }
          $i++;
        }
      }
      $this->session->set_userdata('globalcart', $productcart);
    }

    public function placeOrder(){
      $globalcart = $this->session->userdata('globalcart');

      if($globalcart!=NULL){
        if($this->input->post('storecouponid')){
          $data = array(
            'order_subtotal' => $this->input->post('subtotal'),
            'order_vat' => $this->input->post('vat'),
            'grandtotal' => $this->input->post('gtotal'),
            'consumer_id' => $this->session->userdata('id'),
            'storecoupon_id' => $this->input->post('storecouponid'),
            'eta'=> date('Y-m-d H:i', strtotime($this->input->post('etaDelivery')))
          );
          $this->ProductModel->placeOrder($data);
          $this->ProductModel->placeProductOrder($globalcart);

          $coupon = array('coupons_use' => 'true');
          $this->ProductModel->useCoupon($coupon, $this->input->post('storecouponid'));
        }else{
          $data = array(
            'order_subtotal' => $this->input->post('subtotal'),
            'order_vat' => $this->input->post('vat'),
            'grandtotal' => $this->input->post('gtotal'),
            'consumer_id' => $this->session->userdata('id'),
            'eta'=> date('Y-m-d H:i', strtotime($this->input->post('etaDelivery')))
          );
          $this->ProductModel->placeOrder($data);
          $this->ProductModel->placeProductOrder($globalcart);
        }
      }
      $this->session->unset_userdata('globalcart');
    }

    public function cancelOrder(){
      $id = $this->input->post('id');
      $reason = $this->input->post('inputValue');
      $data = array(
        'order_status' => 'cancelled',
        'decline_reason' => $reason
      );
      $this->ProductModel->cancelOrder($id, $data);
    }

    public function productRating(){
      $rateid = $this->input->post('ratepost');
      $storeprodsubid = $this->input->post('storeprodsubidpost');
      $consumerid = $this->session->userdata('id');

      $data = array(
        'consumer_id' => $consumerid,
        'storeprodsub_id' => $storeprodsubid,
        'storeprod_rating' => $rateid
      );

    $this->ProductModel->productRating($data,$storeprodsubid);
    }

    public function checkCoupon(){
      $gTotal = $this->input->post('grandTotal');
      $markettotal = 0;

      if($couponInfo = $this->ProductModel->checkCoupon($this->input->post('coupon'))){
        if($this->ProductModel->checkUserCoupon($couponInfo->storecoupon_id) == 'couponexist'){
          echo 'exist';
        }else{
          $couponcount = $this->ProductModel->getCouponCount($couponInfo->storecoupon_id);
          if ($couponcount >= $couponInfo->coupons_max){
            echo 'limit';
          }else{
            $data = array(
              'storecoupon_id'=> $couponInfo->storecoupon_id,
              'consumer_id'=> $this->session->userdata('id')
            );
            $this->ProductModel->activateCoupon($data);
          }
        }
      }else{
        echo 'false';
      }
    }

    public function orderReceipt(){
      $orderproductsid = $this->input->post('printid');

      $consumeroid = $this->CustomerModel->userinfo($this->session->userdata('id'));
      $data['userinfo'] = $consumeroid;

      $orders = $this->ProductModel->getOrderDetail($this->session->userdata('id'), $orderproductsid);
  		$data['orderinfo'] = $orders;

      $productorders = $this->ProductModel->getOrderProductDetail($this->session->userdata('id'), $orderproductsid);
      $data['productorder_info'] = $productorders;


    $this->load->library('pdf');
		$this->load->view('navigation/orderreceipt',$data);
    }

  }
