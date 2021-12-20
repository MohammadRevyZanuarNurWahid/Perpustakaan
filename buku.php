<?php
	include "header.php";
?>
<h3>Daftar Buku</h3>
<div class="row">
	<?php
	include "koneksi.php";
	$qry_buku=mysqli_query($conn, "select * from buku");
	while ($dt_buku=mysqli_fetch_array($qry_buku)) {
	?>
	<div class="col-md-3">
		<div class="card">
			<img src="coding.jpg" class="card-img-top">
			<div class="card-body">
				<h5 class="card-tittle"><?=$dt_buku['judul_buku']?></h5>
				<p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>
				<a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Pinjam</a>
			</div>
		</div>
	</div>
	<?php
	}
	?>
</div>
<?php
	include "footer.php";
?>