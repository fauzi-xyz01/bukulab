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
              <p class="card-title mt-2">User</p>
                <a href="<?= base_url('User')?>/input" class="btn btn-primary float-right">Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table  ">
                  <thead>
                  <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Password</td> 
                    <td>+ Opsi</td>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  foreach( $view as $v ) :?>
                    <tr>
                        <td><?= $v['id'];?></td>
                        <td><?= $v['username'];?></td>
                        <td><?= $v['password'];?></td>
                        <td><a href="<?= base_url('User/ubah') ?>/<?= $v['id'];?>"><i class="fa fa-edit"></i></a>
                        &nbsp; | &nbsp; 
                         <a href="<?= base_url('User/hapus') ?>/<?= $v['id'];?>"><i class="fa fa-trash"></i></a> 
                       </td>
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
