<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman data TRANSACTION</title>
    <link rel="icon" type="image/png" href="img/logotitle.png">
    <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="img/logo1.png" alt="">
        </a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <ul class="navbar">
            <li><a href="user.php">User</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="transaction.php">transaction</a></li>
        </ul>
        </div>
    </header>
    <section class="user">
    <h1 class="heading">Data Transaction</h1>
    <br>
    <a href="beli_produk.php" class="btn">Ayo Beli</a> <!-- Tambahkan link untuk memulai proses pembelian -->
    <br>
    <br>
    <!-- Tabel data transaksi tetap -->
    <table border="1" class="table">
        <tr>
            <th>Nomer</th>
            <th>Id Transaction</th>
            <th>Id User</th>
            <th>Id Products</th>
            <th>Total Transaction</th>
            <th>Transaction Method</th>
            <th>Transaction Date</th>
            <th>Action</th> 
            <th>Action</th><!-- Kolom tambahan untuk tombol hapus -->
        </tr>
        <?php
        include '../koneksi.php';
        $query_mysql = mysqli_query($mysqli, "SELECT * FROM transaksi") or die(mysqli_error($mysqli));
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)) { 
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo $data['id_transaksi']; ?></td>
            <td><?php echo $data['id_user']; ?></td>
            <td><?php echo $data['id_produk']; ?></td>
            <td><?php echo $data['total_transaksi']; ?></td>
            <td><?php echo $data['metode_transaksi']; ?></td>
            <td><?php echo $data['tanggal_transaksi']; ?></td>
            <td><a href="hapus_transaksi.php?id=<?php echo $data['id_transaksi']; ?>" class="btn-hapus">Hapus</a></td>
            <td><a href="update_transaksi.php?id=<?php echo $data['id_transaksi']; ?>" class="btn-update">Update</a></td>
        </tr>
        <?php } ?>
    </table>
    <br>
    <br>
    <a href="../index.php" class="btn">Log Out</a>
</section>

    <script src="main.js"></script>
</body>
</html>
