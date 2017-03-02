<?php
	class CustomerModel extends CI_Model{
		function __construct() {
			parent::__construct();
		}

		public function userinfo($id){
			$query = $this->db->select('*')
							 					->from('consumers')
												->join('consumers_address', 'consumers_address.consumer_id = consumers.consumer_id')
												->where('consumers.consumer_id',$id)
												->get();

			if($query->num_rows() > 0){
				return $query->row();
			}
		}

		public function login($email,$password){
			$this->db->select('consumer_id');
			$this->db->from('consumers');
			$this->db->where('email',$email);
			$this->db->where('consumer_password',$password);

			$query = $this->db->get();

			if($query->num_rows() > 0){
				return $query->row();
			} else {
				return false;
			}
		}

		public function getConsumerByEmail($email){
	    $this->db->where('email', $email);
	    $query = $this->db->get('consumers');
	    return $query->row();
  	}

		//Register Module for class CustomerModel
		public function register_user($data){
			$this->db->insert('consumers', $data);
			return $this->db->insert_id();
		}

		public function registerAddress($data){
			$this->db->insert('consumers_address', $data);
		}

		//update module for class CustomerModel
		public function update_user($usercredentials){
			$this->db->where('consumer_id', $this->session->userdata('id'));
			if($this->db->update('consumers', $usercredentials)){
				echo "Success!";
			}else{
				echo "Fail!";
			}
		}

		public function update_user_address($useraddress){
			$this->db->join('consumers','consumers.consumer_id=consumers_address.consumer_id');
			$this->db->where('consumers_address.consumer_id', $this->session->userdata('id'));
			$this->db->update('consumers_address',$useraddress);
		}

		public function check_email($email){
			$query_str = "SELECT email from consumers WHERE email = ?";
			$result = $this->db->query($query_str,$email);

			if($result->num_rows() > 0){
				return false;
			} else {
				return true;
			}
		}

		public function check_update_email($email){
			$query_str = "SELECT email from consumers WHERE email = ?";
			$result = $this->db->query($query_str,$email);

			if($result->num_rows() > 0){
				return false;
			} else {
				return true;
			}
		}

		public function check_username($username){
			$query = "SELECT username from consumers where username=?";
			$result = $this->db->query($query,$username);

			if($result->num_rows() > 0){
				return false;
			}else{
				return true;
			}
		}
	}//end of class
?>
