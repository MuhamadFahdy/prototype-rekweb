<? php

class Category extends CI_Controller{
	public function laptop()
	{
		$data['laptop'] = $this->Kategori_Model->data_laptop()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('laptop', $data);
		$this->load->view('templates/footer');
	}

}