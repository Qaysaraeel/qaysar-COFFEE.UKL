<?php
// Include file koneksi ke database
include '../koneksi.php';

// Periksa apakah parameter id_transaksi telah diberikan dalam URL
if(isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];

    // Hapus data transaksi dari database
    $query = "DELETE FROM transaksi WHERE id_transaksi='$id_transaksi'";
    $result = mysqli_query($mysqli, $query);

    if($result) {
        // Redirect kembali ke halaman data transaksi setelah berhasil dihapus
        header("Location: transaction.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($mysqli);
    }
} else {
    // Jika parameter id_transaksi tidak diberikan, kembalikan pengguna ke halaman data transaksi
    header("Location: transaction.php");
    exit;
}
?>
