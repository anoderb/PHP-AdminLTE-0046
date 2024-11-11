<?php
require_once 'app/models/pelangganModels.php';

class pelangganController {
    private $userModel;

    public function __construct($dbConnection) {
        $this->userModel = new pelangganModels($dbConnection);
    }

    public function show($id_pelanggan) {
        $user = $this->userModel->getpelangganById($id_pelanggan);
        require_once 'app/views/pelanggan.php';
    }

     public function index() {
        $pelanggan = $this->userModel->getAllpelanggan(); 
        include 'app/views/pelanggan.php'; 
    }
    
    // public function tambah() {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $id_pelanggan = $_POST['id_pelanggan'];
    //         $nama_pelanggan = $_POST['nama_pelanggan'];
    //         $alamat = $_POST['alamat'];
           
    
    //         $this->userModel->tambahpelanggan($id_pelanggan, $nama_pelanggan, $alamat, );
    //         header('Location: index.php?page=pelanggan');
    //         exit();
    //     }
    
    //     require_once 'app/views/tambah_pelanggan.php';
    // }

    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_pelanggan = $_POST['id_pelanggan'];
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $alamat = $_POST['alamat'];
    
            try {
                $this->userModel->tambahpelanggan($id_pelanggan, $nama_pelanggan, $alamat);
                header('Location: index.php?page=pelanggan&success_message=Pelanggan berhasil ditambahkan');
                exit();
            } catch (Exception $e) {
                header("Location: index.php?page=pelanggan&error_message=" . urlencode("Gagal menambahkan pelanggan: " . $e->getMessage()));
                exit();
            }
        }
    
        require_once 'app/views/tambah_pelanggan.php';
    }
    


    public function edit($id_pelanggan) {
        $Pelanggan = $this->userModel->getpelangganById($id_pelanggan);
        if (!$Pelanggan) {
            echo "Pelanggan tidak ditemukan.";
            return;
        }
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $alamat = $_POST['alamat'];
            try {
                $this->userModel->updatepelanggan($id_pelanggan, $nama_pelanggan, $alamat);
                header('Location: index.php?page=pelanggan&success_message=Pelanggan berhasil diupdate');
                exit();
            } catch (Exception $e) {
                header("Location: index.php?page=pelanggan&error_message=" . urlencode("Gagal mengupdate pelanggan: " . $e->getMessage()));
                exit();
            }
        }
    
        require_once 'app/views/edit_pelanggan.php';
    }
    

    public function delete($id_pelanggan) {
        try {
            $this->userModel->deletePelanggan($id_pelanggan);
            header('Location: index.php?page=pelanggan&success_message=Pelanggan berhasil dihapus');
        } catch (PDOException $e) {
            if ($e->getCode() == '23000') {
                header('Location: index.php?page=pelanggan&error_message=Gagal menghapus pelanggan: Data terkait masih digunakan.');
            } else {
                header('Location: index.php?page=pelanggan&error_message=Terjadi kesalahan saat menghapus pelanggan');
            }
        }
        exit();
    }
    

    
}
?>