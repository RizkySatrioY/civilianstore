<?php

include 'db.php';
$ambildata = mysqli_query($conn, "SELECT * FROM anggota WHERE id_anggota = '" .$_GET['id']."'");
if(mysqli_num_rows($ambildata) == 0){
    echo '<script>window.location="datapemesan.php"</script>';
}
$a = mysqli_fetch_object($ambildata);
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
<div class="panel panel-default">
<div class="panel-heading">
        Ubah Pemesan
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method = "POST" >
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" value="<?php echo $a->nama ?>"readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>Angkatan</label>
                                            <input class="form-control" name="angkatan" value="<?php echo $a->angkatan?>"readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>Pembayaran</label>
                                            <input class="form-control" name="status" value="<?php echo $a->status?>"readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>No WA:</label>
                                            <input class="form-control" name="no_wa" value="<?php echo $a->no_wa?>"readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" value="<?php echo $a->email?>"readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>Size</label>
                                            <input class="form-control" name="size" value="<?php echo $a->size?>"readonly/>
                                        </div>

                                        <div class="form-group">
                                            <label>Upload Bukti Transfer</label>
                                            <select class="form-control" name="status_terbaru">
                                                <option value = "Belum❌">-</option>
                                                <option value = "Sudah✅"> Sudah ✅ </option>
                                            </select>
                                        </div>
                                </div>

                                <Input type = "submit" name = "simpan" value = "Ubah" class = "btn btn-primary">
                            </div>
                        </div>

      </form>
                </div>
</div>
</div>                         
</div>


</form>
      <?php
      if(isset($_POST['simpan'])){
        $status_terbaru = ucwords($_POST['status_terbaru']);
        $update = mysqli_query($conn, "UPDATE anggota SET
                                status_terbaru = '".$status_terbaru."'
                                WHERE id_anggota = '".$a->id_anggota."'");
                    if(insert){
                        echo '<script>alert("Edit Data Berhasil")</script>' ;
                        echo '<script>window.location="datapemesan.php"</script>' ;
                    }else{
                        echo 'Gagal'.mysqli_error($conn);
                    }
      }
      ?>
                </div>
</div>
</div>                         
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