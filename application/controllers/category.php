<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {
        function __construct() {
        parent::__construct();
        $this->load->model('beranda_model');
        }
    
	public function index()
	{
                $data['getCategory']= $this->beranda_model->getCategory();
                $data['getRandomProductsLimit']= $this->beranda_model->getProductCategory();
		$this->load->view('front/beranda_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */