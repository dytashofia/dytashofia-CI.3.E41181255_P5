<!-- Ini adalah sebuah file view untuk sidebar -->
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <!-- class yang menuju pada C_dashboard -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() . 'C_dashboard'; ?>"> 
        <div class="sidebar-brand-icon">
         <i class="fas fa-fish"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ikan Hias</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
      <!-- navigasi yang memiliki link yang menuju pada C_dashboard -->
        <a class="nav-link" href="<?=base_url('C_dashboard')?>">
          <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data
      </div>

      <!-- Nav Item - Data Admin -->
      <li class="nav-item">
      <!-- navigasi yang memiliki link yang menuju pada C_admin -->
        <a class="nav-link" href="<?=base_url('C_admin')?>">
          <i class="fas fa-server"></i>
          <span>Data Admin</span></a>
      </li>
      <!-- Nav Item - Data Ikan Hias -->
      <li class="nav-item">
      <!-- navigasi yang memiliki link yang menuju pada C_ikanhias -->
        <a class="nav-link" href="<?=base_url('C_ikanhias')?>">
          <i class="fas fa-chart-bar"></i>
          <span>Data Ikan Hias</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <!-- class untuk sesi login username -->
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata("username"); ?></span>
                <i class="fas fa-user"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
              <!-- modal untuk logout -->
              <a class="dropdown-item" href="<?= base_url('C_login');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->