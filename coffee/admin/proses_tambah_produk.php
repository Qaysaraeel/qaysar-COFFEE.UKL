<?php
include '../koneksi.php';

// Inisialisasi variabel pesan error
$error = '';

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validasi input
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];
    $stock = $_POST['stock'];

    // Proses insert data ke database
    $query = "INSERT INTO products (id_produk, nama_produk, harga_produk, stock) 
              VALUES ('$id_produk', '$nama_produk', '$harga_produk', '$stock')";
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        // Redirect ke halaman products.php setelah berhasil menambahkan data
        header('Location: products.php');
        exit();
    } else {
        $error = 'Terjadi kesalahan saat menambahkan data. Silakan coba lagi.';
    }
}
?>
