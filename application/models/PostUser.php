<?php
class PostUser extends CI_Model {
 
	function fetch_data(){
  		$query = $this->db->get('customer');
  		return $query->result();
	}
}
?>