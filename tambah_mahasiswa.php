<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
	<link rel="stylesheet" href="js/bootstrap.bundle.js" type="text/class">
	<link rel="stylesheet" href="css/bootstrap.bootstrap.css" type="text/css" >
	<title></title>
</head>
<body>
	<h3>Tambah data mahasiswa</h3>
	<form action="proses_tambah_mahasiswa.php" method="post">
		Nama :
		<input type="text" name="nama" value="" class="form-control">
		Tanggal lahir :
		<input type="date" name="tanggal_lahir" value="" class="form-control">
		Jenis kelamin :
		<select name="jenis_kelamin" class="form-control">
			<option></option>
			<option value="L">Laki-laki></option>
			<option value="P">Perempuan></option>
		</select>
		Alamat :
		<textarea name="alamat" class="form-control" rows="4"></textarea>

		Username :
		<input type="text" name="username" value="" class="form-control">
		Password :
		<input type="password" name="password" value="" class="form-control">
		Jurusan :
		<select name="id_jurusan" class="form-control">
			<option></option>
			<?php
			include "koneksi.php";
			$qry_jurusan=mysqli_query($conn, "SELECT * FROM t_jurusan");
			while ($data_jurusan=mysqli_fetch_array($qry_jurusan)) 
			{ echo '<option value="'.$data_jurusan['id_jurusan'].'">
				'.$data_jurusan['nama_jurusan'].'</option>';
			}
			?>
		</select><tr>
		<td>
		<input type="submit" name="simpan" value="Tambah data" class="btn btn-primary">	
		</td></tr>
		</form>

	<script src="js/bootstrap.bundle.min.js" type="text/css" ></script>
	<script src="js/bootstrap.bundle.js" type="text/css"></script>
	<script type="js/bootstrap" type="text/css"></script>
</body>
</html>