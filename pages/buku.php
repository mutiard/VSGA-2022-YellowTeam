<?php require_once "modul/modul.php"; ?>
<!-- TAMPIL JUDUL -->
<div class="container-fluid p-3 text-center">
	<h3>Tampil Data Buku</h3>
</div>

<!-- MEMBUAT MENU GABUNGAN -->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 p-2">
			<div class="btn-group">
				<a href="index.php?p=Buku-input" class="btn btn-primary">Tambah Buku
				</a>
			</div>

		</div>

		<div class="col-sm-3 p-2">
			<div class="nav-sm justify-content-end">

			<form class="form-inline" method="POST">
			<div class="input-group">
  				<input type="text" class="form-control" name="pencarian" id="pencarian" placeholder="Cari Pengguna">
  				<div class="input-group-append">
    				<button class="btn btn-success" type="submit" name="submit">Cari Buku</button>
  				</div>
			</div>
			</form>

			</div>

		</div>
	</div>
</div>

<div class="container-fluid p-3">
	<?php getTampilBukuRev($_GET, $_SERVER['REQUEST_METHOD']); ?>
</div>