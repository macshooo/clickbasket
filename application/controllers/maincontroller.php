<?php
	//top most navigation
	class MainController extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->database(); // load database
			$this->load->model('MarketModel'); // load model

			if($category = $this->MarketModel->getCategory()){
					$this->category = $category;
			}
			if($subcategory = $this->MarketModel->getSubCategory()){
				$this->subcategory = $subcategory;
			}
			$data['categorylist'] = $this->category;
			$data['subcategorylist'] = $this->subcategory;
			//$this->load->view('layouts/header', $data);
		}

		public function index(){
			$data['title'] = 'home';

			$marketid = $this->input->get('id');

			if(!empty($marketid)){
				$marketinfo = $this->MarketModel->getInfobyID($marketid);

				$data['marketinfolist'] = $marketinfo;
    		$this->load->view('layouts/header', $data);
    		$this->load->view('clickbasket',$data);
    		$this->load->view('navigation/mainfooter');
    		$this->load->view('layouts/footer');
			}else{
				redirect('secondarycontroller/selectmarket');
			}
		}

		public function aboutus(){
			$data['title'] = 'aboutus';

			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function blog(){
			$data['title'] = 'blog';

			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function contactus(){
			$data['title'] = 'contactus';

			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function faq(){
			$data['title'] = 'faq';

			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function wishlist(){
			$data['title'] = 'wishlist';

			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function help(){
			$data['title'] = 'help';

			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}
	}
