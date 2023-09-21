<?php 
include "../layouts/header.php";
?>
<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">
    
    <!--Start Dashboard Content-->
    
    <div class="card mt-3">
      <div class="card-content">
        
        </div>
      </div>  
      
      <div class="row">
        <!--Search/pencarian -->
            <form class="search-bar" method="GET" action="index.php">
              <input type="text" name="cari" class="form-control mb-2" placeholder="Pencarian nama situs/link" value="<?php if (isset($_GET['cari'])) {
                echo $_GET['cari'];
              } ?>">
              <a href="javascript:void();"><i class="icon-magnifier"></i></a>
              <!-- <input type="submit" value="Cari"> -->
            </form>

        <div class="col-12 col-lg-12">
          <div class="card">
            <div class="card-header">Data akun
              <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="tambahAkun.php">Tambah akun</a>
                <!-- button export data -->
                <a class="dropdown-item" href="export.php">Export data</a>

               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive table-bordered table-hover" border="1">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>No</th>
                     <th>Situs/Link</th>
                     <th>Akun</th>
                     <th>Password</th>
                     <th>Lembaga</th>
                     <th>Unit RSMP</th>
                     <th>Tanggal dibuat</th>
                     <th>Aksi</th>
                   </tr>
                   </thead>

                   <tbody>
                    <?php 
                    if (isset($_GET['cari'])) {
                      $cari = $_GET['cari'];
                      $data = "SELECT * FROM site_akun WHERE situs LIKE '%".$cari."%'";
                    } else {
                      $data = "SELECT * FROM site_akun";
                    }
                    //  akhir search/pencarian data
                    // membuat pagination perhalaman
                    // $batas = 5; //batas perhalaman
                    // $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1; //membuat perhalaman saja
                    // $halaman_awal =($halaman>1) ? ($halaman * $batas) - $batas : 0; //menjumlahkan halam dari halaman awal
                    
                    // $previous = $halaman-1;
                    // $next = $halaman+1;
                    
                    $dataakun = mysqli_query($koneksi, $data);
                    $no=1; //$halaman_awal+1; //pembuatan nomor urut
                    // $jumlah_data = mysqli_num_rows($dataakun); //menjumlah data didalam database
                    // $total_halaman = ceil($jumlah_data / $batas); //selanjutnya total halamannya dengan cara di bagi dari jumlah data/batas
                    // $data_akun = mysqli_query($koneksi, "SELECT * FROM site_akun limit $halaman_awal, $batas"); //dibagian ini data situs_akun di batasin untuk menampilkan semua datanya perhalaman
                      while ($d = mysqli_fetch_array($dataakun)) {//jangan lupa untuk $data_akun di ambil dari limitnya
                      ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['situs']; ?></td>
                        <td><?= $d['userakun']; ?></td>
                        <td><?= $d['passkun']; ?></td>
                        <td><?= $d['nama_lembaga']; ?></td>
                        <td><?= $d['jabatan']; ?></td>
                        <td><?= $d['tanggal']; ?></td>
                        <td>
                          <a href="editAkun.php?id=<?= $d['idakun']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                          <a href="?id=<?= $d['idakun']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                      </tr>
                      <?php 
                    }
                    ?>
                    <!-- delete data -->
                    <?php 
                    if (isset($_GET['id'])) {

                      // proses hapus data
                      mysqli_query($koneksi, "DELETE FROM site_akun WHERE idakun='$_GET[id]' ");

                      echo "Data akun telah dihapus";
                      echo "<meta http-equiv=refresh content=2;URL='index.php'>";
                    }
                    ?>
                    <!-- akhir delete data -->
                 </tbody>
                    
                </table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <!-- <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a> -->
    <!--End Back To Top Button-->
	
	<?php 
  include "../layouts/footer.php"
  ?>
