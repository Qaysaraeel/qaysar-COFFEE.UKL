<?php
// Include file koneksi ke database
include '../koneksi.php';

// Periksa apakah parameter id_transaksi telah diberikan dalam URL
if(isset($_GET['id'])) {
    $id_transaksi = $_GET['id'];

    // Periksa apakah form telah disubmit
    if(isset($_POST['submit'])) {
        // Ambil data yang dikirimkan melalui formulir
        // Di sini Anda harus menyesuaikan dengan nama kolom yang sesuai dengan tabel transaksi Anda
        $total_transaksi = $_POST['total_transaksi'];
        $metode_transaksi = $_POST['metode_transaksi'];

        // Update data transaksi di database
        $query = "UPDATE transaksi SET total_transaksi='$total_transaksi', metode_transaksi='$metode_transaksi' WHERE id_transaksi='$id_transaksi'";
        $result = mysqli_query($mysqli, $query);

        if($result) {
            // Redirect kembali ke halaman data transaksi setelah berhasil diupdate
            header("Location: transaction.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    // Ambil data transaksi berdasarkan id_transaksi
    $query = "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    // Jika parameter id_transaksi tidak diberikan, kembalikan pengguna ke halaman data transaksi
    header("Location: transaction.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Transaksi</title>
    <link rel="icon" type="image/png" href="img/logotitle.png">
    <link rel="stylesheet" href="styleproduk.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="title">Update Produk</h1>
        </header>
        <section class="form">
        <form method="POST" action="">
            <label for="total_transaksi">Total Transaksi:</label><br>
            <input type="text" id="total_transaksi" name="total_transaksi" value="<?php echo $data['total_transaksi']; ?>"><br>
            <label for="metode_transaksi">Metode Transaksi:</label><br>
            <input type="text" id="metode_transaksi" name="metode_transaksi" value="<?php echo $data['metode_transaksi']; ?>"><br><br>
            <input type="submit" name="submit" value="Update" class="button">
        </form>
        </section>
    </div>
    <script src="main.js"></script>
</body>
</html>
