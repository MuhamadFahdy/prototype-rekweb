<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_Model');
	}
		
	public function index()
	{
		$data['barang'] = $this->Barang_Model->getAllBarang();
		$data['title'] = 'Cart Page';
        $this->load->view('templates/header',$data);
        $this->load->view('cart/index', $data);
        $this->load->view('templates/footer');
	}

	public function add_to_cart($id)
	{
		$barang = $this->Barang_Model->find($id);
		$data = array (
		'id' => $barang->id_barang, 
		'name' => $barang->nama_barang, 
		'price' => $barang->harga_barang, 
		'qty' => 1,
		);
		$this->cart->insert($data);
		redirect('shop');
	}

	public function detail_cart()
	{
		$data['title'] = 'Cart Page';
		$this->load->view('templates/header',$data);
		$this->load->view('cart/index');
		$this->load->view('templates/footer');
	}
		
}