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

                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Pemesan
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                            <th>No</th>
                                            <th>ID Pemesanan</th>
                                            <th>Nama Pemesan</th>
                                            <th>Angkatan</th>
                                            <th>No WA</th>
                                            <th>Email</th>
                                            <th>Size</th>
                                            <th>Jumlah Baju</th>
                                            <th>Tanggal Memesan</th>
                                            <th>Upload Bukti</th>
                                            <th>Aksi</th>
                                        </td>
                                        </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        $ambildata = mysqli_query($conn, "SELECT * FROM anggota ORDER BY id_anggota DESC");
                                        if(mysqli_num_rows($ambildata)>0){ 
                                        while($tampil = mysqli_fetch_array($ambildata)){
                                        ?>
                                        
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $tampil['order_id'] ?></td>
                                        <td><?php echo $tampil['nama'] ?></td>
                                        <td><?php echo $tampil['angkatan'] ?></td>
                                        <td><?php echo $tampil['no_wa'] ?></td>
                                        <td><?php echo $tampil['email'] ?></td>
                                        <td><?php echo $tampil['size'] ?></td>
                                        <td><?php echo $tampil['baju'] ?></td>
                                        <td><?php echo $tampil['eventdt'] ?></td>
                                        <td><?php echo $tampil['status_terbaru'] ?></td>
                                            <td>
                                            <a href="edit-pemesan.php?id=<?php echo $tampil['id_anggota']?>"class = "btn btn-info"><i class="fa fa-edit"></i></a>
                                            <a href="hapus-pemesan.php?idk=<?php echo $tampil['id_anggota']?>" class = "btn btn-danger" onclick="return confirm ('Apakah anda yakin ingin menghapusnya ? ')"><i class="fa fa-trash-o"></i></a> 
                                        </td>
                                        </tr>
                                        <?php }}else{ ?>
                                            <tr>
                                                <td colspan="10">Tidak ada Data</td>
                                        </tr>
                                        <?php } ?>
            
                                        <a href="./laporan/laporan_excel.php" target="blank" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i>ExportToExcel</a>   
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
