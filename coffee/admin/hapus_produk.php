<?php
include '../koneksi.php';

$id_produk = $_GET['id']; // Ambil id produk dari parameter URL

// Hapus data produk dari database
$hapus = mysqli_query($mysqli, "DELETE FROM products WHERE id_produk = '$id_produk'") or die(mysqli_error($mysqli));

if($hapus) {
    // Redirect kembali ke halaman products.php setelah berhasil menghapus
    header("Location: products.php");
    exit();
} else {
    echo "Gagal menghapus produk.";
}
?>
