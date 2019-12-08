<?php 

class Barang_Model extends CI_Model {
	public function getAllBarang(){
		return $this->db->get('penjualan')->result_array();
	}

	public function getBarangById($id){
		return $this->db->get_where('penjualan', ['id'=> $id])->row_array();
	}

	public function ubahBarang(){
	$data = [
		"nama_barang" => $this->input->post('nama_barang', true),
		"deskripsi_barang" => $this->input->post('deskripsi_barang', true),
		"harga_barang" => $this->input->post('harga_barang', true),
		"img_barang" => $this->input->post('img_barang', true)
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('penjualan', $data);
	}
  
 	public function tambahBarang(){
	$data = [
		"nama_barang" => $this->input->post('nama_barang', true),
		"deskripsi_barang" => $this->input->post('deskripsi_barang', true),
		"harga_barang" => $this->input->post('harga_barang', true),
		"img_barang" => $this->input->post('img_barang', true)
		];
		$this->db->insert('penjualan', $data);
	}
  
  // Fungsi untuk menyimpan data ke database
	
}