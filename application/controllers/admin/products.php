<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Products extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/products_model');
    }
    function index() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/products/products_view';
        $data['css'] = array();
        $data['js'] = array();
        $data['getProducts'] = $this->products_model->getProducts();
        $this->load->view('admin/template_view', $data);
    }
    function add() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/products/products_add';
        $data['css'] = array(
            '<link rel="stylesheet" type="text/css" href="http://tools.bsmsite.com/template/wysihtml5/bootstrap-wysihtml5.css">'
        );
        $data['js'] = array(
            '<script src="http://tools.bsmsite.com/template/wysihtml5/wysihtml5-0.3.0.js"></script>',
            '<script src="http://tools.bsmsite.com/template/wysihtml5/bootstrap3-wysihtml5.js"></script>',
            '<script>$(".textarea").wysihtml5();</script>'
        );
        $data['getProductCategory'] = $this->products_model->getProductCategory();
        $this->load->view('admin/template_view', $data);
    }
    function save() {
         
          
            $this->products_model->save();
            $this->session->set_flashdata('message', 'Product has been added..');
            redirect('admin/products');
 
    }
    function edit() {
        $data['getEdit'] = $this->products_model->editId();
        $data['getProductCategory'] = $this->products_model->getProductCategory();
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/products/products_edit';
        $data['css'] = array(
            '<link rel="stylesheet" type="text/css" href="http://tools.bsmsite.com/template/wysihtml5/bootstrap-wysihtml5.css">'
        );
        $data['js'] = array(
            '<script src="http://tools.bsmsite.com/template/wysihtml5/wysihtml5-0.3.0.js"></script>',
            '<script src="http://tools.bsmsite.com/template/wysihtml5/bootstrap3-wysihtml5.js"></script>',
            '<script>$(".textarea").wysihtml5();</script>'
        );
        $this->load->view('admin/template_view', $data);
    }
    function editFormId() {
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        //configure base path of ckeditor folder
        $this->ckeditor->basePath = base_url().'asset/ckeditor/';
        $this->ckeditor->config['toolbar'] = 'Full';
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor->config['width'] = 700;
        //configure ckfinder with ckeditor config
        $this->ckfinder->SetupCKEditor($this->ckeditor,'../../asset/ckfinder/');
        // content
        $data['getNews'] = $this->news_model->editFormId();
        $data['header'] = 'admin/includes/header_news';
        $data['content'] = 'admin/object/news/news_edit';
        $data['getNewsCategory'] = $this->news_model->getNewsCategory();
        $this->load->view('admin/template_admin_view', $data);
    }
    function update() {
         
            $this->products_model->update();
            $this->session->set_flashdata('message', 'Product has been update..');
            redirect('admin/products');

    }
    function delete() {
            $this->products_model->delete();
            $this->session->set_flashdata('message', 'Product has been delete..');
            redirect('admin/products');
    }
    function search() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/products/products_view';
        $data['getProducts'] = $this->products_model->getSearchProduct();
        $data['css'] = array();
        $data['js'] = array();
        $this->load->view('admin/template_view', $data);
    }
}

?>
