<?php 

class Kategori_Model extends CI_Model{
	
	public function data_laptop(){
		return $this->db->get_where('penjualan',array('category_barang' => 'laptop'));
	}
}