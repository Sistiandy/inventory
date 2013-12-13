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
        $this->load->model('Barang_model');
        $data['barang'] = "";
        $data['view_barang'] = $this->Barang_model->get_all();
        $data['page'] = 'barang/view';
        $this->load->view('layout', $data);
    }

    public function create() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');
        $this->form_validation->set_rules('spesifikasi', 'Spesifikasi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

        if ($_POST AND $this->form_validation->run() == TRUE) {
            $params['nama'] = $this->input->post('nama');
            $params['spesifikasi'] = $this->input->post('spesifikasi');
            $params['harga'] = $this->input->post('harga');
            $params['kategori'] = $this->input->post('kategori');
            $this->Barang_model->add($params);
            redirect('kategori');
        } else {
            $data['page'] = 'barang/add';
            $this->load->view('layout', $data);
        }
    }
    
    public function delete($id)
    {
        $this->Barang_model->delete($id);
        redirect('barang');
    }
    
    public function update($id)
    {
        $data['pegawai'] = $this->Barang_model->get_id($id);
        $data['page'] = 'barang/edit';
        $this->load->view('layout', $data);
    }
}
