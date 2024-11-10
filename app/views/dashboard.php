<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Toko |0046</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/adminlte/dist/css/adminlte.min.css">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="public/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-bold">TOKO KHAMDANU46</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-4">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item mb-3">
            <a href="index.php?page=barang" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'barang') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-boxes fa-lg text-danger"></i>
              <p class="font-weight-bold">Barang</p>
            </a>
          </li>
          <li class="nav-item mb-3">
            <a href="index.php?page=pelanggan" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'pelanggan') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-users fa-lg text-warning"></i>
              <p class="font-weight-bold">Pelanggan</p>
            </a>
          </li>
          <li class="nav-item mb-3">
            <a href="index.php?page=transaksi" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'transaksi') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-cash-register fa-lg text-info"></i>
              <p class="font-weight-bold">Transaksi</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper bg-light">
    <!-- Content Header -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="row w-100">
          <div class="col-12 d-flex align-items-center justify-content-between">
            <h1 class="font-weight-bold mb-0">Dashboard</h1>
            <a class="nav-link font-weight-bold text-dark" data-widget="pushmenu" href="#" role="button">
              <i class="fas fa-bars" style="font-size: 1.5rem;"></i>
            </a>
          </div>
        </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Welcome Section -->
        <div class="card bg-gradient-light mb-4 shadow-sm">
          <div class="card-body text-center py-5">
            <h4 class="text-success mb-3">Selamat Datang di Aplikasi Penjualan</h4>
            <p class="text-muted mb-0">Kelola inventory, pelanggan, dan transaksi dengan mudah</p>
          </div>
        </div>

        <!-- Stats Cards -->
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card bg-gradient-info shadow-sm">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-white">Total Barang</h6>
                    <h3 class="text-white mb-0"><?php echo isset($totalBarang) ? $totalBarang : '0'; ?></h3>
                  </div>
                  <div class="bg-white rounded-circle p-3">
                    <i class="fas fa-box fa-2x text-info"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card bg-gradient-success shadow-sm">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-white">Total Pelanggan</h6>
                    <h3 class="text-white mb-0"><?php echo isset($totalPelanggan) ? $totalPelanggan : '0'; ?></h3>
                  </div>
                  <div class="bg-white rounded-circle p-3">
                    <i class="fas fa-users fa-2x text-success"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card bg-gradient-warning shadow-sm">
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <h6 class="text-white">Transaksi Hari Ini</h6>
                    <h3 class="text-white mb-0"><?php echo isset($totalTransaksi) ? $totalTransaksi : '0'; ?></h3>
                  </div>
                  <div class="bg-white rounded-circle p-3">
                    <i class="fas fa-shopping-cart fa-2x text-warning"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
    </section>
  </div>

<footer class="main-footer bg-light text-center">
  <strong>&copy; 2024 <a href="#">Khamdanu Syakir 23.240.0046</a>.</strong> All rights reserved.
</footer>


  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<!-- jQuery -->
<script src="public/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/adminlte/dist/js/adminlte.min.js"></script>
<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>
</body>
</html>