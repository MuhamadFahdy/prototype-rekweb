<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
	public function index(){
		$this->load->model('Barang_Model');
		$data['barang'] = $this->Barang_Model->getAllBarang();
		$data['title'] = 'Home Page';
        $this->load->view('templates/header',$data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
	}

	public function shop(){
		$this->load->model('Barang_Model');
		$data['barang'] = $this->Barang_Model->getAllBarang();
		$data['title'] = 'Shop Page';
        $this->load->view('templates/header',$data);
        $this->load->view('home/index_home', $data);
        $this->load->view('templates/footer');
	}

	public function about(){
		$this->load->model('Barang_Model');
		$data['barang'] = $this->Barang_Model->getAllBarang();
		$data['title'] = 'About Page';
        $this->load->view('templates/header',$data);
        $this->load->view('home/about', $data);
        $this->load->view('templates/footer');
	}

	public function cariBarang() {
		$this->load->model('Barang_Model', 'barang');
		$data['barang'] = $this->barang->cariDataBarang();
		$data['title'] = 'Techbrain';
		$this->load->view('templates/header',$data);
        $this->load->view('home/index_home', $data);
        $this->load->view('templates/footer');
        
	}
		
}