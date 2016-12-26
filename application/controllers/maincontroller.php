<?php
	//top most navigation
	class MainController extends CI_Controller {
		public function __construct(){
			parent::__construct();
		}

		public function index(){
			$data['title'] = 'home';

			$this->load->view('layouts/header');
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function aboutus(){
			$data['title'] = 'aboutus';

			$this->load->view('layouts/header');
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function blog(){
			$data['title'] = 'blog';

			$this->load->view('layouts/header');
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function contactus(){
			$data['title'] = 'contactus';

			$this->load->view('layouts/header');
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function faq(){
			$data['title'] = 'faq';

			$this->load->view('layouts/header');
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function wishlist(){
			$data['title'] = 'wishlist';

			$this->load->view('layouts/header');
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function help(){
			$data['title'] = 'help';

			$this->load->view('layouts/header');
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}
	}
