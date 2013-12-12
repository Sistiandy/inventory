<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
                $data['isi']='nav_kiri';
		$this->load->view('layout',$data);
	}
        
              
}