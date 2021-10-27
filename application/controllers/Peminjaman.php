<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Master_model');

    }

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilPeminjaman();
        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Peminjaman/index', $data);
        $this->load->view('Build/Footer');
	}

    public function viewforpinjam()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilBuku();
        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Peminjaman/viewforpinjam');
        $this->load->view('Build/Footer');
	}

    public function hasil()
	{
		$kategori = $this->input->post('kategori');
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilhasilBuku($kategori);
		$data['kategori'] = $this->input->post('kategori');
        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Peminjaman/hasilcari',$data);
        $this->load->view('Build/Footer');
	}

    public function input($no_buku)
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->viewTambahpinjam($no_buku);
        $data['jmlbaris'] = $this->Master_model->noPinjam();
        $this->form_validation->set_rules('nomor_buku', 'No buku', 'required');
        if($this->form_validation->run() == false){

        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Peminjaman/input', $data);
	}else{

        $this->Master_model->addPeminjaman();
        redirect('Peminjaman');
	}
    }

    public function edit($no_pinjam)
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->viewEditpinjam($no_pinjam);
        $data['jmlbaris'] = $this->Master_model->noPinjam();
        $this->form_validation->set_rules('nomor_buku', 'No buku', 'required');
        if($this->form_validation->run() == false){

        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Peminjaman/edit', $data);
	}else{

        $this->Master_model->editPeminjaman();
        redirect('Peminjaman');
	}
    }

    public function hapus($no_pinjam)
	{
		$this->Master_model->deletePeminjaman($no_pinjam);
		redirect('peminjaman');
	}
}
