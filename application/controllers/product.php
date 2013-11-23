<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
        function __construct() {
        parent::__construct();
        $this->load->model('beranda_model');
        }
    
	public function detail()
	{
                $data['getCategory']= $this->beranda_model->getCategory();
                $data['getProductDetail']= $this->beranda_model->getProductDetail();
		$this->load->view('front/product_detail_view', $data);
	}
        public function buy()
	{
                $data['getCategory']= $this->beranda_model->getCategory();
                $data['getProductDetail']= $this->beranda_model->getProductDetail();
                $data['get_how_order']= $this->beranda_model->get_how_order();
		$this->load->view('front/buy_view', $data);
	}
        function search() 
        {
            $data['getCategory']= $this->beranda_model->getCategory();
            $data['getRandomProductsLimit'] = $this->beranda_model->get_search_product();
            $this->load->view('front/beranda_view', $data);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */