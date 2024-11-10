<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Transaksi</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Toast Notification for Success -->
<div aria-live="polite" aria-atomic="true" style="position: relative; z-index: 1050;">
    <!-- Success Toast -->
    <?php if (isset($_GET['success_message'])): ?>
        <div class="toast bg-success text-white" id="successToast" style="position: fixed; top: 20px; right: 20px;">
            <div class="toast-header bg-success text-white">
                <i class="fas fa-check-circle mr-2"></i>
                <strong class="mr-auto">Success</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <i class="fas fa-check mr-2"></i>
                <?= htmlspecialchars($_GET['success_message']) ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Error Toast -->
    <?php if (isset($_GET['error_message'])): ?>
        <div class="toast bg-danger text-white" id="errorToast" style="position: fixed; top: 20px; right: 20px;">
            <div class="toast-header bg-danger text-white">
                <i class="fas fa-exclamation-circle mr-2"></i>
                <strong class="mr-auto">Error</strong>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                <i class="fas fa-times-circle mr-2"></i>
                <?= htmlspecialchars($_GET['error_message']) ?>
            </div>
        </div>
    <?php endif; ?>
</div>

<body class="hold-transition sidebar-mini">
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
        <div class="row align-items-center mb-3">
          <div class="col-sm-6">
            <h1 class="text-dark font-weight-bold">
              <i class="fas fa-shopping-cart text-info mr-2"></i>Data Transaksi
            </h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-4">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box shadow-sm">
              <span class="info-box-icon bg-info"><i class="fas fa-cash-register"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><i class="fas fa-chart-line mr-1"></i>Total Transaksi</span>
                <span class="info-box-number"><?php echo isset($transaksiList) ? count($transaksiList) : '0'; ?></span>
              </div>
            </div>
          </div>
        </div>

        <div class="card shadow-sm">
          <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
              <h3 class="card-title font-weight-bold">
                <i class="fas fa-list-alt mr-2"></i>Daftar Transaksi
              </h3>
              <a href="index.php?page=tambah_transaksi" class="btn btn-success">
                <i class="fas fa-plus-circle mr-2"></i>Tambah Transaksi
              </a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="bg-light">
                  <tr>
                    <th scope="col" class="text-center"><i class="fas fa-hashtag"></i></th>
                    <th scope="col"><i class="fas fa-barcode mr-2"></i>ID Transaksi</th>
                    <th scope="col"><i class="fas fa-user mr-2"></i>ID Pelanggan</th>
                    <th scope="col"><i class="fas fa-box mr-2"></i>ID Barang</th>
                    <th scope="col"><i class="fas fa-sort-numeric-up mr-2"></i>Jumlah</th>
                    <th scope="col"><i class="fas fa-money-bill-wave mr-2"></i>Harga Total</th>
                    <th scope="col"><i class="fas fa-calendar-alt mr-2"></i>Tanggal</th>
                    <th scope="col" class="text-center"><i class="fas fa-cogs mr-2"></i>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $nomor = 1;
                    if (isset($transaksiList) && is_array($transaksiList)) {
                      foreach ($transaksiList as $item) {
                  ?>
                  <tr>
                    <th scope="row" class="text-center"><?php echo $nomor++; ?></th>
                    <td><?php echo $item["id_transaksi"]; ?></td>
                    <td></i><?php echo $item["id_pelanggan"]; ?></td>
                    <td></i><?php echo $item["id_barang"]; ?></td>
                    <td><?php echo $item["jumlah"]; ?></td>
                    <td> Rp. <?php echo number_format($item["harga_total"], 0, ',', '.'); ?></td>
                    <td><?php echo $item["tanggal"]; ?></td>
                    <td class="text-center">
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-<?= $item['id_transaksi'] ?>">
                        <i class="fas fa-trash-alt mr-1"></i>Hapus
                      </button>
                      <!-- Modal konfirmasi hapus -->
                      <div class="modal fade" id="modal-delete-<?= $item['id_transaksi'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalDeleteLabel">
                                <i class="fas fa-exclamation-triangle text-danger mr-2"></i>
                                Konfirmasi Hapus
                              </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <i class="fas fa-question-circle mr-2"></i>
                              Apakah Anda yakin ingin menghapus transaksi ini?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fas fa-times mr-1"></i>Batal
                              </button>
                              <a href="index.php?page=delete_transaksi&id_transaksi=<?= $item['id_transaksi'] ?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt mr-1"></i>Hapus
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php
                      }
                    } else {
                      echo "<tr><td colspan='8' class='text-center'><i class='fas fa-info-circle mr-2'></i>Tidak ada data transaksi ditemukan.</td></tr>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer bg-light text-center">
    <strong> &copy; 2024 <a href="#">Khamdanu Syakir 23.240.0046</a>.</strong> All rights reserved.
  </footer>
</div>

<!-- jQuery -->
<script src="public/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="public/adminlte/dist/js/adminlte.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        <?php if (isset($_GET['success_message'])): ?>
            $('#successToast').toast({ delay: 3000 });
            $('#successToast').toast('show');
        <?php endif; ?>

        <?php if (isset($_GET['error_message'])): ?>
            $('#errorToast').toast({ delay: 3000 });
            $('#errorToast').toast('show');
        <?php endif; ?>
    });
</script>
</body>
</html>