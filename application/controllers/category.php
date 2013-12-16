<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        $this->load->helper(array('url', 'form'));
    }

    public function index() {
        $this->load->model('Category_model');
        $data['category'] = "";
        $data['view_category'] = $this->Category_model->get_all();
        $data['page'] = 'category/view';
        $this->load->view('layout', $data);
    }

    public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Category', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($_POST AND $this->form_validation->run() == TRUE) {
            $params['nama'] = $this->input->post('nama');
            $this->Category_model->add($params);
            redirect('category');
        } else {
            $data['page'] = 'category/add';
            $this->load->view('layout', $data);
        }
    }

    public function delete($id) {
        $this->Category_model->delete($id);
        redirect('categori');
    }

    public function update($id) {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nama', 'Nama Category', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($_POST AND $this->form_validation->run() == TRUE) {
            $params['nama'] = $this->input->post('nama');
            $this->Category_model->update($this->input->post('id'), $params);
            redirect('category');
        } else {
            $data['kategori'] = $this->Category_model->get_id($id);
            $data['page'] = 'category/edit';
            $this->load->view('layout', $data);
        }
    }

}
