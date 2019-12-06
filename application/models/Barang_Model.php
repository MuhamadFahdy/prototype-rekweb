<?php 

class Barang_Model extends CI_Model {
	public function getAllBarang(){
		return $this->db->get('penjualan')->result_array();
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


   public function do_upload(){
    $config['upload_path'] = '../assets/img';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
  
    $this->load->library('upload', $config); // Load konfigurasi uploadnya

	  if($this->upload->do_upload('img_barang')){ // Lakukan upload dan Cek jika proses upload berhasil
	      // Jika berhasil :
	    	 return $this->upload->data();
	    }else{
	      // Jika gagal :
	      return "default.jpg";
	    }
 	 }
  
  // Fungsi untuk menyimpan data ke database
	
}