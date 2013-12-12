<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->helper(array('url', 'form'));
    }

    public function index() {
        $data['page'] = 'barang/index';
        $data['isi'] = 'nav_kiri';
        $this->load->view('layout', $data);
    }

    public function view() {
        $data['page'] = 'barang/tampil';
        $data['isi'] = 'nav_kiri';
        $this->load->view('layout', $data);
    }

    public function create() {
        if ($this->input->post('submit')) {
            $this->Barang_model->create_data();
            redirect('pegawai');
        }
        $data['page'] = 'barang/tambah';
        $data['isi'] = 'nav_kiri';
        $this->load->view('layout', $data);
    }

}
