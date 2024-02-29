<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="icon" type="image/png" href="img/logotitle.png">
    <link rel="stylesheet" href="styletransaksi.css"> <!-- Ganti style.css dengan stylesheet Anda -->
</head>
<body>
    <div class="container">
    <header>
        <h1 class="title">Tambah Transaksi Baru</h1>
        <section class="form">
        <form action="proses_tambah_transaksi.php" method="POST">
            <div class="form-group">
                <label for="id_user">ID User:</label>
                <input type="text" id="id_user" name="id_user" required>
            </div>
            <div class="form-group">
                <label for="id_produk">ID Produk:</label>
                <input type="text" id="id_produk" name="id_produk" required>
            </div>
            <div class="form-group">
                <label for="total_transaksi">Total Transaksi:</label>
                <input type="text" id="total_transaksi" name="total_transaksi" required>
            </div>
            <div class="group">
                <label for="metode_transaksi">Metode Transaksi:</label>
                <select id="metode_transaksi" name="metode_transaksi" required>
                    <option value="Cash">Cash</option>
                    <option value="Debit">Debit</option>
                    <option value="Credit">Credit</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_transaksi">Tanggal Transaksi:</label>
                <input type="text" id="tanggal_transaksi" name="tanggal_transaksi" placeholder="yyyy-mm-dd"required>
            </div>
            <button type="submit" name="submit" class="button">Submit</button>
        </form>
        </section>
    </header>
    </div>
</body>
</html>
