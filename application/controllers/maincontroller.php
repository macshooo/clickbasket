<?php
	class MainController extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->database(); // load database
			$this->load->model('MarketModel'); // load model
			$this->load->model('CustomerModel');

			$this->userinfo = '';
			if($this->session->userdata('logged_in') == TRUE){
				if($user = $this->CustomerModel->userinfo($this->session->userdata('id'))){
					$this->userinfo = $user;
				}
	 		}
		}

		public function getMarket(){
			$marketid = $this->input->get('id');
			$this->session->set_userdata('market',$marketid);

			$this->index();
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
			$data['title'] = 'home';

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
    	$this->load->view('navigation/mainfooter');
    	$this->load->view('layouts/footer');
		}

		public function aboutus(){
			$data['title'] = 'aboutus';

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function blog(){
			$data['title'] = 'blog';

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function contactus(){
			$data['title'] = 'contactus';

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function faq(){
			$data['title'] = 'faq';

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function wishlist(){
			$data['title'] = 'wishlist';

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function help(){
			$data['title'] = 'help';

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}
	}
