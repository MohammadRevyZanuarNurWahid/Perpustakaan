<?php
	if ($_GET['id_mahasiswa']) {
		include "koneksi.php";
		$qry_hapus=mysqli_query($conn, "delete from t_mahasiswa where id_mahasiswa='".$_GET['id_mahasiswa']."'");
		if ($qry_hapus) {
			echo"<script>alert('Sukses hapus mahasiswa');location.href='tampil_mahasiswa.php';</script>";	
		} else {
			echo"<script>alert(Gagal hapus mahasiswa');location.href='tampil_mahasiswa.php';</script>";
		}
	}
?>