  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="text-center">Transaksi Update Data Buku Panduan Lab</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content mt-3" >
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">

            <!-- Horizontal Form -->
            <div class="card card-secondary">
              
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" class="form-horizontal">
              
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID Buku</label>
                    <div class="col-sm-9">
                      <input type="text" name="id" class="form-control" value="<?= $view['id'];?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Buku</label>
                    <div class="col-sm-9">
                      <input type="text" name="no_buku" class="form-control" value="<?= $view['no_buku'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Versi</label>
                    <div class="col-sm-9">
                      <input type="text" name="versi" class="form-control" value="<?= $view['versi'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Judul Buku</label>
                    <div class="col-sm-9">
                      <input type="text" name="judul" class="form-control" value="<?= $view['judul'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Penerbit</label>
                    <div class="col-sm-9">
                      <input type="text" name="penerbit" class="form-control" value="<?= $view['penerbit'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pengarang</label>
                    <div class="col-sm-9">
                      <input type="text" name="pengarang" class="form-control" value="<?= $view['pengarang'];?>">
                    </div>
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-9">
                      <input type="text" name="kategori" class="form-control" value="<?= $view['kategori'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-9">
                      <input type="number" name="jumlah" class="form-control" value="<?= $view['jumlah'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-9">
                      <input type="date" name="tgl_masuk" class="form-control" value="<?= $view['tgl_masuk'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Lokasi Rak</label>
                    <div class="col-sm-9">
                      <input type="text" name="lokasi_rak" class="form-control" value="<?= $view['lokasi_rak'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan Buku</label>
                    <div class="col-sm-9">
                      <input type="text" name="keterangan" class="form-control" value="<?= $view['keterangan'];?>">
                    </div>
                  </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->