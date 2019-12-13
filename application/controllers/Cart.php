<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller 
{

		public function index(){
		$this->load->model('Barang_Model');
		$data['barang'] = $this->Barang_Model->getAllBarang();

		
		$data['title'] = 'Cart Page';
        $this->load->view('templates/header',$data);
        $this->load->view('cart/index', $data);
        $this->load->view('templates/footer');
		}
		
}