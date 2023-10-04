<?php

include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilian Store</title>
    <link rel="icon" href="images/civilian.jpg">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index.php#home" class="logo">
        <img src="images/civilian.jpg" alt="">
    </a>

    <nav class="navbar">
        <a href="index.php#home">Home</a>
        <a href="index.php#store">Civil Store</a>
        <a href="index.php#products">Product</a>
        <a href="index.php#contact">Contact</a>
    </nav>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    
</header>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ck.css">
</head>
<body>
 
<h1 class="heading"> Civil <span>Store</span> </h1><br><br><br>
<h1 class="heading"> Form <span> Pemesanan</span> </h1>

    <div class="registration-form">
    <form action="simpan-pendaftaran2.php" method="post" autocomplete="on">
        <form>
        <div class="box-container">
<div class="container">
            
            <div class="form-group">
            <h5 style="color:#000000;">Nama Lengkap</h5>
                <input type="text" name="nama" class="form-control item" placeholder="Masukan nama anda" autofocus required/>
            </div>
            <div class="form-group">
            <h5 style="color:#000000;">Angkatan</h5>
                <input type="number" name="angkatan" class="form-control item" placeholder="Masukan angkatan" required/>
            </div>
            <div class="form-group">
            <select class="form-control" name="status" style="display: none;">
                                                <option value = "Lunas">Lunas </option>
                                            </select>
            </div>
            <div class="form-group">
            <h5 style="color:#000000;">No WA</h5>
            <input type="tel" name="no_wa" class="form-control item" placeholder="Masukan No WA"  required/>
            </div>
            <div class="form-group">
            <h5 style="color:#000000;">E-Mail</h5>
                <input type="email" class="form-control item" name="email" placeholder="Email"  required>
            </div>
            <div class="form-group">
            <h5 style="color:#000000;">Jumlah Baju yang Dipesan</h5>
                <input type="tel" class="form-control item" name="baju" placeholder="Jumlah Baju" required>
            </div>
            <div class="form-group">
            <h5 style="color:#000000;">Size</h5>
            <select class="form-control" name="size">
                                                <option value = "S">S </option>
                                                <option value = "M">M </option>
                                                <option value = "L">L </option>
                                                <option value = "XL">XL</option>
                                                <option value = "XXL">XXL </option>
                                                <option value = "XXXL">XXXL </option>
                                            </select>
                                        </div>
            </div>
            <div class="form-group">
            <input type="hidden" name="status_terbaru" value = "Belum❌" style="display: none;">
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-block create-account">Submit</button>

            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
