<?php
	class ProductModel extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->db->select('*')
							 ->from('store_products')
							 ->join('products', 'products.prod_id = store_products.prod_id', 'left')
							 ->join('store_products_subcategory', 'store_products_subcategory.storeprod_id = store_products.storeprod_id', 'left')
							 ->join('store', 'store.store_id = store_products_subcategory.store_id', 'left')
							 ->join('store_products_inventory', 'store_products_inventory.storeprod_id = store_products.storeprod_id', 'left')
							 ->join('subcategory', 'subcategory.subcategory_id = store_products_subcategory.subcategory_id', 'left')
							 ->join('category', 'category.category_id = subcategory.category_id', 'left')
							 ->where('store_products.storeprod_deleted', 'false')
							 ->where('store_products_subcategory.store_id', $this->session->userdata('market'));
		}

		public function getProductsbySubcategory($subcatid){
			$this->db->where('store_products_subcategory.subcategory_id', $subcatid)
               ->group_by('products.prod_name');
      $query = $this->db->get();
      $result = $query->result();

      return $result;
    }

		public function getStoreprodByID($prodid){
			$this->db->where('store_products.prod_id', $prodid);
			$query = $this->db->get();
			$result = $query->row();

			return $result;
		}

 	// 	public function getProductToCart($data){
    //   $products = array();
		//
    //   foreach($data as $row){
		//
    //     $this->db->select('*');
    //     $this->db->from('products');
    //     $this->db->where('product_id',$row['id']);
    //     $query = $this->db->get();
    //     $prod = $query->row();
		//
    //    $id = $prod->product_id;
    //    $name = $prod->product_name;
    //    $desc = $prod->product_description;
    //    $price = $prod->product_price;
    //    $qty = $row['qty'];
		//
    //    $products[] = compact('id',
    //     'name',
    //     'desc',
    //     'price',
    //     'qty');
    //   }
		//
		//
    //   if($products!=0){
    //     return $products;
    //   }else{
    //     return false;
    //   }
 	// 	}
 }
