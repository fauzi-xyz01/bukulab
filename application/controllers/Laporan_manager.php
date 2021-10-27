<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_manager extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Laporan_model');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('Build/Header');
        $this->load->view('Build/Menu_manager', $data);
        $this->load->view('laporan/index_manager');
        $this->load->view('Build/Footerlap');
	}

    public function cariLap()
    {
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$awal = $this->input->post('awal');
        $akhir = $this->input->post('akhir');
		$kategori = $this->input->post('kategori');
        $jenis = $this->input->post('jenis');

		if ($jenis == 1 && $kategori == 1) {

            $data['hasil'] = $this->Laporan_model->lapbukuT($awal,$akhir);
            $this->load->view('Build/Header');
            $this->load->view('Build/Menu_manager', $data);
            $this->load->view('laporan/Tbuku');
            $this->load->view('Build/Footerlap');

		}elseif( $jenis == 1 && $kategori == 2){

            $data['hasil'] = $this->Laporan_model->lappinjamT($awal,$akhir);
            $this->load->view('Build/Header');
            $this->load->view('Build/Menu_manager', $data);
            $this->load->view('laporan/TPinjam');
            $this->load->view('Build/Footerlap');

        }elseif( $jenis == 1 && $kategori == 3){

            $data['hasil'] = $this->Laporan_model->lapkembaliT($awal,$akhir);
            $this->load->view('Build/Header');
            $this->load->view('Build/Menu_manager', $data);
            $this->load->view('laporan/Tkembali');
            $this->load->view('Build/Footerlap');
    
        }elseif( $jenis == 2 && $kategori == 1){

            $data['hasil'] = $this->Laporan_model->GrafikBuku($awal,$akhir);
            $this->load->view('Build/Header');
            $this->load->view('Build/Menu_manager', $data);
            $this->load->view('laporan/Gbuku');
            $this->load->view('Build/Footerlap');
    
        }elseif( $jenis == 2 && $kategori == 2){

            $data['hasil'] = $this->Laporan_model->GrafikPinjam($awal,$akhir);
            $this->load->view('Build/Header');
            $this->load->view('Build/Menu_manager', $data);
            $this->load->view('laporan/GPinjam');
            $this->load->view('Build/Footerlap');
    
        }elseif( $jenis == 2 && $kategori == 3){

            $data['hasil'] = $this->Laporan_model->GrafikKembali($awal,$akhir);
            $this->load->view('Build/Header');
            $this->load->view('Build/Menu_manager', $data);
            $this->load->view('laporan/GKembali');
            $this->load->view('Build/Footerlap');
    
        }else{
			echo"Data pencarian salah";
		}
    }
}
