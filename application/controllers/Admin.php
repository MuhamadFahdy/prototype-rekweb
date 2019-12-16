<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
   public function index(){
		$data['user'] = $this->db->get('user')->row_array();
		$this->load->model('Barang_Model');
		$data['barang'] = $this->Barang_Model->getAllBarang();
		if( $this->input->post('keyword')) {
        $data['barang'] = $this->Barang_Model->cariDataBarang();
          }
		$data['title'] = 'Login Page';
        $this->load->view('adminTemplate/header',$data);
        $this->load->view('admin/index', $data);
        $this->load->view('adminTemplate/footer');
		}


	public function tambah(){	
		$this->load->library('upload');
		$data['user'] = $this->db->get('user')->row_array();
		$data['title'] = 'Form Ubah Data Barang';
		$this->load->view('adminTemplate/header', $data);
		return $this->load->view('admin/tambah');
		$this->load->view('adminTemplate/footer');
	}

	public function tambahkan(){
		$this->load->library('upload');

		$this->form_validation->set_rules('nama_barang', 'nama','required');
		$this->form_validation->set_rules('deskripsi_barang', 'deskripsi','required');
		$this->form_validation->set_rules('harga_barang', 'harga','required');

		if ($this->form_validation->run() == FALSE) {
			$data['user'] = $this->db->get('user')->row_array();
			$data['title'] = 'Form Ubah Data Barang';
			$this->load->view('adminTemplate/header', $data);
			return $this->load->view('admin/tambah');
			$this->load->view('adminTemplate/footer');
		} else {

		$nama_barang = $this->input->post('nama_barang');
		$deskripsi_barang = $this->input->post('deskripsi_barang');
		$harga_barang = $this->input->post('harga_barang');
		$brand_barang = $this->input->post('brand_barang');
		$category_barang = $this->input->post('category_barang');

		$config['upload_path'] = './assets/img/';
	    $config['allowed_types'] = 'jpg|png|jpeg|gif';
	    $config['max_size'] = '2048';  //2MB max
	    $config['max_width'] = '4480'; // pixel
	    $config['max_height'] = '4480'; // pixel
	    $config['file_name'] = $_FILES['img']['name'];

	    $this->upload->initialize($config);

      if (!empty($_FILES['img']['name'])) {
        if ( $this->upload->do_upload('img') ) {
            $foto = $this->upload->data();
            $data = ([
              'nama_barang'  => $nama_barang,
              'deskripsi_barang'  => $deskripsi_barang,
              'harga_barang'  => $harga_barang,
              'brand_barang'  => $brand_barang,
              'category_barang'  => $category_barang,
              'img_barang'  => $foto['file_name'],
          ]);
            //$this->Barang_Model->tambahBarang($data);
			$this->db->insert('penjualan',$data);
            redirect('admin');
        	}
    	}
    }
	}

	public function ubah($id_barang) {	
		$this->load->model('Barang_Model');
		$data['user'] = $this->db->get('user')->row_array();
		$this->load->library('upload');

		$data['barang'] = $this->Barang_Model->getBarangById($id_barang);
		$data['title'] = 'Form Ubah Data Barang';
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
		$this->form_validation->set_rules('deskripsi_barang', 'deskripsi_barang', 'required');
		$this->form_validation->set_rules('harga_barang', 'harga_barang', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('adminTemplate/header', $data);
			$this->load->view('admin/ubah');
			$this->load->view('adminTemplate/footer');
		} else {
		$nama_barang = $this->input->post('nama_barang');
		$deskripsi_barang = $this->input->post('deskripsi_barang');
		$harga_barang = $this->input->post('harga_barang');
		$id_barang = $this->input->post('id_barang');
		
		//$path = './assets/img/';

		$config['upload_path'] = './assets/img/';
	    $config['allowed_types'] = 'jpg|png|jpeg|gif';
	    $config['max_size'] = '2048';  //2MB max
	    $config['max_width'] = '4480'; // pixel
	    $config['max_height'] = '4480'; // pixel
	    $config['file_name'] = $_FILES['img']['name'];

	    $this->upload->initialize($config);

      	$data = ([
              'nama_barang'  => $nama_barang,
              'deskripsi_barang'  => $deskripsi_barang,
              'harga_barang'  => $harga_barang,
           ]);
           	$this->db->where('id_barang', $id_barang);
			$this->db->update('penjualan', $data);
			
      if (!empty($_FILES['img']['name'])) {		
        if ($this->upload->do_upload('img') ) {
            $foto = $this->upload->data();
            $data = ([
              'img_barang'  => $foto['file_name'],
           ]);	
             // @unlink($path.$this->input->post('filelama'));
            //$this->Barang_Model->tambahBarang($data);
			$this->db->where('id_barang', $id_barang);
			$this->db->update('penjualan', $data);
            redirect('admin');
        	}
            // redirect('admin');
            //tambahin alert gagal ubah
    	 	}
            redirect('admin');
            //tambahin alert gagal ubah
		}
	}

	public function hapus($id_barang) {      
	  $this->db->where('id_barang',$id_barang);
      $this->db->delete('penjualan');
      redirect('admin');
    }





}