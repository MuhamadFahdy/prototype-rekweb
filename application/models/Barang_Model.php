<?php 

class Barang_Model extends CI_Model {
	public function getAllBarang(){
		return $this->db->get('penjualan')->result_array();
	}

	public function getAllPembeli(){
		return $this->db->get('pembeli')->result_array();
	}

	public function getBarangById($id_barang){
		return $this->db->get_where('penjualan', ['id_barang'=> $id_barang])->row_array();
	}

	public function ubahBarang(){
	$data = [
		"nama_barang" => $this->input->post('nama_barang', true),
		"deskripsi_barang" => $this->input->post('deskripsi_barang', true),
		"harga_barang" => $this->input->post('harga_barang', true),
		"brand_barang" => $this->input->post('brand_barang', true),
		"img_barang" => $this->input->post('img_barang', true)
		];
		$this->db->where('id_barang', $this->input->post('id_barang'));
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
  
//<<<<<<< HEAD
  // Fungsi untuk menyimpan data ke database


	//menambahkan fitur search
	public function cariDataBarang()
		{
			$keyword = $this->input->post('keyword',true);
			$this->db->like('nama_barang', $keyword);
			return $this->db->get('penjualan')->result_array();
		}

	public function order(){
			$keyword = $this->input->post('keyword',true);
			$this->db->like('name', $keyword);
			return $this->db->get('pembelian')->result_array();
	}	
//=======
	public function getBarangID($id_barang)
	{
		return $this->db->get_where('penjualan', ['id_barang' => $id_barang])->row_array();
	}

	public function find($id)
  {
    $result = $this->db->where('id_barang', $id)
                      ->limit(1)
                      ->get('penjualan');
    if($result->num_rows() > 0){
      return $result->row();
    }else{
      return array();
	}
  }

  	public function addDataPembeli()
	{
	$data = [
		"name" =>$this->input->post('name', true),
		"address" =>$this->input->post('address', true),
		"phonenum" =>$this->input->post('phonenum', true),
		"ship" =>$this->input->post('ship', true),
		"bank" =>$this->input->post('bank', true)
	];

	$this->db->insert('pembeli', $data);
    }
  
//>>>>>>> 43d545fde43f9bf007db603027e8c0b5c3ab48f7
}