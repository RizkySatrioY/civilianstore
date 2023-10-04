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
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
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
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead><tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Angkatan</th>
                                            <th>No WA</th>
                                            <th>Jumlah baju</th>
                                            <th>Metode Pembayaran Bank</th>
                                            <th>Upload Bukti Pembayaran</th>
                                            <th>Aksi</th>
                                        </td>
                                        </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                        $ambildata = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY id_transaksi DESC");
                                        if(mysqli_num_rows($ambildata)>0){ 
                                        while($row = mysqli_fetch_array($ambildata)){
                                        ?>

                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['transaksi_nama'] ?></td>
                                        <td><?php echo $row['transaksi_angkatan'] ?></td>
                                        <td><?php echo $row['no_wa'] ?></td>
                                        <td><?php echo $row['baju'] ?></td>
                                        <td><?php echo $row['transaksi_bank'] ?></td>
                                        <td><a href="barang/<?php echo $row['bukti_gambar']?>" target="_blank"> <img src="barang/<?php echo $row['bukti_gambar']?>" width="50px"> </a></td>
                                            <td>
                                            <a href="hapus-transaksi.php?idk=<?php echo $row['id_transaksi']?>" class = "btn btn-danger" onclick="return confirm ('Apakah anda yakin ingin menghapusnya ? ')"><i class="fa fa-trash-o"></i></a>     
                                        </td>
                                        </tr>
                                        <?php }}else{ ?>
                                            <tr>
                                                <td colspan="7">Tidak ada Data</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
            <a href="./laporan/laporantransaksi_excel.php" target="blank" class="btn btn-default" style="margin-top: 8px"><i class="fa fa-print"></i>ExportToExcel</a> 
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>  
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
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
