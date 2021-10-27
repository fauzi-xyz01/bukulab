    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content offset-3 mt-5">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">

            <!-- Horizontal Form -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title mb-2 mt-2" style="float:revert !important; text-align: center;" >LAPORAN</h3>
              </div>
              <!-- /.card-header -->
              <?php
                $mt_rand = mt_rand(1000, 9999);
                ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('laporan/cariLap')?>" method="POST" class="form-horizontal">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Kategori Laporan</label>
                    <div class="col-sm-8">
                      <select type="text" name="kategori" class="form-control"  id="">
                          <option value="">Pilih</option>
                          <option value="1">Buku Masuk</option>
                          <option value="2">Peminjaman</option>
                          <option value="3">Pengembalian</option>
                       </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Periode Awal</label>
                    <div class="col-sm-8">
                      <input type="date" name="awal" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Periode Akhir</label>
                    <div class="col-sm-8">
                      <input type="date" name="akhir" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-4 col-form-label">Jenis Laporan</label>
                    <div class="col-sm-8">
                    <select type="text" name="jenis" class="form-control"  id="">
                          <option value="">Pilih</option>
                          <option value="1">Tabel</option>
                          <option value="2">Grafik</option>
                       </select>
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