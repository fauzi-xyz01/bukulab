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
                <h3 class="card-title mb-2 mt-2" style="float:revert !important; text-align: center;" >INPUT DATA BUKU PANDUAN LAB</h3>
              </div>
              <!-- /.card-header -->
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('Buku/input')?>" method="POST" class="form-horizontal">
                <div class="card-body">
                  <!-- <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kategori Lab</label>
                    <div class="col-sm-9">
                      <select name="kategori" id="" type="text" class="form-control select2bs4">
                      <option value="">Pilih</option>
                      <option value="LAB ENERGI">LAB ENERGI</option>
                      <option value="LAB DIVICE">LAB DIVICE</option>
                      <option value="LAB KABEL">LAB KABEL</option>
                      <option value="LAB TRANSMISI">LAB TRANSMISI</option>
                      </select>
                    </div>
                  </div> -->
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Kategori Lab</label>
                    <div class="col-sm-9">
                      <input type="text"  name="kategori" class="form-control" value="<?= $view['kategori_lab']?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor Buku</label>
                    <div class="col-sm-9">
                      <input type="text" name="no_buku"  class="form-control" value="<?= $view['nomor_buku']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Versi</label>
                    <div class="col-sm-9">
                      <input type="text" name="versi" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Judul Buku</label>
                    <div class="col-sm-9">
                      <input type="text" name="judul" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Penerbit</label>
                    <div class="col-sm-9">
                      <input type="text" name="penerbit" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pengarang</label>
                    <div class="col-sm-9">
                      <input type="text" name="pengarang" class="form-control">
                    </div>
                  </div>
                
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah</label>
                    <div class="col-sm-9">
                      <input type="number" name="jumlah" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-9">
                      <input type="date" name="tgl_masuk" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Lokasi Rak</label>
                    <div class="col-sm-9">
                      <input type="text" name="lokasi_rak" class="form-control" value="<?= $view['lokasi_rak']?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan Buku</label>
                    <div class="col-sm-9">
                    <textarea class="form-control" rows="3" name="keterangan" ></textarea>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="<?= base_url('Buku/input')?>" class="btn btn-danger">Kembali</a>
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
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
            function isi_otomatis(){
                var kategori_lab = $("#kategori_lab").val();
                $.ajax({
                    url: '<?= base_url()?>ajax.php',
                    data:"kategori_lab="+kategori_lab ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nomor_buku').val(obj.nomor_buku);
                    $('#lokasi_rak').val(obj.lokasi_rak);
                });
            }
        </script> -->