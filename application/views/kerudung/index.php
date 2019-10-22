<div class="container">

<?php if($this->session->flashdata('flash') ) : ?>
<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data kerudung<strong>berhasil</strong> <?= $this->session->flashdata('flash');   ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> </div></div>
<?php  endif; ?>

    <div class="row mt-3" >
      <div class="col-md-6">
        <a href="<?= base_url(); ?>kerudung/tambah" class="btn btn-primary">Tambah Data Kerudung</a>
      </div>
    </div> 

<div class="row mt-3">
        <div class="col-md-6">
        <form action="" method="post">
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Cari Data Kerudung" name="keyword">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit">Cari</button>
  </div>
</div> 
        </form> </div>
 </div>


    <div class="row">
    <div class="col-md-6">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrab.css">
    <h1>Data Kerudung</h1>
    <?php  if(empty($kerudung)) : ?>
        <div class="alert alert-danger" role="alert">
 Data Kerudung tidak ditemukan
</div>
    <?php endif;   ?>
   
       
        <table class="table table-bordered">
        <thead>
            <tr>
            <th>NAMA</th>
            <th>STOK</th>
            <th>HARGA</th>
            <th>BAHAN</th>
            <th>WARNA</th>
            <th>UKURAN</th>
            <th >OPSI</th>
            </tr>

        </thead>
        <?php foreach( $kerudung as $mhs) : ?>
        <tbody>
               
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['stok']; ?></td>
                <td><?= $mhs['harga']; ?></td>
               <td><?= $mhs['bahan']; ?></td>
               <td><?= $mhs['warna']; ?></td>
               <td><?= $mhs['ukuran']; ?></td>

               <td><a href="<?=  base_url(); ?>kerudung/hapus/<?= $mhs['id']; ?>"  class="btn btn-danger" onclick ="return confirm('yakin?')">DELETE</a>
               <a href="<?= base_url(); ?>kerudung/ubah/<?= $mhs['id'];  ?>" class="btn btn-warning" >EDIT</a>
               <a href="<?= base_url(); ?>kerudung/detail/<?= $mhs['id'];  ?>" class="btn btn-primary" >DETAIL</a>
             </td>
               


              
              
        </tbody>
        <?php endforeach; ?>
           
    </table>


 
    
    </div>
    </div>

</div>