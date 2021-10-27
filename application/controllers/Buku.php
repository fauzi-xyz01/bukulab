<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilBuku();
		$this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Buku/index', $data);
        $this->load->view('Build/Footer');
	}

	public function input()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['jmlbaris'] = $this->Master_model->noBuku();
		$this->form_validation->set_rules('no_buku', 'No buku', 'required');
        if($this->form_validation->run() == false){

		$this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Buku/input');
	}else{

        $this->Master_model->inputBuku();
        redirect('Buku');
	}
}

	public function ubah($id)
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilEdit($id);

		$this->form_validation->set_rules('no_buku', 'No buku', 'required');
        if($this->form_validation->run() == false){
		$this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Buku/edit');
	}else{

        $this->Master_model->editBuku();
        redirect('Buku');
	}
}




	public function cari()
	{
		$id=$_GET['id'];
		$cari = $this->Master_model->cari($id)->result();
		echo json_encode($cari);
	}

	public function hapus($no_buku)
	{
		$this->Master_model->deleteBuku($no_buku);
		redirect('Buku');
	}

	public function hasil()
	{
		$kategori = $this->input->post('kategori');
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['view'] = $this->Master_model->tampilhasilKode($kategori);
		$data['kategori'] = $this->input->post('kategori');
        $this->load->view('Build/Header');
        $this->load->view('Build/Menu', $data);
        $this->load->view('Buku/hasil',$data);
	}

}