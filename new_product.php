<div class="form">
  <h1>Tambah Barang Baru</h1>
  <a href="index.php" class="btn green">Kembali</a>
  <form method="post">
    <label for="nama">Nama Produk</label>
    <input type="text" id="nama" name="nama">
    <label for="ket">Keterangan</label>
    <textarea id="ket" name="ket"></textarea>
    <label for="harga">Harga</label>
    <input type="number" id="harga" name="harga">
    <label for="stok">Jumlah (Stok)</label>
    <input type="number" id="stok" name="stok" value="1" required>
    <button class="btn green" name="tambah">Tambah</button>
  </form>
</div>

<?php
  if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $keterangan = $_POST['ket'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $koneksi->query("INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES ('$nama','$keterangan','$harga','$stok')");
    echo "
    <script>
      alert('Produk berhasil ditambahkan!');
      location = 'index.php';
    </script>";
  }
?>