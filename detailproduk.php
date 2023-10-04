<?php

include 'db.php';
$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '" .$_GET['id']."' ");
$p = mysqli_fetch_object($produk);
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
        <a href="login.php">Login</a>
    </nav>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    
</header>


<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"><span></span> </h1><br><br><br><br><br><br><br>

    <div class="box-container">

    <div class="box">
            <div class="image">
            <a href="barang/<?php echo $p->product_gambar ?>"><img src="barang/<?php echo $p->product_gambar ?>" width="250px" alt=""></a> 
            </div>
            <div class="content">
            <h2 class="heading"> <?php echo $p->product_nama?><span>[Open Pre - Order]</span> </h2>
            <span><?php echo $p->product_deskripsi?></span><br><br>
            <a href="#" class="title">Harga : Rp.<?php echo number_format($p->product_harga)?></a><br>
                <p></P>
                <a href="formpemesan.php" class="btn">Pesan</a>
            </div>
        </div>
        
</section>
