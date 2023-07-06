<?php
include("koneksi.php");
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>::Tambah Data::</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	          <i class="fa fa-bars"></i>
	          <span class="sr-only">Toggle Menu</span>
	        </button>
        </div>
	  		<h1><a href="index.php" class="logo">Toko Sumber Dana</a></h1>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="index.php"><span class="fa fa-home mr-3"></span> Halaman Utama</a>
          </li>
          <li>
              <a href="#"><span class="fa fa-user mr-3"></span> Data Pembeli</a>
          </li>
          <li class="active">
            <a href="stok_barang.php"><span class="fa fa-sticky-note mr-3"></span> Stok Barang</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-sticky-note mr-3"></span> Subcription</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Settings</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-paper-plane mr-3"></span> Information</a>
          </li>
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
      <div class="container">
        <div class="col-md-12">
            <h3 style="margin: 20px 0px 20px 0px">Tambah Barang</h3>
            <form action="tambah_aksi.php" method="post" class="form_horizontal">
                <div class="mb-3">
                    <label for="kode_barang" class="from-label fw-bold">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control" placeholder="Masukkan Kode Barang">
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="from-label fw-bold">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
                </div>
            </form>
        </div>
    </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>