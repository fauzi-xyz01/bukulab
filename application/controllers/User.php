<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilUser();
		$this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('User/index', $data);
        $this->load->view('Build/Footer');
	}


	public function input()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'pasword', 'required');
        if($this->form_validation->run() == false){

			$this->load->view('Build/Header');
			$this->load->view('Build/Menu', $data);
			$this->load->view('User/input');
			$this->load->view('Build/Footer');
	}else{

        $this->Master_model->addUser();
        redirect('User');
	}
	}

	public function ubah($id)
	{
		
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['judul'] = "Input User";
		$data['viewedit'] = $this->Master_model->vieweditUser($id);
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'pasword', 'required');
        if($this->form_validation->run() == false){

			$this->load->view('Build/Header');
			$this->load->view('Build/Menu', $data);
			$this->load->view('User/edit', $data);
			$this->load->view('Build/Footer');

	}else{

        $this->Master_model->editUser();
        redirect('User');
	}
}

	public function hapus($id)
	{
		$this->Master_model->deleteUser($id);
		redirect('User');
	}


}
