<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function add($data = array()) {
        $param = array(
            'nama' => $data['nama'],
            'spesifikasi' => $data['spesifikasi'],
            'harga' => $data['harga'],
            'kategori' => $data['kategori'],
        );
        $this->db->insert('barang', $param);
    }

    function update($id, $barang) {

        $this->db->where('id', $id);
        $this->db->update('barang', $barang);
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('barang');
    }

    function get_all() {
        $sql = $this->db->select('id, nama, spesifikasi, harga, kategori');
        $sql = $this->db->from('barang');
        $sql = $query = $this->db->get();

        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    function get_id($id) {
        $this->db->select('id, nama,spesifikasi,harga,kategori');
        $this->db->where('id', $id);
        $res = $this->db->get('barang');
        return $res->row_array();
    }

}
