<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content offset-2">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">

            <!-- Horizontal Form -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title mb-2 mt-2" style="float:revert !important; text-align: center;" >INPUT DATA PEMINJAMAN BUKU PANDUAN LAB</h3>
              </div>
              <!-- /.card-header -->
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">No Peminjaman</label>
                    <div class="col-sm-9">
                    <input type="text" name="no_pinjam" class="form-control" value="TLKM-P-<?= $jmlbaris['total']+1?>" readonly>
                    </div>
                  </div>
                    <?php
                    
                    $s = $view['kategori'];
                    if( $s == "LAB ENERGI")
                        {
                            $s = "01 E";
                    }elseif($s == "LAB DEVICE")
                        {
                            $s = "02 D"; 
                    }elseif($s == "LAB KABEL")
                        {
                            $s = "03 K"; 
                    }elseif($s == "LAB TRANSMISI")
                        {
                            $s = "04 T"; 
                        }
                    
                    
                    ?>


                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Lab</label>
                    <div class="col-sm-9">
                      <input type="text" name="kode_lab" class="form-control" value="<?= $s?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Lab</label>
                    <div class="col-sm-9">
                      <input type="text" name="nama_lab" class="form-control" value="<?= $view['kategori']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Peminjam</label>
                    <div class="col-sm-9">
                      <input type="text" name="nama_peminjam" class="form-control" required>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-9">
                      <input type="date" name="tgl_pinjam" class="form-control" >
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Pinjam</label>
                    <div class="col-sm-9">
                      <input type="number" name="jumlah" class="form-control" required>
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Buku</label>
                    <div class="col-sm-9">
                      <input type="text" name="nomor_buku" class="form-control" value="<?= $view['no_buku']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Judul Buku</label>
                    <div class="col-sm-9">
                      <input type="text" name="judul" class="form-control" value="<?= $view['judul']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Penerbit</label>
                    <div class="col-sm-9">
                      <input type="text" name="penerbit" class="form-control" value="<?= $view['penerbit']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">pengarang</label>
                    <div class="col-sm-9">
                      <input type="text" name="pengarang" class="form-control" value="<?= $view['pengarang']?>" readonly>
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
