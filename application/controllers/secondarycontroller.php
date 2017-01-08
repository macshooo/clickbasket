<?php
	//controller for second navigation
	class SecondaryController extends CI_Controller {
		private $userinfo;

		public function __construct(){
			parent::__construct();
			$this->load->model('CustomerModel');
			$this->load->model('MarketModel'); // load model

			if($this->session->userdata('logged_in')==TRUE){
				if($user = $this->CustomerModel->userinfo($this->session->userdata('id'))){
					$this->userinfo = $user;
				}
	 		}
		}

		public function checkMarketSession(){
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

			$this->checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		//CheckLogin Verification
		public function checkLogin() {
			$this->form_validation->set_rules('email','email','required', TRUE);
			$this->form_validation->set_rules('password','password','required',TRUE);

			if($this->form_validation->run() == false){
				$data['title'] = 'login';

				$this->load->view('clickbasket',$data);
				$this->load->view('navigation/mainfooter');
				$this->load->view('layouts/footer');
			} else {
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));

				if($credentials = $this->CustomerModel->login($email,$password)){
					$userdata = array('id'=>$credentials->consumer_id,'name'=> $credentials->consumer_fname,'email' => $credentials->email, 'logged_in' => TRUE );
					$this->session->set_userdata($userdata);
					redirect('maincontroller');
				}else{
					$this->form_validation->set_message('verifyUser','Incorrect Email Or Password. Please Try Again');
					$data['title'] = 'login';

					$this->load->view('clickbasket',$data);
					$this->load->view('navigation/mainfooter');
					$this->load->view('layouts/footer');
			 	}
			}
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect('');
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

				$this->load->view('main_pages/emailverification');
				$this->load->view('navigation/mainfooter');
				$this->load->view('layouts/footer');
			}
		}//UserRegistration

	public function update_user(){
		$email = $this->input->post('emailpost');
		$firstname = $this->input->post('firstnamepost');
		$lastname = $this->input->post('lastnamepost');
		$gender = $this->input->post('genderpost');
		$birthday = $this->input->post('birthdaypost');
		$address = $this->input->post('addresspost');
		$mobilenumber = $this->input->post('mobilenumberpost');
		$password = md5($this->input->post('passwordpost'));

		date_default_timezone_set('Asia/Manila');
		$date = date('Y/m/d');
		$time = date('h:i'); //set default timezone to ASIA
		$updated_at = $date.' '.$time;

		if($firstname != NULL){
			$data = array('firstname' => $firstname, 'date_modified' => $updated_at);
			$this->session->set_userdata('firstname',$firstname);
		}else if($email){
			$this->form_validation->set_rules('email', 'Email', 'trim|required|callback_check_email_if_exist',TRUE);
			$data = array('email' => $email, 'date_modified' => $updated_at);

			if($this->form_validation->run()==false){
				echo "false";
			}
		}else if($lastname){
			$data = array('lastname' => $lastname, 'date_modified' => $updated_at);
		}else if($gender){
			$data = array('gender' => $gender, 'date_modified' => $updated_at);
		}else if($birthday){
			$data = array('birthday' => $birthday, 'date_modified' => $updated_at);
		}else if($address){
			$data = array('address' => $address, 'date_modified' => $updated_at);
		}else if($mobilenumber){
			$data = array('mobilenumber' => $mobilenumber, 'date_modified' => $updated_at);
		}else if($password){
			$data = array('password' => $password, 'date_modified' => $updated_at);
		}

		$this->CustomerModel->update_user($data);
	}

	public function check_email_if_exist(){
		$this->form_validation->set_message('check_email_if_exist', 'Email already exist');

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
		$this->load->view('clickbasket',$data);
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
	} // Account Settings Page

	public function selectmarket(){
		$data['title'] = 'selectmarket';
		$data['userinfo'] = $this->userinfo;

		if($market = $this->MarketModel->getMarket()){
			$this->market = $market;
			$data['marketlist'] = $this->market;
		}

		$this->checkMarketSession();
		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	} // Account Settings Page
}
