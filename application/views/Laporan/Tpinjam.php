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
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table  ">
                  <thead>
                  <tr>
                    <td>No</td>
                    <td>No Peminjaman</td>
                    <td>Kode Lab</td> 
                    <td>Nama Lab</td>
                    <td>Nama Peminjam</td>
                    <td>Nomor Buku</td>
                    <td>Penerbit</td>
                    <td>Pengarang</td>
                    <td>Judul</td>
                    <td>Tgl Pinjam</td>
                    <td>Jumlah</td>

                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  foreach( $hasil as $v ) :?>
                    <tr>
                    <td><?= $no++;?></td>
                        <td><?= $v['no_pinjam']?></td>
                        <td><?= $v['kode_lab']?></td>
                        <td><?= $v['nama_lab']?></td>
                        <td><?= $v['nama_peminjam']?></td>
                        <td><?= $v['nomor_buku']?></td>
                        <td><?= $v['penerbit']?></td>
                        <td><?= $v['pengarang']?></td>
                        <td><?= $v['judul']?></td>
                        <td><?= $v['tgl_pinjam']?></td>
                        <td><?= $v['jumlah']?></td>
                        
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
