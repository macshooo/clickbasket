<?php
	class SecondaryController extends CI_Controller {
		var $consumerdata;

		public function __construct(){
			parent::__construct();
			$this->load->helper('app');
			$this->load->model('CustomerModel');
			$this->load->model('MarketModel'); // load model
			$this->load->model('ProductModel');
		}

		public function index(){
			$data['title'] = 'login';

			checkMarketSession();
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

				checkMarketSession();
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
					$this->session->set_flashdata('login_msg', 'Incorrect Email and Password');
					$data['title'] = 'login';

					checkMarketSession();
					$this->load->view('clickbasket',$data);
					$this->load->view('navigation/mainfooter');
					$this->load->view('layouts/footer');
			 	}
			}
		}

		public function forgotpassword(){
			$data['title'] = 'forgotpassword';

			checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');

		}

		public function forgotPass(){
			$email = $this->input->post('email');
			$type = 'forgotpass';

			$this->sendEmail($email,$type);
		}

			function sendEmail($email,$type){
		    $this->load->library('email');

		    $this->email->from('clickbasketph@gmail.com', 'ClickBasket');
		    $this->email->to($email);

				if($consumer = $this->CustomerModel->getConsumerByEmail($email)){
					$this->consumerdata = $consumer;
				}

				$data['consumerdata'] = $this->consumerdata;

		    $this->email->subject('ClickBasket: Forgot Password');

				if($type == 'forgotpass'){
					$body = $this->load->view('emails/forgotpassword',$data,TRUE);
				}else{
					$body = $this->load->view('emails/confirmation',$data,TRUE);
				}

		    $this->email->message($body);
		    if($this->email->send()){
		      echo 'Email sent. '.$this->email->print_debugger();
		     }else{
		       echo $this->email->print_debugger();
		    }
		  }

		public function logout(){
			$this->session->sess_destroy();
			redirect('secondarycontroller/selectmarket');
		}

		public function register(){
			$data['title'] = 'register';

			checkMarketSession();
			$this->load->view('clickbasket',$data);
			$this->load->view('navigation/mainfooter');
			$this->load->view('layouts/footer');
		}

		public function register_user(){
			$config = array(
									array(
										'field'=>'firstname',
										'label'=>'Firstname',
										'rules'=>'trim|required',
										'errors'=>array(
																'required'=>'Firstname is required.',
										),
									),
									array(
										'field'=>'lastname',
										'label'=>'Lastname',
										'rules'=>'trim|required',
										'errors'=>array(
																'required'=>'Lastname is required.',
										),
									),
									array(
										'field'=>'phonenumber',
										'label'=>'PhoneNumber',
										'rules'=>'trim|required',
										'errors'=>array(
																'required'=>'Phone number is required.',
										),
									),
									array(
										'field'=>'building',
										'label'=>'Building',
										'rules'=>'trim|required',
										'errors'=>array(
																'required'=>'This is a required field.',
										),
									),
									array(
										'field'=>'street',
										'label'=>'Street',
										'rules'=>'trim|required',
										'errors'=>array(
																'required'=>'This is a required field.',
										),
									),
									array(
										'field'=>'floorunitroom',
										'label'=>'FloorUnitRoom',
										'rules'=>'trim|required',
										'errors'=>array(
																'required'=>'This is a required field.',
										),
									),
									array(
										'field'=>'city',
										'label'=>'City',
										'rules'=>'trim|required',
										'errors'=>array(
																'required'=>'This is a required field.',
										),
									),
									array(
										'field'=>'postcode',
										'label'=>'PostCode',
										'rules'=>'trim|required',
										'errors'=>array(
																'required'=>'This is a required field.',
										),
									),
									array(
										'field'=>'email',
										'label'=>'Email',
										'rules'=>'trim|required|valid_email|callback_checkEmail',
										'errors'=>array(
																'valid_email'=>'Please enter a valid email address',
																'checkEmail'=>'The email already exists',
										),
									),
									array(
										'field'=>'password',
										'label'=>'Password',
										'rules'=>'trim|required|alpha_numeric|min_length[10]'
									),
									array(
										'field'=>'confirmpassword',
										'label'=>'Confirm password',
										'rules'=>'trim|required|matches[password]',
										'errors'=>array(
																'matches'=>'Passwords must match!',
										),
									)
			);
			$this->form_validation->set_rules($config);

			if($this->form_validation->run()==false){
				$data['title'] = 'register';

				checkMarketSession();
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
					'email' => $this->input->post('email'),
					'consumer_password'=> md5($this->input->post('password')),
					'date_created' => $date_created,
					'date_modified'=> $date_created,
				);
				$id = $this->CustomerModel->register_user($data);

				$address = array(
					'building_name' => ucfirst($this->input->post('building')),
					'street_name' => ucfirst($this->input->post('street')),
					'floorunitroom_num' => ucfirst($this->input->post('floorunitroom')),
					'city_name' => ucfirst($this->input->post('city')),
					'postcode' => $this->input->post('postcode'),
					'consumer_id' => $id,
				);

				$this->CustomerModel->registerAddress($address);

				checkMarketSession();
				$this->load->view('main_pages/login');
				$this->load->view('navigation/mainfooter');
				$this->load->view('layouts/footer');
			}
		}//UserRegistration
		public function register_address(){
			$id = $this->CustomerModel->register_user($data);

			$buildingname = $this->input->post('buildingname');
			$street = $this->input->post('street');
			$floorunitroom = $this->input->post('floorunitroom');
			$city = $this->input->post('city');
			$postcode = $this->input->post('postcode');
			$sample= "hello";

			$address = array(
				'building_name'=>$buildingname,
				'street_name'=>$street,
				'floorunitroom_num'=>$floorunitroom,
				'city_name'=>$city,
				'postcode'=>$postcode,
				'instructions'=>$sample,
				'consumer_id' => $id
			);

				$this->CustomerModel->registerAddress($address);
		}


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

		public function update_user_address(){
				$buildingname = $this->input->post('buildingname');
				$street = $this->input->post('street');
				$floorunitroom = $this->input->post('floorunitroom');
				$city = $this->input->post('city');
				$postcode = $this->input->post('postcode');

				date_default_timezone_set('Asia/Manila');
				$date = date('Y/m/d');
				$time = date('h:i'); //set default timezone to ASIA
				$updated_at = $date.' '.$time;

				$useraddress = array(
					'building_name'=>$buildingname,
					'street_name'=>$street,
					'floorunitroom_num'=>$floorunitroom,
					'city_name'=>$city,
					'postcode'=>$postcode,
				);
				$this->CustomerModel->update_user_address($useraddress);
		}

	public function checkEmail($str){
		if($this->CustomerModel->check_email($str)){
			return true;
		} else {
			return false;
		}
	}

	public function profile(){
		$data['title'] = 'profile';

		checkMarketSession();
		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	} //Profile Page

	public function orderhistory(){
		$data['title'] = 'orderhistory';

		checkMarketSession();
		$orders = $this->ProductModel->getOrderInfo($this->session->userdata('id'));
		$data['order'] = $orders;

		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/viewproductsmodal');
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	} //Order History Page

	public function wishlist(){
		$data['title'] = 'wishlist';

		checkMarketSession();
		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	} //Order History Page

	public function accountsettings(){
		$data['title'] = 'accountsettings';

		checkMarketSession();
		$this->load->view('clickbasket',$data);
		$this->load->view('navigation/mainfooter');
		$this->load->view('layouts/footer');
	}

	public function selectmarket(){
		$this->userinfo = '';
		$market = $this->MarketModel->getMarket();
		$data['title'] = 'selectmarket';
		$data['marketlist'] = $market;

		if($this->session->userdata('logged_in') == TRUE){
      if($user = $this->CustomerModel->userinfo($this->session->userdata('id'))){
        $this->userinfo = $user;
				$data['userinfo'] = $this->userinfo;
      }
    }

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
			$data['coupon'] = $this->ProductModel->getCoupon();

			checkMarketSession();
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
