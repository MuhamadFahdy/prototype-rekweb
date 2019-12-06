<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
   public function index(){
		$data['user'] = $this->db->get('user')->row_array();
		$this->load->model('Barang_Model');
		$data['barang'] = $this->Barang_Model->getAllBarang();
		$data['title'] = 'Login Page';
        $this->load->view('adminTemplate/header',$data);
        $this->load->view('admin/index', $data);
        $this->load->view('adminTemplate/footer');
		}


	public function tambah(){	
		$this->load->model('Barang_Model');
		$data['user'] = $this->db->get('user')->row_array();

		$data['title'] = 'Form Tambah Data Mahasiswa';
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
		$this->form_validation->set_rules('deskripsi_barang', 'deskripsi_barang', 'required');
		$this->form_validation->set_rules('harga_barang', 'harga_barang', 'required');
		$this->form_validation->set_rules('img_barang', 'img_barang', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('adminTemplate/header', $data);
			$this->load->view('admin/tambah');
			$this->load->view('adminTemplate/footer');
		} else {
			$this->Barang_Model->do_upload();
			$this->Barang_Model->tambahBarang();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin');
		}   

	}

	public function ubah($id){	
		$this->load->model('Barang_Model');
		$data['user'] = $this->db->get('user')->row_array();

		$data['barang'] = $this->Barang_Model->getBarangById($id);
		$data['title'] = 'Form Ubah Data Barang';
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
		$this->form_validation->set_rules('deskripsi_barang', 'deskripsi_barang', 'required');
		$this->form_validation->set_rules('harga_barang', 'harga_barang', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('adminTemplate/header', $data);
			$this->load->view('admin/ubah');
			$this->load->view('adminTemplate/footer');
		} else {
			$this->Barang_Model->ubahBarang();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('admin');
		}   
		
	}

}