<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "bukulab");

//variabel nim yang dikirimkan form.php
$kategori_lab = $_GET['kategori_lab'];

//mengambil data
$query = mysqli_query($koneksi, "select * from kode where kategori_lab='$kategori_lab'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nomor_buku'      =>  $mahasiswa['nomor_buku'],
            'lokasi_rak'   =>  $mahasiswa['lokasi_rak'],);

//tampil data
echo json_encode($data);
?>