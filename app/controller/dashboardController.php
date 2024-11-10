<?php
// Menggunakan model
include 'app/models/dashboardModels.php';

class DashboardController {
    public function index() {
        // Membuat instance model
        $dashboardModel = new DashboardModel();

        // Mengambil data
        $totalBarang = $dashboardModel->getTotalBarang();
        $totalPelanggan = $dashboardModel->getTotalPelanggan();
        $totalTransaksi = $dashboardModel->getTotalTransaksi();

        // Mengirimkan data ke view
        include 'app/views/dashboard.php';
    }
}
?>
