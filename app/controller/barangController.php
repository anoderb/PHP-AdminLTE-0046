<?php
require_once 'app/models/barangModels.php';

class barangController {
    private $userModel;

    public function __construct($dbConnection) {
        $this->userModel = new barangModels($dbConnection);
    }

    public function show($id_barang) {
        $user = $this->userModel->getBarangById($id_barang);
        require_once 'app/views/barang.php';
    }

     public function index() {
        $Barang = $this->userModel->getAllBarang(); 
        include 'app/views/barang.php'; 
    }
    
    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_barang = $_POST['id_barang'];
            $nama_barang = $_POST['nama_barang'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];
    
            try {
                $this->userModel->tambahBarang($id_barang, $nama_barang, $harga, $stok);
                header('Location: index.php?page=barang&success_message=Barang berhasil ditambahkan');
                exit();
            } catch (Exception $e) {
                header('Location: index.php?page=barang&error_message=Gagal menambahkan barang');
                exit();
            }
        }
    
        require_once 'app/views/tambah_barang.php';
    }
    
    public function edit($id_barang) {
        $barang = $this->userModel->getBarangById($id_barang);
        if (!$barang) {
            echo "Barang tidak ditemukan.";
            return;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama_barang = $_POST['nama_barang'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];
            try {
                $this->userModel->updateBarang($id_barang, $nama_barang, $harga, $stok);
                header('Location: index.php?page=barang&success_message=Barang berhasil diperbarui');
                exit();
            } catch (Exception $e) {
                header('Location: index.php?page=barang&error_message=Gagal mengedit barang');
                exit();
            }
        }
    
        require_once 'app/views/edit_barang.php';
    }
    



    // public function delete($id_barang) {
    //     $this->userModel->deleteBarang($id_barang);
    //     header('Location: index.php?page=barang');
    //     exit();
    // }
    public function delete($id_barang) {
        try {
            $this->userModel->deleteBarang($id_barang);
            header('Location: index.php?page=barang&success_message=Barang berhasil dihapus');
        } catch (PDOException $e) {
            // Periksa jika error karena foreign key constraint
            if ($e->getCode() == '23000') {
                header('Location: index.php?page=barang&error_message=Barang tidak dapat dihapus karena masih terkait dengan data lain');
            } else {
                header('Location: index.php?page=barang&error_message=Terjadi kesalahan saat menghapus barang');
            }
        }
        exit();
    }
    
    
    
}
?>
