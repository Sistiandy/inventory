<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    function add($data = array()) {
        $param = array(
            'nama' => $data['nama']
        );

        $this->db->insert('kategori', $param);
        $id = $this->db->insert_id();

        $status = $this->db->affected_rows();
        return ($status == 0) ? FALSE : $id;
    }

    function update($id, $params) {

        $this->db->where('id', $id);
        $this->db->update('kategori', $params);
    }

    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('kategori');
    }

    public function get_all() {
        $sql = $this->db->get('kategori');
        if ($sql->num_rows() > 0) {
            foreach ($sql->result() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return null;
        }
    }

    public function get_id($id) {
        $this->db->select('id, nama');
        $this->db->where('id', $id);
        $res = $this->db->get('kategori');
        return $res->row_array();
    }

}
