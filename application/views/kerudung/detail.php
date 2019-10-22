<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				  <div class="card-header">
				    Detail Data Mahasiswa
				  </div>
				  <div class="card-body">
				    <h5 class="card-title"><?= $kerudung['nama']; ?></h5>
				     <h6 class="card-subtitle mb-2 text-muted"><?= $kerudung['stok']; ?></h6>
				    <p class="card-text"><?= $kerudung['harga']; ?></p>
				    <p class="card-text"><?= $kerudung['bahan']; ?></p>
				    <p class="card-text"><?= $kerudung['warna']; ?></p>
				    <p class="card-text"><?= $kerudung['ukuran']; ?></p>
				    <a href="<?= base_url();?>kerudung" class="btn btn-primary">Kembali</a>
				  </div>
				</div>

		</div>
	</div>
</div>