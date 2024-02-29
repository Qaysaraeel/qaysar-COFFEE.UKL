<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="icon" type="image/png" href="img/logotitle.png">
    <link rel="stylesheet" href="styleproduk.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="title">Tambah Produk</h1>
        </header>
        <section class="form">
            <form action="proses_tambah_produk.php" method="POST">
                <label for="nama_produk">Nama Produk:</label><br>
                <input type="text" id="nama_produk" name="nama_produk"><br>
                <label for="harga_produk">Harga Produk:</label><br>
                <input type="text" id="harga_produk" name="harga_produk"><br>
                <label for="stock">Stock:</label><br>
                <input type="text" id="stock" name="stock"><br><br>
                <input type="submit" name="submit" class="button" value="Tambah Produk">
            </form>
        </section>
    </div>
</body>
</html>
