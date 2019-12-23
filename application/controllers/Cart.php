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
        $this->load->view('templates/user_header',$data);
        $this->load->view('cart/index', $data);
        $this->load->view('templates/user_footer');
	}

	public function add_to_cart($id_barang)
	{
		$barang = $this->Barang_Model->find($id_barang);
		$data = array (
		'id' => $barang->id_barang, 
		'name' => $barang->nama_barang, 
		'price' => $barang->harga_barang, 
		'qty' => 1,
		);
		$this->cart->insert($data);
		redirect('user');
	}

	public function detail_cart()
	{
		$data['title'] = 'Cart Page';
		$this->load->view('templates/user_header',$data);
		$this->load->view('cart/index');
		$this->load->view('templates/user_footer');
	}

	public function delete_cart($id_barang)
    {
		$this->cart->remove($id_barang);
		redirect('cart');
	}

    public function pay()
    {
    	$data['title'] = 'Pay Page';
    	// $this->load->view('templates/header',$data);
		// $this->load->view('cart/pay');
		// $this->load->view('templates/footer');

		$this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phonenum', 'Phone Number', 'required|numeric');

        if( $this->form_validation->run() == FALSE ) {
            $this->load->view('templates/user_header', $data);
            $this->load->view('cart/pay');
            $this->load->view('templates/user_footer');
        } else {
			$this->Barang_Model->addDataPembeli();
            $this->session->set_flashdata('flash', 'Made');
            redirect('user/index');
		}
		
		
    }

    // public function order_process()
    // {
    // 	$this->cart->destroy();
    // 	$this->load->view('templates/header');
	// 	$this->load->view('cart/process');
	// 	$this->load->view('templates/footer');
	// }
	

		
}