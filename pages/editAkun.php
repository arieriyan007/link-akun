<?php 
include "../layouts/header.php";
if (isset($_GET['id'])) {
  $ida = $_GET['id'];

?>
  <div class="content-wrapper">
    <div class="container">
      <?php 
            $dataakun = mysqli_query($koneksi, "SELECT * FROM site_akun WHERE idakun='$ida'");
            while ($d = mysqli_fetch_array($dataakun)) {
              $ida = $d['idakun'];
              $situs = $d['situs'];
              $user = $d['userakun'];
              $pass = $d['passkun'];
              $nmlem = $d['nama_lembaga'];
              $jabatan = $d['jabatan'];
              $tanggal = $d['tanggal'];
              $email = $d['email'];
              ?>

            <div class="card-title">Update akun <?= $user; ?></div>
            <hr>
            <form method="POST" action="updateAkun.php">
            <label>Link situs</label>
            <input type="hidden" name="ida" value="<?= $ida; ?>">
            <input type="url" name="link" class="form-control" value="<?= $situs; ?>">
            <label>User akun</label>
            <input type="text" name="user" class="form-control" value="<?= $user; ?>" required>
            <label>Pasword akun</label>
            <input type="text" name="pswakun" class="form-control" value="<?= $pass; ?>" required>
            <label>Nama Instansi/Lembaga</label>
            <input type="text" name="instansi" class="form-control" value="<?= $nmlem; ?>" required>
            <label>Pemilik akun</label>
            <input type="text" name="pemilik" class="form-control" value="<?= $jabatan; ?>">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="<?= $email; ?>">
            <button type="submit" name="updateAkun" class="btn btn-light px-5 mt-4"><i class="fas fa-save"></i> Update</button>
          <?php 
          }
        }
          ?>
          </form>

      </div>
    </div>
    <!--End Row-->
<?php 
include "../layouts/footer.php";
?>