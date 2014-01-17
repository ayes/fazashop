<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {
        function __construct() {
        parent::__construct();
        $this->load->model('beranda_model');
        }
    
	public function index()
	{
                $data['getCategory']= $this->beranda_model->getCategory();
                $data['getRandomProductsLimit']= $this->beranda_model->getRandomProductsLimit();
                $data['get_ym_live_support']= $this->beranda_model->get_ym_live_support();
                $data['get_shop_contact']= $this->beranda_model->get_shop_contact();
                $data['js'] = array();
		$this->load->view('front/beranda_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */