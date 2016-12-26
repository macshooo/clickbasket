<?php
	class LoginModel extends CI_Model{
		public function login($email,$password){
			$this->db->select('*');
			$this->db->from('consumers');
			$this->db->where('email',$email);
			$this->db->where('password',$password);

			$qry = $this->db->get();

			if($qry->num_rows() > 0){
				print_r($userdata);
				return $qry->row();
			} else {
				return false;
			}
		}// end of login
	}
 ?>
