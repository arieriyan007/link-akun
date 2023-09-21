<?php 
include "../layouts/header.php"
?>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    <h4 class="text-center">TAMBAH AKUN BARU</h4>
    <div class="row mt-3">
      <div class="col-lg-12">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Input nama akun baru</div>
           <hr>
            <form method="POST" action="simpanAkun.php">
           <div class="form-group">
            <label for="input-1">Link situs</label>
            <input type="url" name="link" class="form-control" id="input-1" placeholder="silahkan masukkan nama situsnya" required autofocus>
           </div>
           <div class="form-group">
            <label for="input-2">User akun</label>
            <input type="text" name="user" class="form-control" id="input-2" placeholder="Masukkan user login situs" required>
           </div>
           <div class="form-group">
            <label for="input-3">Pasword akun</label>
            <input type="text" name="pswakun" class="form-control" id="input-3" placeholder="Masukkan password login situs" required>
           </div>
           <div class="form-group">
            <label for="input-4">Nama Instansi/Lembaga</label>
            <input type="text" name="instansi" class="form-control" id="input-4" placeholder="Nama instansi pemberi akses login" required>
           </div>
           <div class="form-group">
            <label for="input-5">Pemilik akun</label>
            <input type="text" name="pemilik" class="form-control" id="input-5" placeholder="Unit yg memiliki situs login" required>
           </div>
           <div class="form-group">
            <label for="input-6">Email</label>
            <input type="email" name="email" class="form-control" id="input-6" placeholder="Masukkan Email jika ada contoh@gmail.com">
           </div>
           <div class="form-group">
            <button type="submit" name="saveAkun" class="btn btn-light px-5"><i class="fas fa-save"></i> Simpan</button>
          </div>
          </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->


<?php 
include "../layouts/footer.php";
?>