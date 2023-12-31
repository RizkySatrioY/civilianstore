<?php

include 'db.php';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Civilian</title>
    <link rel="icon" href="images/civilian.jpg">
	<!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>

<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexadmin.php">Admin</a> 
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Civilian Store &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
<!-- /. NAV TOP  -->
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="img/find_user.png" class="user-image img-responsive"/>
					</li>
				
                    <li>
                        <a  href="indexadmin.php"> Dashboard</a>
                    </li>
                       	

                    <li>
                        <a  href="datapemesan.php"> Data Pemesan</a>
                    </li>

                    <li>
                        <a  href="transaksi.php"> Transaksi</a>
                    </li>

                    <li>
                        <a  href="data-produk.php"> Data Barang</a>
                    </li>

                    <li>
                        <a  href="notif.php"> Notifikasi</a>
                    </li>

                </ul>
               
            </div>

        
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Barang
                        </div>
                        <br>
                        <a href="tambah-barang.php" class="btn btn-primary" style="margin-top: auto;"><i class="fa fa-plus"></i> Tambah Data</a>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table data-toogle="table"
                                data-search="true">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                        </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $produk = mysqli_query($conn, "SELECT * FROM tb_product ORDER BY product_id DESC");
                                        if(mysqli_num_rows($produk) > 0){
                                        while($row = mysqli_fetch_array($produk)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row['product_nama']?></td>
                                            <td><?php echo $row['product_deskripsi']?></td>
                                            <td>Rp. <?php echo number_format($row['product_harga']) ?></td>
                                            <td><a href="barang/<?php echo $row['product_gambar']?>" target="_blank"> <img src="barang/<?php echo $row['product_gambar']?>" width="50px"> </a></td>
                            
                                            <td>
                                                <a href="proses-hapus.php?idp=<?php echo $row['product_id']?>" class = "btn btn-danger" onclick="return confirm ('Apakah anda yakin ingin menghapusnya ? ')"><i class="fa fa-trash-o"></i></a>                                           
                                            </td>
                                        </tr>
                                        <?php }}else{ ?>
                                            <tr>
                                                <td colspan="6">Tidak ada Data</td>
                                        </tr> 

                                        <?php } ?>
                                        </tbody>

                                        <!-- /. ROW  -->
                 <hr />
               
               </div>
                        <!-- /. PAGE INNER  -->
                       </div>
                    <!-- /. PAGE WRAPPER  -->
                   </div>
                <!-- /. WRAPPER  -->
               <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
               <!-- JQUERY SCRIPTS -->
               <script src="js/jquery-1.10.2.js"></script>
                 <!-- BOOTSTRAP SCRIPTS -->
               <script src="js/bootstrap.min.js"></script>
               <!-- METISMENU SCRIPTS -->
               <script src="js/jquery.metisMenu.js"></script>
               <script src="js/dataTables/jquery.dataTables.js"></script>
               <script src="js/dataTables/dataTables.bootstrap.js"></script>
                   <script>
                       $(document).ready(function () {
                           $('#dataTables-example').dataTable();
                       });
               </script>
                    <!-- CUSTOM SCRIPTS -->
               <script src="js/custom.js"></script>
               
              
           </body>
           </html>
           
