<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
	<title></title>
</head>
<body>
	<h3>Data Jurusan</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th><th>JURUSAN</th><th>ANGKATAN</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include"koneksi.php";
				$qry_jurusan=mysqli_query($conn,"select * from t_jurusan");
				$no=0;
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) {
				$no++;?>
			<tr>
			<td><?=$no?></td><td><?=$data_jurusan['nama_jurusan']?></td>
			<td><?=$data_jurusan['angkatan']?></td>
			
			<td> <a href="hapus_jurusan.php?id_jurusan=<?=$data_jurusan['id_jurusan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">HAPUS</a> </td>
		
		</tr>
		<?php
		}
		?>
		</tbody>
	</table>
	<script src="js/bootstrap.bundle.min.js" type="text/css" ></script>
</body>
</html>