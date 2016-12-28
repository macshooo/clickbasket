<?php
  class ListProductsController extends CI_Controller {
    function __Construct(){
      parent::__Construct ();
        $this->load->database(); // load database
        $this->load->model('ProductModel'); // load model
        $this->load->model('MarketModel'); // load model

    		if($category = $this->MarketModel->getCategory()){
    			$this->category = $category;
    		}

        if($categoryprod = $this->ProductModel->getProducts()){
          $this->prodlist = $categoryprod;
        }
        $data['categorylist'] = $this->category;
    		$this->load->view('layouts/header', $data);
      }

      public function index(){
        $data['title'] = 'category';
        $data['productlist'] = $this->prodlist;
        $catid = $this->input->get('id');

        if($products = $this->ProductModel->getCategorybyID($catid)){
          $data['subcategorylist'] = $subcategory;
          $this->load->view('clickbasket',$data);
          $this->load->view('navigation/mainfooter');
          $this->load->view('layouts/footer');
        }
      }

        public function product(){
            $data['title'] = 'product';
            $prodid = $this->input->get('id');

            if($prodinfo = $this->ProductModel->getProductbyID($prodid)){
                $data['product_info'] = $prodinfo;
                $this->load->view('clickbasket',$data);
                $this->load->view('navigation/mainfooter');
                $this->load->view('layouts/footer');
            }
        }

        public function shoppingcart(){
            $data['title'] = 'shoppingcart';

            $cartsession = $this->session->userdata('cartsession');
            $globalcart = $this->session->userdata('globalcart');

            $data['cart'] = $globalcart;

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
                    } else {
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

            if($this->session->userdata('cartsession')){
                $cartsession = $this->session->userdata('cartsession');
                foreach($cartsession as $row){
                    if($row['id'] == $id){
                        $updated = array('id'=>$row['id'], 'qty'=>$row['qty'] - 1);
                    }else{
                        $updated = array('id'=>$row['id'], 'qty'=>$row['qty']);
                    }
                }
                $this->session->set_userdata('cartsession', $updated);
            }

            if($this->session->userdata('cartsession')!=NULL){
                if($this->cartdata = $this->ProductModel->getProductToCart($this->session->userdata('cartsession'))){
                    $this->session->set_userdata('globalcart', $this->cartdata);
                }
            }

            print_r($updated[$id]['qty']);
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

        public function checkout(){
            $this->session->unset_userdata('cartsession');
            $this->session->unset_userdata('globalcart');
            redirect('maincontroller');
        }
    }
