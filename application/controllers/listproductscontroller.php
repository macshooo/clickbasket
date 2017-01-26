<?php
  class ListProductsController extends CI_Controller {
    public function __construct(){
      parent::__construct();
      $this->load->database(); // load database
      $this->load->model('ProductModel'); // load model
      $this->load->model('MarketModel'); // load model
      $this->load->model('CustomerModel');

      $this->userinfo = '';
      if($this->session->userdata('logged_in') == TRUE){
				if($user = $this->CustomerModel->userinfo($this->session->userdata('id'))){
					$this->userinfo = $user;
				}
	 		}
    }

    public function checkMarketSession(){
      $data['userinfo'] = $this->userinfo;
			$market = $this->session->userdata('market');

			if(!empty($market)){
				$marketcategory = $this->MarketModel->getCategory($market);
				$marketsubcategory = $this->MarketModel->getSubCategory();

				$data['marketcat'] = $marketcategory;
				$data['marketsubcat'] = $marketsubcategory;

    		$this->load->view('layouts/header', $data);
			}else{
				redirect('secondarycontroller/selectmarket');
			}
		}

    public function index(){
      $data['title'] = 'productlist';
      $subcatid = $this->input->get('id');

      $this->checkMarketSession();
      $products = $this->ProductModel->getProductsbySubcategory($subcatid);
      $subcat = $this->ProductModel->getSubCategorByID($subcatid);
      $data['listproducts'] = $products;
      $data['subcategory'] = $subcat;

      $this->load->view('clickbasket',$data);
      $this->load->view('navigation/mainfooter');
      $this->load->view('layouts/footer');
    }

    public function product(){
      $data['title'] = 'product';
      $prodid = $this->input->get('id');

      $this->checkMarketSession();
      if($prodinfo = $this->ProductModel->getStoreprodByID($prodid)){
        $data['product_info'] = $prodinfo;

        $this->load->view('clickbasket',$data);
        $this->load->view('navigation/mainfooter');
        $this->load->view('layouts/footer');
      }
    }

    public function shoppingcart(){
      $globalcart = $this->session->userdata('globalcart');
      $data['cart'] = $globalcart;
      $data['title'] = 'shoppingcart';

      $this->checkMarketSession();
      $this->load->view('clickbasket', $data);
      $this->load->view('navigation/mainfooter');
      $this->load->view('layouts/footer');
    }

    public function input_cart(){
      $prodid = $this->input->post('productid');
      $qty = $this->input->post('qty');

      if (count($cartsession = $this->session->userdata('cartsession')) == 0){
        $cartsession[] = array('id'=>$prodid,'qty'=>$qty);
      }else if(!in_array($prodid,$cartsession)){
        array_push($cartsession,array('id'=>$prodid,'qty'=>$qty));
      }else{
        array_push($cartsession,array('id'=>$prodid,'qty'=>$qty));
      }

      $this->session->set_userdata('cartsession',$cartsession);

      if($cartsession!=null){
        $merged = array();

        foreach ($cartsession as $row) {
          if (isset($merged[$row['id']])) {
            $merged[$row['id']]['qty'] += $row['qty'];
          }else {
            $merged[$row['id']] = $row;
          }
        }

        $cartsession = $merged;
        $this->session->set_userdata('cartsession',$cartsession);
      }

      if($this->session->userdata('cartsession')!=NULL){
        if($this->cartdata = $this->ProductModel->getProductToCart($this->session->userdata('cartsession'))){
          $this->session->set_userdata('globalcart', $this->cartdata);
        }
      }
    }

    public function editcart_item(){
      $id = $this->input->post('productid');
      $btndata = $this->input->post('data');
      $i = 0;

      if($this->session->userdata('cartsession')){
        $globalcart = $this->session->userdata('globalcart');
        foreach($globalcart as $cart){
          if($cart['id'] == $id){
            if($btndata == 'subtract'){
              $updatedqty = $cart['qty'] - 1;
            }else{
              $updatedqty = $cart['qty'] + 1;
            }
          }else{
            $i++;
          }
        }
        $globalcart[$i]['qty'] = $updatedqty;
        $newtotal = $globalcart[$i]['qty'] * $globalcart[$i]['price'];
        $this->session->set_userdata('globalcart', $globalcart);
      }
      echo $newtotal;
    }

    public function delete_cart(){
      $productcart = array();
      $id = $this->input->post('productid');
      $qty = $this->input->post('qty');
      $i = 0;

      if($this->session->userdata('cartsession')){
        $globalcart = $this->session->userdata('globalcart');
        foreach($globalcart as $row){
          if($row['id'] == $id){
              $row = $productcart;
              $i++;
          }else{
              $i++;
          }
        }

        for($x = 0; $x < $i; $x++){
          $productcart[$x]['id'] = $row['id'];
          $productcart[$x]['name'] = $row['name'];
          $productcart[$x]['desc'] = $row['desc'];
          $productcart[$x]['price'] = $row['price'];
          $productcart[$x]['qty'] = $row['qty'];

          $x++;
        }
      }
      $this->session->set_userdata('globalcart', $productcart);
    }

    public function placeOrder(){
      $userdata = $this->session->userdata('userdata');
      $globalcart = $this->session->userdata('globalcart');

      if($globalcart!=NULL){
        $total = 0;
        foreach($globalcart as $cart){
          $temp = $cart['price'] * $cart['qty'];
          $total = $total + $temp;
        }
        $data = array(
          'order_total' => $total,
          'consumer_id' => $this->session->userdata('id')
        );
        $this->ProductModel->placeOrder($data);
        $this->ProductModel->placeProductOrder($globalcart);
      }
      $this->session->unset_userdata('globalcart');
    }
  }
