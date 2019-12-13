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
		"brand_barang" => $this->input->post('brand_barang', true),
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
		"brand_barang" => $this->input->post('brand_barang', true),
		"img_barang" => $this->input->post('img_barang', true)
		];
		$this->db->insert('penjualan', $data);
	}
  
<<<<<<< HEAD
  // Fungsi untuk menyimpan data ke database


	//menambahkan fitur search
	public function cariDataBarang()
		{
			$keyword = $this->input->post('keyword',true);
			$this->db->like('nama_barang', $keyword);
			$this->db->or_like('deskripsi_barang',$keyword);
			$this->db->or_like('harga_barang',$keyword);
			return $this->db->get('penjualan')->result_array();
		}	
=======
	public function getBarangID($id_barang)
	{
		return $this->db->get_where('penjualan', ['id_barang' => $id_barang])->row_array();
	}
  
>>>>>>> 43d545fde43f9bf007db603027e8c0b5c3ab48f7
}