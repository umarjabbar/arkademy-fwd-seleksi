<?php
	$koneksi = new mysqli("localhost", "root", "", "arkademy");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Seleksi Fullstack Web Developer by Arkademy</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="container">
<?php 
	if(isset($_GET['page'])){
		if($_GET['page'] === "new-product"){
			include 'new_product.php';
		} else if ($_GET['page'] === "delete") {
			include 'delete_product.php';
		} else if ($_GET['page'] === 'update') {
			include 'update_product.php';
		}
	} else {
?>
	<h1>CRUD sederhana dengan PHP dan MySql</h1>
	<a href="index.php?page=new-product" class="btn green">Tambah Produk</a>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Nama</th>
				<th>Keterangan</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				$products = $koneksi->query("SELECT * FROM produk ORDER BY id DESC");
				while($product = $products->fetch_assoc()){
					?>
			<tr>
				<td style="width: 32px"><?= $no ?></td>
				<td><?= $product['nama_produk']?></td>
				<td><?= $product['keterangan']?></td>
				<td style="width: 98px"><?= $product['harga']?></td>
				<td style="width: 72px"><?= $product['jumlah']?></td>
				<td class="aksi">
					<a href="index.php?page=update&id=<?= $product['id'] ?>" class="btn orange">Update</a>
					<a href="index.php?page=delete&id=<?= $product['id'] ?>" class="btn red">Delete</a>
				</td>
			</tr>
				<?php $no++; } ?>
		</tbody>
	</table>
<?php
		}	
?>
	</div>
</body>
</html>