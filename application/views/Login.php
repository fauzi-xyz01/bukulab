<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets')?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <br><br><br><br><br><br><br><br><br>
<div class="" >
  <!-- /.login-logo -->
  <div class="card ">
  
    <div class="card-header text-center">
      <a href="" class="h1">LOGIN</a>
    </div>
    <div class="card-body">
    <?= $this->session->flashdata('pesan'); ?>
    <form action="<?= base_url('Auth')?>" method="post">
    <div class="row">
      <div class="col-md-6">
      <a href="index3.html" class="brand-link" style="background-color: white;">
    <img src="<?= base_url('assets')?>/img/logo.jpg"  class="" alt="User Image" style="width:230px !important; border-radius: 5%;">
    </a>
      </div>
      <div class="col-md-6">
      <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
          </div>
      </div>
    </div>
    </div>
      
        
      </form>

     
      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets')?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets')?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets')?>/dist/js/adminlte.min.js"></script>
</body>
</html>
