<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<style type="text/css">

table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}
</style>
<body>
<table style="width: 100%;">
	<thead>
		<td>ID PESANAN</td>
		<td>ID MENU</td>
		<td>TANGGAL PESAN</td>
		<td>TANGGAL KIRIM</td>
		<td>JUMLAH ORDER</td>
		<td>STATUS ORDER</td>
		<td>TOTAL HARGA</td>
		<td>ALAMAT KIRIM</td>
	</thead>
	<tbody>
		<?php foreach ($data as $x) { ?>
		<tr>
			<td><?= $x['id_pesanan'] ?></td>
			<td><?= $x['id_menu'] ?></td>
			<td><?= $x['tanggal_pesan'] ?></td>
			<td><?= $x['tanggal_kirim'] ?></td>
			<td><?= $x['jumlah_order'] ?></td>
			<td><?= $x['status_order'] ?></td>
			<td><?= $x['total_harga'] ?></td>
			<td><?= $x['alamat_kirim'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table><br>
<a href="<?= base_url() ?>"><button>Back</button></a>
</body>
</html>