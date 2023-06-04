<?php
include("koneksi.php");
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>::Toko Sumber Dana::</title>
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
                <h3 style="margin: 20px 0px 5px 0px">Stok Barang</h3>
                <hr>
                <a href="tambah_barang.php" class="btn btn-success mt-2">Tambah Barang</a>
                <table class="table table-striped mt-4">
                    <thead>
                        <tr class="info">
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Satuan</th>
                            <th>Jumlah Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <?php
                    $sql = "select * from data_barang";
                    $query = mysqli_query($koneksi,$sql);

                    while($dbrg = mysqli_fetch_array($query)) {
                      echo "<tr>";
                      echo "<td>".$dbrg['kode_barang']."</td>";
                      echo "<td>".$dbrg['nama_barang']."</td>";
                      echo "<td>".$dbrg['harga_barang']."</td>";
                      echo "<td>".$dbrg['satuan']."</td>";
                      echo "<td>".$dbrg['jumlah_barang']."</td>";
                      echo "<td>";
                      echo "<a href='edit_barang.php?id=" . $dbrg['id']."'class='btn btn-primary'>Edit</a> &nbsp";
                      echo "<a href='hapus_barang.php?id=" . $dbrg['id']."'class='btn btn-danger'>Hapus</a>";
                      echo "</td>";
                      echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>