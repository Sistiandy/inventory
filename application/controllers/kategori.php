<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->helper(array('url', 'form'));
    }

    public function index() {
        $data['page'] = 'kategori/tampil';
        $this->load->view('layout', $data);
    }

    public function view() {
        $data['page'] = 'kategori/tampil';
        $this->load->view('layout', $data);
    }

    public function create() {
        if ($this->input->post('submit')) {
            $this->Kategori_model->add();
            redirect('kategori');
        }
        $data['page'] = 'kategori/tambah';
        $this->load->view('layout', $data);
    }

}
