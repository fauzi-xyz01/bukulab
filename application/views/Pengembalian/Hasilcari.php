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
                <div class="row">
                    <div class="col-md-4 mt-2">Hasil : <?= $kategori?></div>
                    <div class="col-md-8">
                    <form action="<?= base_url('Pengembalian/hasil')?>" method="POST">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori Lab</label>
                    <div class="col-sm-8">
                    <select name="kategori" class="form-control" id="">
                        <option value="">Pilih</option>
                        <option value="LAB ENERGI">LAB ENERGI</option>
                        <option value="LAB DEVICE">LAB DEVICE</option>
                        <option value="LAB KABEL">LAB KABEL</option>
                        <option value="LAB TRANSMISI">LAB TRANSMISI</option>
                    </select>
                    </div>
                    <div>
                      <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                  </div>
                </div>
                </div>
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
                    <td>Aksi</td>
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
                        <td><a href="<?= base_url('Pengembalian')?>/input/<?= $v['no_pinjam']?>" class="btn btn-info">Kembalikan</a></td>
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
