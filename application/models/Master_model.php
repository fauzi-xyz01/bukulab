<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {

    public function cari ($id)
    {
            $query = $this->db->get_where('kode', array('id'=>$id));
            return $query;
    }

    public function tampilKode()
	{
		return $this->db->get('kode')->result_array();
	}


    ///////////////////////////////

	public function tampilUser()
	{
		return $this->db->get('user')->result_array();
	}

    public function addUser()
    {
        $data =
		[
            'id' => htmlspecialchars($this->input->post('id', true)),   
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => htmlspecialchars($this->input->post('password', true)),
            'is_active' => 1,
            'level' => 2,

		];

		$this->db->insert('user', $data);
    }

    public function vieweditUser($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

    public function editUser()
    {
        $data =
		[
            'id' => htmlspecialchars($this->input->post('id', true)),   
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => htmlspecialchars($this->input->post('password', true)),
            'is_active' => 1,
            'level' => 2,

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('user', $data);
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
		$this->db->delete('user');

    }


    // Model Buku

    public function tampilBuku()
	{
		return $this->db->get('buku_masuk')->result_array();
	}

    function noBuku()
    {

        $query = $this->db->query( "SELECT no_buku, count(*) as 'total' FROM buku_masuk")->row_array();
        return $query;
    }

    public function tampilEdit($id)
    {
        return $this->db->get_where('buku_masuk', ['id' => $id])->row_array();
    }

    public function tampilhasilKode($kategori)
	{
		return $this->db->get_where('kode', ['kategori_lab' => $kategori])->row_array();
	}

    public function inputBuku()
    {
        $data =
		[  
            'no_buku' => htmlspecialchars($this->input->post('no_buku', true)),
            'versi' => htmlspecialchars($this->input->post('versi', true)),
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'penerbit' => htmlspecialchars($this->input->post('penerbit', true)),
            'pengarang' => htmlspecialchars($this->input->post('pengarang', true)),
            'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
            'tgl_masuk' => htmlspecialchars($this->input->post('tgl_masuk', true)),
            'lokasi_rak' => htmlspecialchars($this->input->post('lokasi_rak', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),

		];

		$this->db->insert('buku_masuk', $data);
    }

    public function editBuku()
    {
        $data =
		[
            'id' => htmlspecialchars($this->input->post('id', true)),   
            'no_buku' => htmlspecialchars($this->input->post('no_buku', true)),
            'versi' => htmlspecialchars($this->input->post('versi', true)),
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'penerbit' => htmlspecialchars($this->input->post('penerbit', true)),
            'pengarang' => htmlspecialchars($this->input->post('pengarang', true)),
            'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
            'tgl_masuk' => htmlspecialchars($this->input->post('tgl_masuk', true)),
            'lokasi_rak' => htmlspecialchars($this->input->post('lokasi_rak', true)),
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('buku_masuk', $data);
    }

    public function deleteBuku($no_buku)
    {
        $this->db->where('no_buku', $no_buku);
		$this->db->delete('buku_masuk');

    }


    //////// PEMINJAMAN
    
    public function tampilPeminjaman()
	{
		return $this->db->get('peminjaman')->result_array();
	}

    public function tampilhasilBuku($kategori)
	{
		return $this->db->get_where('buku_masuk', ['kategori' => $kategori])->result_array();
	}

    public function viewTambahpinjam($no_buku)
	{
		return $this->db->get_where('buku_masuk', ['no_buku' => $no_buku])->row_array();
	}

    public function viewEditpinjam($no_pinjam)
	{
		return $this->db->get_where('peminjaman', ['no_pinjam' => $no_pinjam])->row_array();
	}

    function noPinjam()
    {

        $query = $this->db->query( "SELECT no_pinjam, count(*) as 'total' FROM peminjaman")->row_array();
        return $query;
    }

    public function addPeminjaman()
    {
        $data =
		[
            'no_pinjam' => htmlspecialchars($this->input->post('no_pinjam', true)),   
            'kode_lab' => htmlspecialchars($this->input->post('kode_lab', true)),
            'nama_lab' => htmlspecialchars($this->input->post('nama_lab', true)),
            'nama_peminjam' => htmlspecialchars($this->input->post('nama_peminjam', true)),
            'tgl_pinjam' => htmlspecialchars($this->input->post('tgl_pinjam', true)),
            'nomor_buku' => htmlspecialchars($this->input->post('nomor_buku', true)),
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'penerbit' => htmlspecialchars($this->input->post('penerbit', true)),
            'pengarang' => htmlspecialchars($this->input->post('pengarang', true)),
            'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
		];

		$this->db->insert('peminjaman', $data);
    }

    public function editPeminjaman()
    {
        $data =
		[
            'no_pinjam' => htmlspecialchars($this->input->post('no_pinjam', true)),   
            'kode_lab' => htmlspecialchars($this->input->post('kode_lab', true)),
            'nama_lab' => htmlspecialchars($this->input->post('nama_lab', true)),
            'nama_peminjam' => htmlspecialchars($this->input->post('nama_peminjam', true)),
            'tgl_pinjam' => htmlspecialchars($this->input->post('tgl_pinjam', true)),
            'nomor_buku' => htmlspecialchars($this->input->post('nomor_buku', true)),
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'penerbit' => htmlspecialchars($this->input->post('penerbit', true)),
            'pengarang' => htmlspecialchars($this->input->post('pengarang', true)),
            'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
		];

		$this->db->where('no_pinjam', $this->input->post('no_pinjam'));
		$this->db->update('peminjaman', $data);
    }

    public function deletePeminjaman($no_pinjam)
    {
        $this->db->where('no_pinjam', $no_pinjam);
		$this->db->delete('peminjaman');

    }
    



    /////// PENGEMBALIAN

    public function tampilPengembalian()
	{
		return $this->db->get('pengembalian')->result_array();
	}

    public function tampilhasilPeminjaman($kategori)
	{
		return $this->db->get_where('peminjaman', ['nama_lab' => $kategori])->result_array();
	}

    public function viewTambahkembali($no_pinjam)
	{
		return $this->db->get_where('peminjaman', ['no_pinjam' => $no_pinjam])->row_array();
	}

    public function addPengembalian()
    {
        $data =
		[
            'no_pinjam' => htmlspecialchars($this->input->post('no_pinjam', true)),   
            'kode_lab' => htmlspecialchars($this->input->post('kode_lab', true)),
            'nama_lab' => htmlspecialchars($this->input->post('nama_lab', true)),
            'nama_peminjam' => htmlspecialchars($this->input->post('nama_peminjam', true)),
            'tgl_pinjam' => htmlspecialchars($this->input->post('tgl_pinjam', true)),
            'tgl_kembali' => htmlspecialchars($this->input->post('tgl_kembali', true)),
            'nomor_buku' => htmlspecialchars($this->input->post('nomor_buku', true)),
            'judul' => htmlspecialchars($this->input->post('judul', true)),
            'penerbit' => htmlspecialchars($this->input->post('penerbit', true)),
            'pengarang' => htmlspecialchars($this->input->post('pengarang', true)),
            'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
            'tahun' => htmlspecialchars($this->input->post('tahun', true)),
		];

		$this->db->insert('pengembalian', $data);
    }

    public function deletePengembalian($no_pinjam)
    {
        $this->db->where('no_pinjam', $no_pinjam);
		$this->db->delete('pengembalian');

    }



}