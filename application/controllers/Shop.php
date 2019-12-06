<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller 
{

		public function index(){
		$this->load->model('Barang_Model');
		$data['barang'] = $this->Barang_Model->getAllBarang();
		$data['title'] = 'Shop Page';
        $this->load->view('templates/header',$data);
        $this->load->view('shop/index', $data);
        $this->load->view('templates/footer');
		}
		
}