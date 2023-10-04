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
   <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
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
        Tambah Barang
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method = "POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Nama Barang</label>
                                            <input class="form-control" name="nama" placeholder="Nama Barang" autocomplete="off"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                                            </div>

                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input class="form-control" name="harga" placeholder="Harga" autocomplete="off"/>
                                        </div>

                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar" multiple/>
                                        </div>

                                <Input type = "submit" name = "simpan" value = "Simpan" class = "btn btn-primary" multiple>
                            </div>
                        </div>

      </form>
      <?php
      if(isset($_POST['simpan'])){
       // print_r($_FILES['gambar']);
       // menampung form
       $nama = $_POST['nama'];
       $deskripsi = $_POST['deskripsi'];
       $harga = $_POST['harga'];
       $status = $_POST['status'];

       //menampung data file upload
       $filename = $_FILES['gambar']['name'];
       $tmp_name = $_FILES['gambar']['tmp_name'];
       $type1 = explode('.', $filename);
       $type2 = $type1[1];

       //menampung format file
       $type_diizinkan = array('jpg', 'JPG', 'jpeg', 'png');

       //validasi format file
       if(!in_array($type2, $type_diizinkan)){
        echo '<script>alert("Format File Tidak Di Izinkan")</scri>';
       }else{
        move_uploaded_file($tmp_name, './barang/'.$filename);
        $insert = mysqli_query($conn,"INSERT INTO tb_product VALUES(
           null,
           '".$nama."',
           '".$harga."',
           '".$deskripsi."',
           '".$filename."', 
           '".$status."',
           null
            )");

            if($insert){
                echo '<script>alert("Tambah Data Berhasil")</script>';
                echo '<script>window.location="data-produk.php"</script>' ;
            }else{
                echo 'Gagal'.mysqli_error($conn);
            }
       }

       //proses upload file 
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

<script>
                        CKEDITOR.replace( 'deskripsi' );
                </script>


         <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    
   
</body>
</html>

