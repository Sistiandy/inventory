<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->helper(array('url', 'form'));
    }

    public function index() {
        $this->load->model('Product_model');
        $data['product'] = "";
        $data['view_product'] = $this->Product_model->get_all();
        $data['page'] = 'product/view';
        $this->load->view('layout', $data);
    }

    public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Product', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($_POST AND $this->form_validation->run() == TRUE) {
            $params['nama'] = $this->input->post('nama');
            $params['spesifikasi'] = $this->input->post('spesifikasi');
            $params['harga'] = $this->input->post('harga');
            $params['kategori'] = $this->input->post('kategori');
            $this->Product_model->add($params);
            redirect('product');
        } else {
            $data['page'] = 'product/add';
            $this->load->view('layout', $data);
        }
    }

    public function delete($id) {
        $this->Product_model->delete($id);
        redirect('product');
    }

    public function update($id) {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama Product', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($_POST AND $this->form_validation->run() == TRUE) {
            $params = array(
                'nama' => $this->input->post('nama'),
                'spesifikasi' => $this->input->post('spesifikasi'),
                'harga' => $this->input->post('harga'),
                'kategori' => $this->input->post('kategori')
            );
            $this->Product_model->update($this->input->post('id'), $params);
            redirect('product');
        } else {
            $data['barang'] = $this->Product_model->get_id($id);
            $data['page'] = 'product/edit';
            $this->load->view('layout', $data);
        }
    }

}
