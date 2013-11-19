<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_category_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Tools_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
   function getShopName() {
        $this->db->where('id', 1); 
            $q = $this->db->get('tbshop_profile');
            foreach ($q->result() as $row) {
            return $row->name;
      }
        }
        function getBanners() {
        
            return $this->db->get('tbbanners');
 
        }
   function getCountCategoryProduct($id) {
      $query = $this->db->query('select count(product_category_id) as cat from tbproducts where product_category_id ='.$id);
      foreach ($query->result() as $row) {
      return $row->cat;
      }
    }
     function getRandomProductsLimit() {
        $results = $this->db->order_by('id','random')->limit(20)->get('tbproducts')->result(); 
        return $results;   
    }
}

?>
