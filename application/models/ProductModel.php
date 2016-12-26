<?php
	class ProductModel extends CI_Model{
		function getProducts(){
  		$this->db->select('*');
      $this->db->from('products');
    	$query = $this->db->get();

    	if($query->num_rows() > 0){
    	 $result = $query->result();
        return $result;
    	}
  	}

		function getProductbyID($prodid){
	  	$this->db->select('*');
	    $this->db->from('products');
			$this->db->where('product_id',$prodid);
	    $query = $this->db->get();
    	$result = $query->row();
      return $result;
  	}
	
 public function getProductToCart($data){

      $products = array();

      foreach($data as $row){
           
        $this->db->select('*');
        $this->db->from('products');
        $this->db->where('product_id',$row['id']);
        $query = $this->db->get();
        $prod = $query->row();

       $id = $prod->product_id;
       $name = $prod->product_name;
       $desc = $prod->product_description;
       $price = $prod->product_price;
       $qty = $row['qty'];

       $products[] = compact('id',
        'name',
        'desc',
        'price',
        'qty');
      }
    
      
      if($products!=0){
        return $products;
      }else{
        return false;
      }
      

 }


 }