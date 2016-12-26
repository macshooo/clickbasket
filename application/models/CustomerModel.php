<?php
	class CustomerModel extends CI_Model{
		function __construct() {
			parent::__construct();
		}

		public function userinfo($id){
			$query = $this->db->get_where('consumers',array('consumer_id'=> $id));

			if($query->num_rows() > 0){
				return $query->row();
			}
		}

		public function login($credentials,$password){
			$this->db->select('consumer_id,consumer_fname,consumer_lname,email,consumer_password');
			$this->db->from('consumers');
			$this->db->where('email',$credentials);
			$this->db->where('consumer_password',$password);

			$qry = $this->db->get();

			if($qry->num_rows() > 0){
				return $qry->row();
			} else {
				return false;
			}
		}

		//Register Module for class CustomerModel
		public function register_user($data){
				$this->db->insert('consumers', $data);
		}

		//update module for class CustomerModel
		public function update_user($data){
			$this->db->where('consumer_id', $this->session->userdata('id'));
			$this->db->update('consumers', $data);
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
