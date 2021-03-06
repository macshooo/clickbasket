<?php
  class MarketModel extends CI_Model{
    function __construct(){
      parent::__construct();
    }

    public function getMarket(){
      $this->db->select('*');
      $this->db->from('store');
      $query = $this->db->get();

      if($query->num_rows() > 0){
        $result = $query->result();
        return $result;
      }
    }


     public function getMarketByID(){
          $this->db->select('*');
          $this->db->from('store');
          $this->db->where('store_id',$this->session->userdata('market'));
           $query = $this->db->get();

           if($query->num_rows() > 0){
            return $query->row();
           }
        }

    public function getCategory($marketid){
      $this->db->select('*')
               ->from('store_category')
               ->join('store', 'store_category.store_id = store.store_id')
               ->join('category', 'store_category.category_id = category.category_id')
               ->where('store.store_id', $marketid)
               ->where('category_deleted', 'false');
      $query = $this->db->get();
      $result = $query->result();

      return $result;
    }

    public function getSubCategory(){
      $this->db->select('*')
               ->from('subcategory')
               ->where('subcategory_deleted', 'false');
      $query = $this->db->get();
      $result = $query->result();

      return $result;
    }

    // public function getInfobyID($marketid){
    //   $query = $this->db->select('*')
    //             ->from('store_products')
    //             ->join('products', 'store_products.prod_id = products.prod_id')
    //             ->join('store_products_subcategory', 'store_products_subcategory.storeprod_id = store_products.storeprod_id')
    //             ->join('subcategory', 'store_products_subcategory.subcategory_id = subcategory.subcategory_id')
    //             ->join('category', 'subcategory.category_id = category.category_id')
    //             ->join('store', 'store_products_subcategory.store_id = store.store_id')
    //             ->where('store_products_subcategory.store_id', $marketid)
    //             ->group_by('category.category_name')
    //             ->get();
    //   $result = $query->result();
    //
    //   return $result;
    // }
  }
?>
