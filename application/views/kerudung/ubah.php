 <div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
  <div class="card-header">
    Form Ubah Data Kerudung
  </div>
  <div class="card-body">
   
    

   <form action="" method="post">
    <input type="hidden" name="id" value="<?= $kerudung['id']; ?>">
				<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama"  value="<?= $kerudung['nama']; ?>">
     <small  class="form-text text-danger"><?= form_error('nama');   ?>.</small>
  </div>


  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" id="stok" name="stok"  value="<?= $kerudung['stok']; ?>">
    <small  class="form-text text-danger"><?= form_error('stok');   ?>.</small>
  </div>

  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga" value="<?= $kerudung['harga']; ?>">
    <small  class="form-text text-danger"><?= form_error('harga');   ?>.</small>
  </div>


  <div class="form-group">
    <label for="bahan">Bahan</label>
    <input type="text" class="form-control" id="bahan" name="bahan"  value="<?= $kerudung['bahan']; ?>">
    <small  class="form-text text-danger"><?= form_error('bahan');   ?>.</small>
  </div>

  <div class="form-group">
    <label for="warna">Warna</label>
    <input type="text" class="form-control" id="warna" name="warna" value="<?= $kerudung['warna']; ?>">
    <small  class="form-text text-danger"><?= form_error('warna');   ?>.</small>
  </div>

   <div class="form-group">
    <label for="ukuran">Ukuran</label>
    <select class="form-control" id="ukuran" name="ukuran">

      <?php  foreach($ukuran as $u) : ?>
        <?php  if($u == $kerudung ['ukuran']) :?>
          <option value="<?= $u; ?>" selected><?=  $u; ?></option>
        <?php  else : ?>
           <option value="<?= $u; ?>"><?=  $u; ?></option>
        <?php  endif; ?>
      
      
     <?php  endforeach; ?>
    </select> 
  </div>
  <button type="submit" name="ubah " class="btn btn-primary float-right">Ubah Data</button>

 
				
			</form>
  </div>
</div>
			
			

		</div>
		
	</div>
</div>