<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">

        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="#" class="nav-link  nav-link-lg nav-link-user">

              <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $this->session->userdata('nama') ?></div>
            </a>

          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="<?php echo base_url('admin/dashboard') ?>">Soenter Rental Motor</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">

          </div>
          <ul class="sidebar-menu">

            <li><a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>

            <li><a class="nav-link" href="<?php echo base_url('admin/data_motor') ?>"><i class="fas fa-motorcycle"></i> <span>Data Motor</span></a></li>

            <li><a class="nav-link" href="<?php echo base_url('admin/data_type') ?>"><i class="fas fa-grip-horizontal"></i> <span>Data Type</span></a></li>

            <li><a class="nav-link" href="<?php echo base_url('admin/data_customer') ?>"><i class="fas fa-users"></i> <span>Data Customer</span></a></li>

            <li><a class="nav-link" href="<?php echo base_url('admin/transaksi') ?>"><i class="fas fa-random"></i> <span>Transaksi</span></a></li>

            <li><a class="nav-link" href="<?php echo base_url('admin/laporan') ?>"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li>

            <li class="nav-item dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i><span>Akun</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="<?php echo base_url('auth/logout') ?>"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>

              </ul>
            </li>






          </ul>


      </div>
      </aside>
    </div>