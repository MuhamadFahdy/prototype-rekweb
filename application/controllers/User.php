<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->model('Barang_Model');
        $data['barang'] = $this->Barang_Model->getAllBarang();
        $data['title'] = 'User Page';
        $this->load->view('templates/user_header',$data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user_footer');
        
    }
    
    public function details($prod_id)
        {
        $this->load->model('Barang_Model');
        $data['barang'] = $this->Barang_Model->getBarangID($prod_id);
        $data['title'] = 'Details Page';
        
        $this->load->view('templates/header', $data);
        $this->load->view('shop/details', $data);
        $this->load->view('templates/footer');
    }    

    public function buy($prod_id)
        {
        $this->load->model('Barang_Model');
        $data['aaa'] = $this->Barang_Model->getBarangID($prod_id);
        $data['title'] = 'Details Page';
        $this->load->view('templates/header', $data);
        $this->load->view('user/buy', $data);
        $this->load->view('templates/footer');
    }   

    public function belisatu()
    {
     $name =   $this->input->post('name');
     $address =   $this->input->post('address');
     $phonenum =   $this->input->post('phonenum');
     $ship =   $this->input->post('ship');
     $bank =   $this->input->post('bank');
     $nama_produk = $this->input->post('nama_produk');
        
    $data = [
        'name' => $name,
        'address' => $address,
        'phonenum' => $phonenum,
        'ship' => $ship,
        'bank' => $bank,
        'nama_produk' => $nama_produk,
    ];

    $this->db->insert('pembeli', $data);

    redirect('user');

    }    
 
    public function edit(){
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];
          if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                } 
            }
            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user');
        }
    }
     
    public function changePassword() {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong current password!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New password cannot be the same as current password!</div>');
                    redirect('user/changepassword');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password changed!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }

    public function cariBarang() {
        $this->load->model('Barang_Model', 'barang');
        $data['barang'] = $this->barang->cariDataBarang();
        $data['title'] = 'Techbrain';
        $this->load->view('templates/user_header',$data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/user_footer'); 
    }

}
