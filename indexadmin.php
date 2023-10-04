<?php
include 'db.php';

//Total Data Pemesan
$get1 = mysqli_query($conn, "SELECT SUM(baju) AS total_baju FROM anggota;");
if(mysqli_num_rows($get1)>0){ 
while($tampil = mysqli_fetch_array($get1)){

//Total Data Pemesan yang belum upload bukti
$get2 = mysqli_query($conn, "SELECT * FROM anggota where status_terbaru ='Belum❌'");
$count2 = mysqli_num_rows($get2);

//Total Data Pemesan yang Sudah upload bukti
$get3 = mysqli_query($conn, "SELECT * FROM transaksi");
$count3 = mysqli_num_rows($get3);

$get4 = mysqli_query($conn, "SELECT * FROM anggota");
$count4 = mysqli_num_rows($get4);

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
font-size: 16px;"> Civilian Store &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust" onclick="return confirm ('Apakah anda yakin ingin Log Out ? ')">Logout</a> </div>
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

                
<marquee>Selamat Datang di Halaman Admin Civilian Store</marquee>    
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Dashboard</h2>   
                        <h5>Selamat Datang Admin </h5>
                    </div>
                </div>          
                 <!-- /. ROW  -->
                 <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-shopping-cart"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $tampil['total_baju']?></p>
                    <p class="text-muted">Total Order</p>
                </div>
             </div>
             <?php }}?>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?=$count4;?></p>
                    <p class="text-muted">Jumlah User</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-warning"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?=$count2;?></p>
                    <p class="text-muted">Belum Transaksi</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-credit-card"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?=$count3;?></p>
                    <p class="text-muted">Sudah Transaksi</p>
                </div>
             </div>
		     </div>


             
                    
                 <!-- /. ROW  -->
        
                </span>
             </div>
		     </div>
			</div>
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
      <!-- CUSTOM SCRIPTS -->
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
