<div class="container-fluid p-3">
	<h3>Input Buku Baru</h3>
</div>

<div class="container-fluid pr-5-sm">
	<!-- <form action="proses/anggota-input-proses.php" method="post" enctype="multipart/form-data" class="was-validated"> -->
	
	<table class="table table-striped table-responsive-sm">
		<tr>
			<td>ID Buku</td>
			<td>
					<input type="text" name="id_buku" class="form-control" id="id_buku" placeholder="Masukkan ID Buku" required>
					<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Judul Buku</td>
			<td><input type="text" name="judulbuku" class="form-control" id="judulbuku" placeholder="Masukkan Judul Buku" required>
				<div class="valid-feedback">Benar.</div>
					<div class="invalid-feedback">Mohon data ini disi dahulu</div>
			</td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="kategori" value="Ilmu Komputer" checked>Ilmu Komputer
					</label>	
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="kategori" value="Karya Sastra">Karya Sastra	
					</label>	
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="kategori" value="Ilmu Agama">Ilmu Agama	
					</label>	
				</div>
			</td>
		</tr>
		<tr>
			<td>Pengarang</td>
			<td>
				<textarea class="form-control" rows="2" cols="40" name="pengarang" id="pengarang" required></textarea>
				<div class="valid-feedback">Benar.</div>
				<div class="invalid-feedback">Mohon data dilengkapi</div>
			</td>
		</tr>
		<tr>
			<td>Penerbit</td>
			<td>
				<textarea class="form-control" rows="2" cols="40" name="penerbit" id="penerbit" required></textarea>
				<div class="valid-feedback">Benar.</div>
				<div class="invalid-feedback">Mohon data dilengkapi</div>
			</td>
		</tr>
		<tr>
			<td>Status</td>
			<td>
				<div class="form-check-inline">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="status" value="Tersedia" checked>Tersedia
					</label>	
				</div>
				<div class="form-check-inline">
					<label class="form-check-label">
					<input type="radio" class="form-check-input" name="status" value="Dipinjam">Dipinjam	
					</label>	
				</div>
			</td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir">
				<input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></td>
		</tr>
	</table>
	</form>
</div>