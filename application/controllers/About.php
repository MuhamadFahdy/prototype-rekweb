<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller 
{

		public function index(){
		$data['title'] = 'About Page';
        $this->load->view('templates/header',$data);
        $this->load->view('about/about', $data);
        $this->load->view('templates/footer');
		}
		
}


?>