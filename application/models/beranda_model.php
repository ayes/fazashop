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
class Beranda_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function getCategory() 
    {
        $this->db->order_by('category', 'asc');
        return $this->db->get('tbproduct_category');
    }
   function get_name_category() {
            $this->db->where('id', $this->uri->segment(4));
            return $this->db->get('tbproduct_category');
        }
   function getCountCategoryProduct($id) {
      $query = $this->db->query('select count(product_category_id) as cat from tbproducts where product_category_id ='.$id);
      foreach ($query->result() as $row) {
      return $row->cat;
      }
    }
     function getRandomProductsLimit() {
       // $results = $this->db->order_by('id','random')->limit(18)->get('tbproducts')->result();
         $this->db->order_by('id','random');
         $this->db->limit($this->_home_product_limit());
         return $this->db->get('tbproducts')->result();
        //return $results;   
    }
    private function _home_product_limit() {
      $this->db->where('id', 1);
      $query = $this->db->get('tbsetting');
      foreach ($query->result() as $row) 
      {
        return $row->home_product_limit;
      }
    }
    function getProductCategory() {
        $this->db->where('product_category_id', $this->uri->segment(4));
            return $this->db->get('tbproducts')->result();
        }
        function getProductDetail() {
        $this->db->where('id', $this->uri->segment(4));
            return $this->db->get('tbproducts')->result();
        }
        function get_how_order() {
            $this->db->where('id', 1);
            return $this->db->get('tbhow_order');
        }
        function get_search_product() 
        {
            $keyword = $this->input->post('keyword');
            $this->db->like('name',$keyword);
            return $this->db->get('tbproducts');
        }
        function get_ym_live_support() 
        {
            $this->db->order_by('ym_support', 'asc');
            return $this->db->get('tblive_support');
        }
        function get_shop_contact() 
        {
            $this->db->where('id', 1);
            return $this->db->get('tbshop_profile');
        }
}

?>
