 <div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
  <div class="card-header">
    Form Tambah Data Kerudung
  </div>
  <div class="card-body">
   
    

   <form action="" method="post">
				<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
     <small  class="form-text text-danger"><?= form_error('nama');   ?>.</small>
  </div>


  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" id="stok" name="stok">
    <small  class="form-text text-danger"><?= form_error('stok');   ?>.</small>
  </div>

  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga">
    <small  class="form-text text-danger"><?= form_error('harga');   ?>.</small>
  </div>

  <div class="form-group">
    <label for="bahan">Bahan</label>
    <input type="text" class="form-control" id="bahan" name="bahan">
    <small  class="form-text text-danger"><?= form_error('bahan');   ?>.</small>
  </div>

  <div class="form-group">
    <label for="warna">Warna</label>
    <input type="text" class="form-control" id="warna" name="warna">
    <small  class="form-text text-danger"><?= form_error('warna');   ?>.</small>
  </div>

   <div class="form-group">
    <label for="ukuran">Ukuran</label>
    <select class="form-control" id="ukuran" name="ukuran">
      <option value="S">S</option>
      <option value="M">M</option>
      <option value="L">L</option>
      <option value="XL">XL</option>
      <option value="XXL">XXL</option>
      
     
    </select>
  </div>
  <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>

 
				
			</form>
  </div>
</div>
			
			

		</div>
		
	</div>
</div>