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
                <h3 class="card-title mb-2 mt-2" style="float:revert !important; text-align: center;" >UPDATE DATA USER</h3>
              </div>
              <!-- /.card-header -->
              <?php
                $mt_rand = mt_rand(1000, 9999);
                ?>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" class="form-horizontal">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID User</label>
                    <div class="col-sm-9">
                      <input type="text" name="id" class="form-control" value="<?= $viewedit['id'];?>" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                      <input type="text" name="username" class="form-control" value="<?= $viewedit['username'];?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                      <input type="passwprd" name="password" class="form-control" value="<?= $viewedit['password'];?>">
                    </div>
                  </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Update</button>
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