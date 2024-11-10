<?php
class DashboardModel {
    // Fungsi untuk menghitung total barang
    public function getTotalBarang() {
        $db = getDBConnection();
        $query = "SELECT COUNT(*) AS totalBarang FROM barang";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['totalBarang'] : 0;
    }

    // Fungsi untuk menghitung total pelanggan
    public function getTotalPelanggan() {
        $db = getDBConnection();
        $query = "SELECT COUNT(*) AS totalPelanggan FROM pelanggan";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['totalPelanggan'] : 0;
    }

    // Fungsi untuk menghitung total transaksi hari ini
    public function getTotalTransaksi() {
        $db = getDBConnection();
        $query = "SELECT COUNT(*) AS totalTransaksi FROM transaksi";
        $stmt = $db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['totalTransaksi'] : 0;
    }
}
?>
