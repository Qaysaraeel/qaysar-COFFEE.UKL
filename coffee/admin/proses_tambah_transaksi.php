<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $id_user = $_POST['id_user'];
    $id_produk = $_POST['id_produk'];
    $total_transaksi = $_POST['total_transaksi'];
    $metode_transaksi = $_POST['metode_transaksi'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];

    // Masukkan data ke dalam tabel transaksi
    $query = "INSERT INTO transaksi (id_user, id_produk, total_transaksi, metode_transaksi, tanggal_transaksi) 
              VALUES ('$id_user', '$id_produk', '$total_transaksi', '$metode_transaksi', '$tanggal_transaksi')";
    
    if (mysqli_query($mysqli, $query)) {
        header("Location: transaction.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
    }

    mysqli_close($mysqli);
}
?>