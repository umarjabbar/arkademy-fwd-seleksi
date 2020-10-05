<?php
$id = $_GET['id'];

$koneksi->query("DELETE FROM produk WHERE id = $id");
echo "
<script>
  alert('Produk berhasil dihapus!');
  location = 'index.php';
</script>
";