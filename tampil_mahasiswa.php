<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
	<h3>Data Mahasiswa</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>TANGGAL LAHIR</th>
				<th>JENIS KELAMIN</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>JURUSAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$qry_mahasiswa=mysqli_query($conn,"SELECT * FROM t_mahasiswa JOIN t_jurusan ON t_jurusan.id_jurusan = t_mahasiswa.id_jurusan");
			$no=0;
			while ($data_mahasiswa=mysqli_fetch_array($qry_mahasiswa))
			{ 
				$no++;
			?>
				<tr>
					<td><?=$no?>
					</td>
					<td><?=$data_mahasiswa['nama']?>
					</td>
					<td><?=$data_mahasiswa['tanggal_lahir']?>
					</td>
					<td><?=$data_mahasiswa['jenis_kelamin']?>
					</td>
					<td><?=$data_mahasiswa['alamat']?>
					</td>
					<td><?=$data_mahasiswa['username']?>
					</td>
					<td><?=$data_mahasiswa['nama_jurusan']?>	
					</td>
					<td><a href="ubah_mahasiswa.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>" class="btn btn-success">Ubah</a> | <a href="hapus_mahasiswa.php?id_mahasiswa=<?=$data_mahasiswa['id_mahasiswa']?>" onclick="return confirm('Apakah anda yakin akan mengahapus data ini?')" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
		<script src="js/bootstrap.bundle.min.js" type="text/css" ></script>
		<script src="js/bootstrap.bundle.js" type="text/css"></script>
		<script type="js/bootstrap" type="text/css"></script>
</body>
</html>