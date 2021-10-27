<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_model extends CI_Model {


    ////// TABEL

	public function lapbukuT($awal,$akhir)
    {
        $query = $this->db->query( "SELECT * FROM buku_masuk WHERE tgl_masuk BETWEEN '$awal' AND '$akhir'")->result_array();
        return $query;
    }

    public function lappinjamT($awal,$akhir)
    {
        $query = $this->db->query( "SELECT * FROM peminjaman WHERE tgl_pinjam BETWEEN '$awal' AND '$akhir'")->result_array();
        return $query;
    }

    public function lapkembaliT($awal,$akhir)
    {
        $query = $this->db->query( "SELECT * FROM Pengembalian WHERE tgl_kembali BETWEEN '$awal' AND '$akhir'")->result_array();
        return $query;
    }

    ////// GRAFIK

    function GrafikBuku($awal,$akhir)
    {

        $query = $this->db->query( "SELECT judul,count(*) as 'total' FROM buku_masuk WHERE tgl_masuk BETWEEN '$awal' AND '$akhir' GROUP BY judul")->result_array();
        return $query;
    }

    function GrafikPinjam($awal,$akhir)
    {

        $query = $this->db->query( "SELECT judul,count(*) as 'total' FROM peminjaman WHERE tgl_pinjam BETWEEN '$awal' AND '$akhir' GROUP BY judul")->result_array();
        return $query;
    }

    function GrafikKembali($awal,$akhir)
    {

        $query = $this->db->query( "SELECT judul,count(*) as 'total' FROM pengembalian WHERE tgl_kembali BETWEEN '$awal' AND '$akhir' GROUP BY judul")->result_array();
        return $query;
    }
}
