<?php  
require_once "modul/modul.php"; 
extract(getBookForUpdate($_GET)); 
?>

<div class="container-fluid p-3">
	<h3>Edit Data Buku</h3>
</div>
<div class="container-fluid">
	<form action="proses/buku-edit-proses.php" method="post" enctype="multipart/form-data" class="was-validated">
	<!---- Menggunakan DIV --->

	<div class="form-group">
		<label for="id_buku">ID Buku:</label>
		<input type="text" name="id_buku" value="<?php echo $id_buku; ?>" readonly="readonly" class="form-control form-control-sm" required>
		<div class="valid-feedback">Benar.</div>
		<div class="invalid-feedback">Mohon data ini disi dahulu</div>
	</div>

	<div class="form-group">
		<label for="judulbuku">Judul Buku: </label>
		<input type="text" name="judulbuku" id="judulbuku" value="<?php echo $judulbuku; ?>" class="form-control form-control-sm" required>
		<div class="valid-feedback">Benar.</div>
		<div class="invalid-feedback">Mohon data ini disi dahulu</div>
	</div>

	<div class="form-group">
		<label>Kategori: </label><br />
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="kategori" value="Ilmu Komputer" 
				<?php if($kategori == "Ilmu Komputer") { ?>
				checked
				<?php } ?>
				>Ilmu Komputer
			</label>	
		</div>
	
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="kategori" value="Karya Sastra" 
				<?php if ($kategori == "Karya Sastra") { ?>
					checked
				<?php } ?>
				>Karya Sastra	
			</label>	
		</div>

		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="kategori" value="Ilmu Agama" 
				<?php if ($kategori == "Ilmu Agama") { ?>
					checked
				<?php } ?>
				>Ilmu Agama	
			</label>	
		</div>
	</div>

	<div class="form-group">
		<label for="pengarang">Pengarang: </label>
		<textarea rows="2" id="pengarang" name="pengarang" class="form-control form-control-sm" required><?php echo $pengarang; ?></textarea>
		<div class="valid-feedback">Benar.</div>
		<div class="invalid-feedback">Mohon data ini disi dahulu</div>
	</div>
	
	<div class="form-group">
		<label for="penerbit">Penerbit: </label>
		<textarea rows="2" id="penerbit" name="penerbit" class="form-control form-control-sm" required><?php echo $penerbit; ?></textarea>
		<div class="valid-feedback">Benar.</div>
		<div class="invalid-feedback">Mohon data ini disi dahulu</div>
	</div>

	<div class="form-group">
		<label>Status: </label><br />
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="status" value="Dipinjam" 
				<?php if($status == "Dipinjam") { ?>
				checked
				<?php } ?>
				>Dipinjam
			</label>	
		</div>
	
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="radio" class="form-check-input" name="status" value="Tersedia" 
				<?php if ($status == "Tersedia") { ?>
					checked
				<?php } ?>
				>Tersedia	
			</label>	
		</div>
	</div>

	<div class="form-group">
		<input type="hidden" name="page" value="<?php echo $page; ?>" id="page">
		<input type="submit" name="update" value="Update" id="tombol-simpan" class="btn btn-primary">
	</div>
	<hr class="my-5">
	</form>
</div>