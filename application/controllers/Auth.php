<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {

			$data['title'] = 'Login';
			$this->load->view('Login');
		} else {

			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username])->row_array();
		// user ada
		if ($user) {
			// user aktif
			if ($user['is_active'] == 1) {
				// cek password
				if ($password == $user['password']) {

					$data = [

						'username' => $user['username'],
						'level' => $user['level']
					];
					$this->session->set_userdata($data);
					if ($user['level'] == 1) {
						redirect('home');
					} elseif($user['level'] == 2) {
						redirect('manager');
					}else{
						echo"salah";
					}
				} else {

					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
				Password salah!</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
				username tidak aktif</div>');
				redirect('auth');
			}
		} else {

			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
			Username salah!</div>');
			redirect('auth');
		}
	}

	public function logout()
	{

		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		You have been logged out!</div>');
		redirect('Auth');
	}
}
