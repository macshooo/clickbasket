<?php
	if($title == 'home'){
		$this->load->view('main_pages/home');
	}

	if($title == 'aboutus'){
		$this->load->view('main_pages/aboutus');
	}

	if($title =='blog'){
		$this->load->view('main_pages/blog');
	}

	if($title =='contactus'){
		$this->load->view('main_pages/contactus');
	}

	if($title =='productlist'){
		$this->load->view('main_pages/productlist');
	}

	if($title =='product'){
		$this->load->view('main_pages/product');
	}

	if($title =='shoppingcart'){
		$this->load->view('main_pages/shoppingcart');
	}

	if($title == 'faq'){
		echo 'still working';
	}

	if($title == 'help'){
		echo 'still working';
	}

	if($title == 'login'){
		$this->load->view('main_pages/login');
	}

	if($title== 'register'){
		$this->load->view('main_pages/register');
	}

	if($title== 'accountsettings'){
		$this->load->view('main_pages/accountsettings');
	}

	if($title== 'orderhistory'){
		$this->load->view('main_pages/orderhistory');
	}

	if($title== 'wishlist'){
		$this->load->view('main_pages/wishlist');
	}

	if($title== 'selectmarket'){
		$this->load->view('main_pages/selectmarket');
	}

	if($title== 'checkout'){
		$this->load->view('main_pages/checkout');
	}

	if($title=='profile'){
		$consumerdata = $this->session->userdata('consumerdata');
		if($this->session->userdata('logged_in')== TRUE){
			$this->load->view('main_pages/profile');
		} else {
			redirect('secondarycontroller');
		}
	}
