<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang_model extends CI_Model {
	private $table_name; 
	
	public function __construct()
	{
		parent::__construct();
		$this->table_name = 'barang'; 
	}

	function create_data()
	{
            $data = array(
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'spesifikasi' => $this->input->post('spesifikasi'),
                'harga' => $this->input->post('harga'),
                'kategori' => $this->input->post('kategori'),
                );
	  	$this->db->insert($this->table_name, $data);
                redirect('barang/view');
	}
	
	
	
	function update($id, $barang) {
            
            $this->db->where('id', $id);
            $this->db->update($this->table_name, $barang);
            }
            
	function delete_data($kode) 
	{
	  	$this->db->where('id', $kode);
	  	$this->db->delete($this->table_name);
		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}	  	
	}
	function get_data_all() 
	{
		$sql = $this->db->get($this->table_name);
	  	if($sql->num_rows() > 0){			
			foreach($sql->result() as $row){
				$data[] = $row;
			}			
			return $data;
		} else {
			return null;
		}
	}
	function get_data($id)
	{
	$this->db->select('id, nama,spesifikasi,harga,kategori');
        $this->db->where('id', $id);
        $res = $this->db->get($this->table_name);
		return $res->row_array();
	}	
	
}