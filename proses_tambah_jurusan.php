<?php
if ($_POST) {
	$nama_jurusan=$_POST['nama_jurusan'];
	$angkatan=$_POST['angkatan'];
	if (empty($nama_jurusan)) {
		echo "<script>alert('nama jurusan harus di isi');location.href='tampil_jurusan.php';</script>";
	} elseif(empty($angkatan)) {
		echo "<scrip>alert('angkatan tidak boleh kosong');location.href='tampil_jurusan.php';</script>";
	} else {
		include"koneksi.php";
		$insert=mysqli_query($conn, "insert into t_jurusan (nama_jurusan, angkatan) value ('".$nama_jurusan."','".$angkatan."')");
		if ($insert) {
			echo "<script>alert('Sukses menambahkan data jurusan');location.href='tampil_jurusan.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data jurusan');location.href='tampil_jurusan.php';</script>";
		}
	} 
}
?>