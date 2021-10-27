<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Dashboard');
        $this->load->view('Build/Footer');
	}
}
