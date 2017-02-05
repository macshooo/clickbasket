<?php
  class ListProductsController extends CI_Controller {
    private $limit = 1;
    public function __construct(){
      parent::__construct();
      $this->load->helper('app');
      $this->load->model('ProductModel');
      $this->load->model('MarketModel');
      $this->load->model('CustomerModel');
    }

    public function index(){
      $subcatid = $this->input->get('subcategory');
      $data['title'] = 'productlist';

      $products = $this->ProductModel->getProductsbySubcategory($subcatid, $this->limit);
      $subcat = $this->ProductModel->getSubCategorByID($subcatid);
      $total_rows = $this->ProductModel->countProducts($subcatid);

      $data['listproducts'] = $products;
      $data['subcategory'] = $subcat;

      $page_links = pagination($total_rows, $this->limit);
      $data['page_links'] = $page_links;

      if(!$this->input->is_ajax_request()) checkMarketSession();
      $this->load->view('clickbasket',$data);
      if(!$this->input->is_ajax_request()) $this->load->view('navigation/mainfooter');
      if(!$this->input->is_ajax_request()) $this->load->view('layouts/footer');
    }

    public function product(){
      $data['title'] = 'product';
      $prodid = $this->input->get('id');

      checkMarketSession();
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

      checkMarketSession();
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
