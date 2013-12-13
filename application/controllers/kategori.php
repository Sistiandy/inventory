<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->helper(array('url', 'form'));
    }

    public function index() {
        $this->load->model('Kategori_model');
        $data['kategori'] = "";
        $data['view_kategori'] = $this->Kategori_model->get_all();
        $data['page'] = 'kategori/view';
        $this->load->view('layout', $data);
    }

    public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Kategori', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($_POST AND $this->form_validation->run() == TRUE) {
            $params['nama'] = $this->input->post('nama');
            $this->Kategori_model->add($params);
            redirect('kategori');
        } else {
            $data['page'] = 'kategori/add';
            $this->load->view('layout', $data);
        }
    }
    
    public function delete($id)
    {
        $this->Kategori_model->delete($id);
        redirect('kategori');
    }

}
