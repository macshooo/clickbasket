<?php
	class MainController extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->helper('app');
			//load models
			$this->load->model('MarketModel');
			$this->load->model('CustomerModel');
			$this->load->model('ProductModel');
		}

		public function getMarket(){
			$marketid = $this->input->get('id');
			$this->session->set_userdata('market',$marketid);
			$this->index();
		}

		public function index(){
			$data['title'] = 'home';

			$prodbyRating = $this->ProductModel->prodbyRating();
			$data['homeProducts'] = $prodbyRating;

			checkMarketSession();
			$this->load->view('clickbasket',$data);
    	$this->load->view('navigation/mainfooter');
    	$this->load->view('layouts/footer');
		}

		public function aboutus(){
			$data['title'] = 'aboutus';

			checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function blog(){
			$data['title'] = 'blog';

			checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function contactus(){
			$data['title'] = 'contactus';

			checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function faq(){
			$data['title'] = 'faq';

			checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function wishlist(){
			$data['title'] = 'wishlist';

			checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function help(){
			$data['title'] = 'help';

			checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}
	}
