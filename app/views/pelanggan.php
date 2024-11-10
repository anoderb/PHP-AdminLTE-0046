<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pelanggan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/adminlte/dist/css/adminlte.min.css">
</head>
<!-- Toast Notification -->
<body class="hold-transition sidebar-mini layout-fixed">
<div aria-live="polite" aria-atomic="true" style="position: relative; z-index: 1050;">
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
      Gagal menghapus pelanggan karena masih terikat di transaksi.
    </div>
  </div>
</div>

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
              <i class="fas fa-users text-warning mr-2"></i>Data Pelanggan
            </h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-4">
          <!-- Info boxes -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box shadow-sm">
              <span class="info-box-icon bg-warning"><i class="fas fa-user-friends"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><i class="fas fa-chart-line mr-1"></i>Total Pelanggan</span>
                <span class="info-box-number"><?php echo isset($pelanggan) ? count($pelanggan) : '0'; ?></span>
              </div>
            </div>
          </div>
        </div>

        <!-- Main card -->
        <div class="card shadow-sm">
          <div class="card-header bg-white">
            <div class="d-flex justify-content-between align-items-center">
              <h3 class="card-title font-weight-bold">
                <i class="fas fa-list-alt mr-2"></i>Daftar Pelanggan
              </h3>
              <a href="index.php?page=tambah_pelanggan" class="btn btn-success">
                <i class="fas fa-user-plus mr-2"></i>Tambah Pelanggan
              </a>
            </div>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead class="bg-light">
                  <tr>
                    <th scope="col" class="text-center"><i class="fas fa-hashtag"></i></th>
                    <th scope="col"><i class="fas fa-id-card mr-2"></i>ID Pelanggan</th>
                    <th scope="col"><i class="fas fa-user mr-2"></i>Nama Pelanggan</th>
                    <th scope="col"><i class="fas fa-map-marker-alt mr-2"></i>Alamat</th>
                    <th scope="col" class="text-center"><i class="fas fa-cogs mr-2"></i>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $nomor = 1;
                    if (isset($pelanggan) && is_array($pelanggan)) {
                      foreach ($pelanggan as $item) {
                  ?>
                  <tr>
                    <th scope="row" class="text-center"><?php echo $nomor++; ?></th>
                    <td><?php echo $item["id_pelanggan"]; ?></td>
                    <td><?php echo $item["nama_pelanggan"]; ?></td>
                    <td><?php echo $item["alamat"]; ?></td>
                    <td class="text-center">
                      <a href="index.php?page=edit_pelanggan&id_pelanggan=<?= $item['id_pelanggan'] ?>" class="btn btn-warning btn-sm" >
                        <i class="fas fa-user-edit mr-1"></i>Edit
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-<?= $item['id_pelanggan'] ?>">
                        <i class="fas fa-user-minus mr-1"></i>Hapus
                      </button>
                      <!-- Modal konfirmasi hapus -->
                      <div class="modal fade" id="modal-delete-<?= $item['id_pelanggan'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
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
                              Apakah Anda yakin ingin menghapus pelanggan ini?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fas fa-times mr-1"></i>Batal
                              </button>
                              <a href="index.php?page=delete_pelanggan&id_pelanggan=<?= $item['id_pelanggan'] ?>" class="btn btn-danger">
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
                      echo "<tr><td colspan='5' class='text-center'><i class='fas fa-info-circle mr-2'></i>Tidak ada data pelanggan ditemukan.</td></tr>";
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
    <strong>&copy;2024 <a href="#">Khamdanu Syakir 23.240.0046</a>.</strong> All rights reserved.
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
        <?php if (isset($_GET['error']) && $_GET['error'] == 'foreign_key'): ?>
            $('#errorToast').toast({ delay: 3000 });
            $('#errorToast').toast('show');
        <?php endif; ?>
    });
</script>

</body>
</html>