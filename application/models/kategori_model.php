<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function add() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $data = array(
            'id' => $id,
            'nama' => $nama,
        );
        $this->db->insert('kategory', $data);
        redirect('kategori/view');
    }

}
