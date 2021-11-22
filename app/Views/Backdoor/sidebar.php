<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('Backdoor/welcome');?>" class="brand-link">
      <img src="<?php echo base_url('images/logo.png');?>" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light">KGA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Katalog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('Backdoor/Katalog');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Katalog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Backdoor/Deskripsi');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Deskripsi Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Backdoor/Merek');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Merek Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Backdoor/Kategori');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kategori Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('Backdoor/Stok');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stok Barang</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
              <a href="<?= base_url('Backdoor/Account');?>" class="nav-link">
                <i class="nav-icon fas fa-cog"></i>
                <p>Account Settings</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Backdoor/History');?>" class="nav-link">
                <i class="nav-icon fas fa-history"></i>
                <p>Stok History</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Backdoor/Logout');?>" class="nav-link">
                <i class="far fa-user nav-icon"></i>
                <p>Logout</p>
              </a>
            </li>

          </li>

          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>