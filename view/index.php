<?php 

require_once '../config/koneksi.php';
require_once '../model/database.php';
include '../model/tampil.php';
$koneksi = new Database($host,$user,$pass,$db);
$tampil = new Barang($koneksi);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>data siswa</title>
</head>
<body>
	<table cellspacing="0" cellpadding="10" border="1" align="center">
		<h1 align="center">Data Siswa</h1>
		<thead>
			<tr>
				<th>Nis</th>
				<th>Nama Siswa</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Alamat</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			$no = 1;
			$show = $tampil->tampil();
			while ($data = $show->fetch_object()):?>
			<tr>
				<td>
					<?= $data->nis; ?>
				</td>
				<td>
					<?= $data->nama_siswa; ?>
				</td>
				<td>
					<?= $data->jenis_kelamin; ?>
				</td>
				<td>
					<?= $data->agama; ?>
				</td>
				<td>
					<?= $data->alamat; ?>
				</td>
			</tr>
		<?php endwhile ?>
		</tbody>
	</table>
</body>
</html>