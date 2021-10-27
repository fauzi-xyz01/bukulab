  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: white;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Halaman utama</a></li>
              <li class="breadcrumb-item active"><?= $judul?></li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
              <div class="card">
              <div class="card-header">
                <p class="card-title mt-2">Pengembalian</p>
                <a href="<?= base_url('Pengembalian/viewforkembali')?>" class="btn btn-primary float-right">Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table  ">
                  <thead>
                  <tr>
                    <td>No</td>
                    <td>Kode Lab</td>
                    <td>Nama Lab</td> 
                    <td>Nama Peminjam</td>
                    <td>Nomor Buku</td>
                    <td>Judul</td>
                    <td>Jumlah</td>
                    <td>Tgl Pinjam</td>
                    <td>Tgl Kembali</td>
                    <td>+ Opsi</td>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  foreach( $view as $v ) :?>
                    <tr>
                    <td><?= $no++;?></td>
                        <td><?= $v['kode_lab']?></td>
                        <td><?= $v['nama_lab']?></td>
                        <td><?= $v['nama_peminjam']?></td>
                        <td><?= $v['nomor_buku']?></td>
                        <td><?= $v['judul']?></td>
                        <td><?= $v['jumlah']?></td>
                        <td><?= $v['tgl_pinjam']?></td>
                        <td><?= $v['tgl_kembali']?></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Hapus data ini?')" href="<?= base_url('Pengembalian/hapus')?>/<?= $v['no_pinjam']?>"><i class="fa fa-trash"></i> Hapus</a></td>
                        
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
