

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: red;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color: white;">
    <img src="<?= base_url('assets')?>/img/logo.jpg"  class="" alt="User Image" style="width:230px !important; border-radius: 5%;">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="<?= base_url('assets')?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block">Login as : <?= $user['username'];?></a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
               <li class="nav-item">
                 <a href="<?= base_url('Home')?>" class="nav-link">
                   <i class="nav-icon fas fa-school"></i>
                   <p>
                     Dashboard
                   </p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url('User')?>" class="nav-link">
                   <i class="nav-icon fas fa-users"></i>
                   <p>
                     Data User
                   </p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url('Buku')?>" class="nav-link">
                   <i class="nav-icon fas fa-book"></i>
                   <p>
                     Data Buku Masuk
                   </p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url('Peminjaman')?>" class="nav-link">
                   <i class="nav-icon fas fa-file"></i>
                   <p>
                     Data Peminjaman
                   </p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url('Pengembalian')?>" class="nav-link">
                   <i class="nav-icon fa fa-exchange-alt"></i>
                   <p>
                     Data Pengembalian
                   </p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url('Laporan')?>" class="nav-link">
                   <i class="nav-icon fas fa-table"></i>
                   <p>
                     laporan
                   </p>
                 </a>
               </li>
              
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>