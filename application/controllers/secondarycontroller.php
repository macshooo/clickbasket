<?php
	class SecondaryController extends CI_Controller {
		private $userinfo;

		public function __construct(){
			parent::__construct();
			$this->load->model('CustomerModel');
			$this->load->model('MarketModel'); // load model
			$this->load->model('ProductModel');

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
			$data['title'] = 'login';
			$data['userinfo'] = $this->userinfo;

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		//CheckLogin Verification
		public function verifyLogin() {
			$this->form_validation->set_rules('email','email','required', TRUE);
			$this->form_validation->set_rules('password','password','required',TRUE);

			if($this->form_validation->run() == false){
				$data['title'] = 'login';

				$this->checkMarketSession();
				$this->load->view('clickbasket',$data);
				$this->load->view('navigation/mainfooter');
				$this->load->view('layouts/footer');
			} else {
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));

				if($credentials = $this->CustomerModel->login($email,$password)){
					$usercredentials = array('id' => $credentials->consumer_id,
																	'logged_in' => TRUE );
					$this->session->set_userdata($usercredentials);
					redirect('maincontroller');
				}else{
					$this->form_validation->set_message('verifyUser','Incorrect Email Or Password. Please Try Again');
					$data['title'] = 'login';

					$this->checkMarketSession();
					$this->load->view('clickbasket',$data);
					$this->load->view('navigation/mainfooter');
					$this->load->view('layouts/footer');
			 	}
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('secondarycontroller/selectmarket');
		}

		public function register(){
			$data['title'] = 'register';

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}//RegistrationController

		public function register_user(){
			$this->form_validation->set_rules('firstname','Firstname', 'trim|required',TRUE);
			$this->form_validation->set_rules('lastname','Lastname', 'trim|required', TRUE);
			$this->form_validation->set_rules('phonenumber','PhoneNumber', 'trim|required', TRUE);
			$this->form_validation->set_rules('address','Address', 'trim|required', TRUE);
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|callback_check_email_if_exist',TRUE);
			$this->form_validation->set_rules('password','Password', 'trim|required|alpha_numeric|min_length[10]',TRUE);
			$this->form_validation->set_rules('confirmpassword','Confirm password', 'trim|required|alpha_numeric|min_length[10]|matches[password]',TRUE);

			if($this->form_validation->run()==false){
				$data['title'] = 'register';

				$this->checkMarketSession();
				$this->load->view('clickbasket',$data);
				$this->load->view('navigation/mainfooter');
				$this->load->view('layouts/footer');
			}else{
				date_default_timezone_set('Asia/Manila');
		  	$date = date('Y/m/d');
		  	$time = date('h:i'); //set default timezone to ASIA

		  	$date_created = $date.'-'.$time;

				$data = array(
					'consumer_fname' => ucfirst($this->input->post('firstname')),
					'consumer_lname' => ucfirst($this->input->post('lastname')),
					'mobilenumber'=> $this->input->post('phonenumber'),
					'address'=> $this->input->post('address'),
					'email' => $this->input->post('email'),
					'consumer_password'=> md5($this->input->post('password')),
					'date_created' => $date_created,
					'date_modified'=> $date_created,
				);
				$this->CustomerModel->register_user($data);

				$this->checkMarketSession();
				$this->load->view('main_pages/emailverification');
				$this->load->view('navigation/mainfooter');
				$this->load->view('layouts/footer');
			}
		}//UserRegistration

		public function update_user(){
			$email = $this->input->post('emailpost');
			$firstname = $this->input->post('firstnamepost');
			$lastname = $this->input->post('lastnamepost');
			$birthday = $this->input->post('birthdaypost');
			$address = $this->input->post('addresspost');
			$mobilenumber = $this->input->post('mobilenumberpost');
			$password = md5($this->input->post('passwordpost'));
			$error = 1;

			date_default_timezone_set('Asia/Manila');
			$date = date('Y/m/d');
			$time = date('h:i'); //set default timezone to ASIA
			$updated_at = $date.' '.$time;

			if($firstname != NULL){
				$usercredentials = array('consumer_fname'=>$firstname, 'date_modified'=>$updated_at);
				$error = 0;
			}else if($lastname){
				$usercredentials = array('consumer_lname'=>$lastname, 'date_modified' => $updated_at);
				$error = 0;
			}else if($email != NULL){
				if($this->check_email_if_exist()==false){
					$error = 1;
					echo "false";
				}else{
					$usercredentials = array('email'=>$email,'date_modified'=>$updated_at);
					$error = 0;
				}
			}else if($address){
				$usercredentials = array('address'=>$address, 'date_modified'=>$updated_at);
				$error = 0;
			}else if($mobilenumber){
				$usercredentials = array('mobilenumber' => $mobilenumber, 'date_modified' => $updated_at);
				$error = 0;
			}else if($password){
				$data = array('consumer_password' => $password, 'date_modified' => $updated_at);
				$error = 0;
			}

			if($error == 0){
				$this->CustomerModel->update_user($usercredentials);
			}

		}

	public function check_email_if_exist(){
			if($this->CustomerModel->check_email($this->input->post('emailpost'))){
			return true;
		} else {
			echo 'exist';
			return false;
		}
	}

	public function profile(){
		$data['title'] = 'profile';
		$data['userinfo'] = $this->userinfo;

		$this->checkMarketSession();
		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	} //Profile Page

	public function orderhistory(){
		$data['title'] = 'orderhistory';
		$data['userinfo'] = $this->userinfo;

		$this->checkMarketSession();
		$orders = $this->ProductModel->getOrderInfo($this->session->userdata('id'));
		$data['order'] = $orders;

		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/viewproductsmodal');
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	} //Order History Page

	public function wishlist(){
		$data['title'] = 'wishlist';
		$data['userinfo'] = $this->userinfo;

		$this->checkMarketSession();
		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	} //Order History Page

	public function accountsettings(){
		$data['title'] = 'accountsettings';
		$data['userinfo'] = $this->userinfo;

		$this->checkMarketSession();
		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	}

	public function selectmarket(){
		$market = $this->MarketModel->getMarket();

		$data['title'] = 'selectmarket';
		$data['marketlist'] = $market;
		$data['userinfo'] = $this->userinfo;

		$this->load->view('layouts/header', $data);
		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	}

	public function checkout(){
		$globalcart = $this->session->userdata('globalcart');

		if($this->session->userdata('logged_in')!=TRUE){
			redirect('secondarycontroller');
		}else{
			$data['title'] = 'checkout';
			$data['cart'] = $globalcart;
			$data['userinfo'] = $this->userinfo;

			$this->checkMarketSession();

			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}
	}

	public function getProductsByID(){
		$id = $this->input->post('id');

		$this->ProductModel->getOrderProductsByID($id);
	}
}
