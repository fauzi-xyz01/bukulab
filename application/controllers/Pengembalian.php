<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilPengembalian();
        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Pengembalian/index');
        $this->load->view('Build/Footer');
	}

    public function viewforkembali()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilPeminjaman();
        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Pengembalian/viewforkembali');
        $this->load->view('Build/Footer');
	}

	public function hasil()
	{
		$kategori = $this->input->post('kategori');
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilhasilPeminjaman($kategori);
		$data['kategori'] = $this->input->post('kategori');
        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Pengembalian/hasilcari',$data);
        $this->load->view('Build/Footer');
	}

    public function input($no_pinjam)
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->viewTambahkembali($no_pinjam);

        $this->form_validation->set_rules('no_pinjam', 'No pinjam', 'required');
        if($this->form_validation->run() == false){

        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Pengembalian/input', $data);
	}else{

        $this->Master_model->addPengembalian();
        redirect('Pengembalian');
	}
    }

    public function hapus($no_pinjam)
	{
		$this->Master_model->deletePengembalian($no_pinjam);
		redirect('Pengembalian');
	}



}