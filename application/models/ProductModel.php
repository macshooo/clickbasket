<?php
	class ProductModel extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function getSubCategorByID($subcatid){
      $this->db->select('*');
      $this->db->from('subcategory');
			$this->db->join('category','subcategory.category_id = category.category_id');
			$this->db->where('subcategory_id',$subcatid);
      $query = $this->db->get();
      $result = $query->row();

      return $result;
    }

		public function getProductsbySubcategory($subcatid){
			$this->db->select('*')
							 ->from('store_products')
							 ->join('products', 'products.prod_id = store_products.prod_id', 'left')
							 ->join('store_products_subcategory', 'store_products_subcategory.storeprod_id = store_products.storeprod_id', 'left')
							 ->join('store', 'store.store_id = store_products_subcategory.store_id', 'left')
							 ->join('store_products_inventory', 'store_products_inventory.storeprod_id = store_products.storeprod_id', 'left')
							 ->join('subcategory', 'subcategory.subcategory_id = store_products_subcategory.subcategory_id', 'left')
							 ->join('category', 'category.category_id = subcategory.category_id', 'left')
							 ->where('store_products.storeprod_deleted', 'false')
							 ->where('store_products_subcategory.store_id', $this->session->userdata('market'))
							 ->where('store_products_subcategory.subcategory_id', $subcatid)
               ->group_by('products.prod_name');
      $query = $this->db->get();
      $result = $query->result();

      return $result;
    }

		public function getStoreprodByID($prodid){
			$this->db->select('*')
							 ->from('store_products')
							 ->join('products', 'products.prod_id = store_products.prod_id', 'left')
							 ->join('store_products_subcategory', 'store_products_subcategory.storeprod_id = store_products.storeprod_id', 'left')
							 ->join('store', 'store.store_id = store_products_subcategory.store_id', 'left')
							 ->join('store_products_inventory', 'store_products_inventory.storeprod_id = store_products.storeprod_id', 'left')
							 ->join('subcategory', 'subcategory.subcategory_id = store_products_subcategory.subcategory_id', 'left')
							 ->join('category', 'category.category_id = subcategory.category_id', 'left')
							 ->where('store_products.storeprod_deleted', 'false')
							 ->where('store_products_subcategory.store_id', $this->session->userdata('market'))
							 ->where('store_products.prod_id', $prodid);
			$query = $this->db->get();
			$result = $query->row();

			return $result;
		}

 		public function getProductToCart($data){
      $products = array();

      foreach($data as $row){
        $this->db->select('*')
        				 ->from('store_products')
								 ->join('products', 'store_products.prod_id = products.prod_id')
								 ->join('store_products_subcategory', 'store_products.storeprod_id = store_products_subcategory.storeprod_id')
								 ->join('store', 'store_products_subcategory.store_id = store.store_id')
								 ->where('store_products_subcategory.store_id', $this->session->userdata('market'))
        				 ->where('store_products.prod_id',$row['id']);
        $query = $this->db->get();
        $prod = $query->row();

				$market = $prod->store_name;
				$marketid = $prod->store_id;
				$id = $prod->prod_id;
				$name = $prod->prod_name;
				$desc = $prod->prod_desc;
				$price = $prod->storeprod_price;
				$qty = $row['qty'];

				$products[] = compact('market',
															'marketid',
															'id',
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

		public function placeOrder($data){
			$this->db->insert('orders', $data);
		}

		public function placeProductOrder($globalcart){
			$query = $this->db->query('SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1');
			$row = $query->row();

			if(isset($row)){
				foreach($globalcart as $cart){
					$query2 = $this->db->query('SELECT storeprodsub_id FROM store_products_subcategory WHERE storeprod_id = '.$cart['id'].' AND store_id = '.$cart['marketid'].'');
					$row2 = $query2->row();
					$data = array(
						'order_id' => $row->order_id,
						'storeprodsub_id' => $row2->storeprodsub_id,
						'order_qty' => $cart['qty'],
						'product_total' => $cart['qty'] * $cart['price']
					);
					$this->db->insert('orders_store_products', $data);
				}
			}
		}

		public function getOrderInfo($userid){
			$this->db->select('*')
							 ->from('orders')
							 ->where('orders.consumer_id', $userid);
		 $query = $this->db->get();
	   $result = $query->result();

		 return $result;
		}

		public function getOrderProductsByID($id){
			$this->db->select('*')
							 ->from('orders_store_products')
							 ->join('orders', 'orders_store_products.order_id = orders.order_id')
							 ->join('store_products_subcategory', 'orders_store_products.storeprodsub_id = store_products_subcategory.storeprodsub_id')
							 ->join('store_products', 'store_products_subcategory.storeprod_id = store_products.storeprod_id')
							 ->join('products', 'store_products.prod_id = products.prod_id')
							 ->where('orders_store_products.order_id',$id);
			$query = $this->db->get();
			$result = $query->result();

			echo json_encode($result);
		}
 }
