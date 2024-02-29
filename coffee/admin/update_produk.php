<?php
// Include file koneksi ke database
include '../koneksi.php';

// Periksa apakah parameter id_produk telah diberikan dalam URL
if(isset($_GET['id'])) {
    $id_produk = $_GET['id'];

    // Periksa apakah form telah disubmit
    if(isset($_POST['submit'])) {
        // Ambil data yang dikirimkan melalui formulir
        $nama_produk = $_POST['nama_produk'];
        $harga_produk = $_POST['harga_produk'];
        $stock = $_POST['stock'];

        // Update data produk di database
        $query = "UPDATE products SET nama_produk='$nama_produk', harga_produk='$harga_produk', stock='$stock' WHERE id_produk='$id_produk'";
        $result = mysqli_query($mysqli, $query);

        if($result) {
            // Redirect kembali ke halaman data produk setelah berhasil diupdate
            header("Location: products.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }

    // Ambil data produk berdasarkan id_produk
    $query = "SELECT * FROM products WHERE id_produk='$id_produk'";
    $result = mysqli_query($mysqli, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    // Jika parameter id_produk tidak diberikan, kembalikan pengguna ke halaman data produk
    header("Location: products.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Produk</title>
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
            <label for="nama_produk">Nama Produk:</label><br>
            <input type="text" id="nama_produk" name="nama_produk" value="<?php echo $data['nama_produk']; ?>"><br>
            <label for="harga_produk">Harga Produk:</label><br>
            <input type="text" id="harga_produk" name="harga_produk" value="<?php echo $data['harga_produk']; ?>"><br>
            <label for="stock">Stock:</label><br>
            <input type="text" id="stock" name="stock" value="<?php echo $data['stock']; ?>"><br><br>
            <input type="submit" name="submit" value="Update" class="button">
        </form>
        </section>
    </div>

    <script src="main.js"></script>
</body>
</html>
