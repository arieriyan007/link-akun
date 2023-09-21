<?php
include "../koneksi.php";
include "../cek.php";
?>

<html>
<head>
  <title>Semua Data Akun</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>

<!-- data index.php -->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
    
    </div>
 </div>  
	
	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Data akun
		  <div class="card-action">
             </div>
		 </div>
	       <div class="table-responsive table-bordered table-hover" border="1">
                 <table class="table align-items-center table-flush table-borderless" id="mauexport">
                  <thead>
                   <tr>
                     <th>No</th>
                     <th>Situs/Link</th>
                     <th>Akun</th>
                     <th>Password</th>
                     <th>Lembaga</th>
                     <th>Unit RSMP</th>
                     <th>Tanggal dibuat</th>
                    
                   </tr>
                   </thead>

                   <tbody>
                    <?php 
                    $no=1;
                    $dataakun = mysqli_query($koneksi, "SELECT * FROM site_akun");
                    while ($d = mysqli_fetch_array($dataakun)) {
                      $ida = $d['idakun'];
                      $situs = $d['situs'];
                      $user = $d['userakun'];
                      $pass = $d['passkun'];
                      $nmlem = $d['nama_lembaga'];
                      $jabatan = $d['jabatan'];
                      $tanggal = $d['tanggal'];
                    
                    ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $situs; ?></td>
                      <td><?= $user; ?></td>
                      <td><?= $pass; ?></td>
                      <td><?= $nmlem; ?></td>
                      <td><?= $jabatan; ?></td>
                      <td><?= $tanggal; ?></td>
                          
                    </tr>

                   <?php 
                    }
                   ?>
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

    <!-- script untuk export -->
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>