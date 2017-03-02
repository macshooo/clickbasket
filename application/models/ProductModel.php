<?php
	class ProductModel extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		public function countProducts($subcatid){
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
			return $query->num_rows();
		}

		public function countRatings($prodid){
			$query = $this->db->select('*')
												->from('store_products_rating')
				 							  ->join('store_products_subcategory', 'store_products_subcategory.storeprodsub_id = store_products_rating.storeprodsub_id')
				 							  ->join('store_products', 'store_products.storeprod_id = store_products_subcategory.storeprod_id')
				 							  ->join('products', 'products.prod_id = store_products.prod_id')
				 							  ->where('store_products_subcategory.store_id', $this->session->userdata('market'))
												->where('store_products.prod_id', $prodid)
												->get();

			return $query->num_rows();
		}

		public function getSubCategoryByID($subcatid){
      $this->db->select('*')
      				 ->from('subcategory')
							 ->join('category','subcategory.category_id = category.category_id')
							 ->where('subcategory_id',$subcatid);
      $query = $this->db->get();
      $result = $query->row();

      return $result;
    }

		public function getProductsbySubcategory($subcatid, $limit){
			$offset = $this->uri->segment(3);

			$this->db->limit($limit, $offset)
							 ->select('*')
							 ->from('store_products')
							 ->join('products', 'products.prod_id = store_products.prod_id', 'left')
							 ->join('store_products_subcategory', 'store_products_subcategory.storeprod_id = store_products.storeprod_id', 'left')
							 ->join('store', 'store.store_id = store_products_subcategory.store_id', 'left')
							 ->join('store_products_inventory', 'store_products_inventory.storeprod_id = store_products.storeprod_id', 'left')
							 ->join('store_products_rating', 'store_products_rating.storeprodsub_id = store_products_subcategory.storeprodsub_id', 'left')
							 ->join('store_products_discounts', 'store_products_discounts.storeprod_id = store_products.storeprod_id', 'left')
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
			$query = $this->db->select('*, SUM(trans_quantity) as BALANCE')
		 					 					->from('store_products')
										   	->join('products', 'products.prod_id = store_products.prod_id')
										   	->join('store_products_subcategory', 'store_products_subcategory.storeprod_id = store_products.storeprod_id')
										   	->join('store', 'store.store_id = store_products_subcategory.store_id')
										   	->join('store_products_inventory', 'store_products_inventory.storeprod_id = store_products.storeprod_id')
										   	->join('subcategory', 'subcategory.subcategory_id = store_products_subcategory.subcategory_id')
										   	->join('category', 'category.category_id = subcategory.category_id')
										   	->where('store_products.storeprod_deleted', 'false')
										   	->where('store_products_subcategory.store_id', $this->session->userdata('market'))
										   	->where('store_products.prod_id', $prodid)
												->get();

			if($query->num_rows() > 0){
					return $query->row();
			}else{
					return false;
			}
		}

		public function getDiscounts($prodid){
			$query = $this->db->select('*')
												->from('store_products_discounts')
												->join('store_products', 'store_products.storeprod_id = store_products_discounts.storeprod_id')
												->join('products', 'products.prod_id = store_products.prod_id')
												->join('store_products_subcategory', 'store_products_subcategory.storeprod_id = store_products.storeprod_id')
												->where('store_products.storeprod_deleted', 'false')
										   	->where('store_products_subcategory.store_id', $this->session->userdata('market'))
										   	->where('store_products.prod_id', $prodid)
												->get();

			if($query->num_rows() > 0){
				return $query->row();
			}else{
				return false;
			}
		}

		public function getMarketProducts($searchData){
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
							 ->like('products.prod_name', $searchData);
			$query = $this->db->get();
			$result = $query->result();

			return $result;
		}

 		public function getProductToCart($data){
      $this->db->select('*')
      				 ->from('store_products')
							 ->join('products', 'store_products.prod_id = products.prod_id')
							 ->join('store_products_subcategory', 'store_products.storeprod_id = store_products_subcategory.storeprod_id')
							 ->join('store', 'store_products_subcategory.store_id = store.store_id')
							 ->where('store_products_subcategory.store_id', $this->session->userdata('market'))
      				 ->where('store_products.prod_id',$data['id']);
      $query = $this->db->get();
      $prod = $query->row();

			$market = $prod->store_name;
			$marketid = $prod->store_id;
			$image = $prod->storeprod_image;
			$id = $prod->prod_id;
			$name = $prod->prod_name;
			$price = $data['price'];
			$qty = $data['qty'];

			$products = compact('market',
													'marketid',
													'image',
													'id',
													'name',
													'price',
													'qty');
			if($products!=0){
				$this->session->set_flashdata('success',true);
				return $products;
			}else{
				return false;
			}
		}

		public function checkCoupon($coupon){
				$query = $this->db->select('*')
													->from('coupons')
													->join('store', 'store.store_id = coupons.store_id', 'left')
													->where('coupons.coupons_code', $coupon)
													->get();

				if ($query->num_rows() > 0){
					return $query->row();
				}else{
					return false;
				}
		}

		public function checkUserCoupon($id){
			$query = $this->db->select('*')
												->from('store_coupons_discounts')
												->where('coupons_id', $id)
												->where('consumer_id', $this->session->userdata('id'))
												->get();

			if ($query->num_rows() > 0){
				return 'couponexist';
			}else{
				return 'success';
			}
		}

		public function getCoupon(){
			$query = $this->db->select('*')
												->from('coupons')
												->join('store_coupons_discounts', 'store_coupons_discounts.coupons_id = coupons.coupons_id')
												->where('consumer_id', $this->session->userdata('id'))
												->where('coupons_use', 'false')
												->get();
			if ($query->num_rows() > 0){
				return $query->result();
			}else{
				return false;
			}
		}

		public function activateCoupon($data){
			$this->db->insert('store_coupons_discounts', $data);
		}

		public function useCoupon($couponid){
			$coupon = array('coupons_use' => 'true');
			
			$this->db->where('coupons_id', $couponid)
							 ->where('consumer_id', $this->session->userdata('id'))
							 ->update('store_coupons_discounts', $coupon);
		}

		public function placeOrder($data){
			$this->db->insert('orders', $data);
		}

		public function cancelOrder($id,$data){
			$query = $this->db->select('*')
							 					->from('store_products')
							 					->join('store_products_inventory', 'store_products_inventory.storeprod_id = store_products.storeprod_id')
							 					->join('store_products_subcategory', 'store_products_subcategory.storeprod_id = store_products.storeprod_id')
							 					->join('orders_store_products', 'orders_store_products.storeprodsub_id = store_products_subcategory.storeprodsub_id')
							 					->join('orders', 'orders.order_id = orders_store_products.order_id')
												->where('orders_store_products.order_id', $id)
												->group_by('orders_store_products.storeprodsub_id')
												->order_by('orders.date_created', 'DESC')
												->get();

				$inv = $query->result();

				for($i = 0; $i < $query->num_rows(); $i++){
					$restore = array(
						'inventorytrans_type'=> 'cancelled',
						'trans_quantity'=> $inv[$i]->order_qty,
						'storeprod_id'=> $inv[$i]->storeprod_id,
						'inventory_balance'=> $inv[$i]->inventory_balance + $inv[$i]->order_qty
					);
					$this->db->insert('store_products_inventory', $restore);
				}

			$this->db->where('order_id',$id);
			$this->db->update('orders', $data);
		}

		public function placeProductOrder($globalcart){
			$query = $this->db->query('SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1');
			$row = $query->row();

			if(isset($row)){
				foreach($globalcart as $cart){
					$query2 = $this->db->select('*')
														 ->from('store_products_subcategory')
														 ->join('store_products', 'store_products.storeprod_id = store_products_subcategory.storeprod_id')
														 ->join('store_products_inventory', 'store_products_inventory.storeprod_id = store_products.storeprod_id')
														 ->where('store_products_subcategory.storeprod_id', $cart['id'])
														 ->where('store_products_subcategory.store_id', $cart['marketid'])
													 	 ->get();
					$row2 = $query2->row();
					$data = array(
						'order_id' => $row->order_id,
						'storeprodsub_id' => $row2->storeprodsub_id,
						'order_qty' => $cart['qty'],
						'product_price'=> $cart['price'],
						'product_total' => $cart['qty'] * $cart['price']
					);
					$this->db->insert('orders_store_products', $data);

					$query3 = $this->db->select('SUM(trans_quantity) as BALANCE')
														 ->from('store_products_inventory')
														 ->join('store_products', 'store_products.storeprod_id = store_products_inventory.storeprod_id')
														 ->join('store_products_subcategory', 'store_products_subcategory.storeprod_id = store_products.storeprod_id')
														 ->where('store_products_subcategory.storeprod_id', $cart['id'])
														 ->where('store_products_subcategory.store_id', $cart['marketid'])
														 ->get();
					$result = $query3->row();
					$sum = $result->BALANCE;
					$inventory = array(
						'inventorytrans_type'=>'order',
						'trans_quantity'=> -($cart['qty']),
						'inventory_balance'=> $sum - $cart['qty'],
						'storeprod_id' => $cart['id']
					);
					$this->db->insert('store_products_inventory', $inventory);
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
							 ->join('store', 'store.store_id = store_products_subcategory.store_id')
							 ->join('store_products', 'store_products_subcategory.storeprod_id = store_products.storeprod_id')
							 ->join('products', 'store_products.prod_id = products.prod_id')
							 ->where('orders_store_products.order_id',$id);
			$query = $this->db->get();
			$result = $query->result();

			echo json_encode($result);

		}

		public function getOrderDetail($userid, $orderid){
			$this->db->select('*')
							 ->from('orders')
							 ->join('consumers','consumers.consumer_id = orders.consumer_id')
							 ->join('store_coupons_discounts', 'store_coupons_discounts.consumer_id = consumers.consumer_id', 'left')
							 ->join('coupons', 'coupons.coupons_id = store_coupons_discounts.coupons_id', 'left')
							 ->where('orders.consumer_id', $userid)
							 ->where('orders.order_id', $orderid);
		 $query = $this->db->get();
	   $result = $query->row();

		 return $result;
		}

		public function getOrderProductDetail($userid, $orderid){
			$this->db->select('*')
							 ->from('orders_store_products')
							 ->join('orders', 'orders_store_products.order_id = orders.order_id')
							 ->join('consumers', 'consumers.consumer_id = orders.consumer_id')
							 ->join('store_products_subcategory', 'orders_store_products.storeprodsub_id = store_products_subcategory.storeprodsub_id')
							 ->join('store', 'store.store_id = store_products_subcategory.store_id')
							 ->join('store_products', 'store_products_subcategory.storeprod_id = store_products.storeprod_id')
							 ->join('products', 'store_products.prod_id = products.prod_id')
							 ->where('orders_store_products.order_id',$orderid)
							 ->where('orders.consumer_id', $userid);
			$query = $this->db->get();
			$result = $query->result();

			return $result;
		}

		public function productRating($data,$prodid){
				 $this->db->select('*')
									->from('store_products_rating')
					 				->join('store_products_subcategory', 'store_products_subcategory.storeprodsub_id = store_products_rating.storeprodsub_id','left')
									->join('store_products', 'store_products.storeprod_id = store_products_subcategory.storeprod_id','left')
									->join('products', 'products.prod_id = store_products.prod_id','left')
									->where('store_products_subcategory.store_id', $this->session->userdata('market'))
									->where('store_products_subcategory.storeprodsub_id', $prodid)
									->where('consumer_id',$this->session->userdata('id'));
				$result = $this->db->get();

				if($result->num_rows() > 0){
						$this->db->where('consumer_id',$this->session->userdata('id'))
										 ->where('storeprodsub_id', $prodid);
						$this->db->update('store_products_rating',$data);
				}else{
						$this->db->insert('store_products_rating',$data);
				}
		}

		public function getProductRating($prodid){
			$this->db->select('*, avg(storeprod_rating) as Ratings')
						   ->from('store_products_rating')
							 ->join('store_products_subcategory', 'store_products_subcategory.storeprodsub_id = store_products_rating.storeprodsub_id')
							 ->join('store_products', 'store_products.storeprod_id = store_products_subcategory.storeprod_id')
							 ->join('products', 'products.prod_id = store_products.prod_id')
							 ->where('store_products_subcategory.store_id', $this->session->userdata('market'))
							 ->where('store_products.prod_id', $prodid);

				$query = $this->db->get();
				return $query->row();
		}

		public function prodByRating(){
			$this->db->select('*')
						   ->from('store_products_rating')
							 ->join('store_products_subcategory', 'store_products_subcategory.storeprodsub_id = store_products_rating.storeprodsub_id')
							 ->join('store_products', 'store_products.storeprod_id = store_products_subcategory.storeprod_id')
							 ->join('products', 'products.prod_id = store_products.prod_id')
							 ->where('store_products_subcategory.store_id', $this->session->userdata('market'))
							 ->group_by('prod_name')
							 ->select_avg('storeprod_rating')
							 ->order_by('storeprod_rating', 'desc');

				$query = $this->db->get();
				return $query->result();
		}
 }
