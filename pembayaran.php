<?php
include 'db.php';
$order_id = $_GET['order_id'];
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

<section class="blogs" id="blogs">

<h1 class="heading"> Lakukan <span>Pembayaran</span> </h1>
<h2 style="color:#0">.</h2>
<h2 style="color:#0">.</h2>
<h2 style="color:#0">.</h2>
    <div class="box-container">
    <h1 class="heading"> Lakukan <span>Pembayaran</span> </h1>

        <div class="box">
            
            <div class="content">
            <span>ID Pemesanan Anda</span>
                <?php
                $ambildata = mysqli_query($conn, "SELECT * FROM anggota WHERE order_id='".$order_id."'");
                if(mysqli_num_rows($ambildata)>0){ 
                while($tampil = mysqli_fetch_array($ambildata)){
                ?><p><?php echo $tampil['order_id']?><p><?php }}?>
                
                <a href="#" class="title">A/N Civilian Store </a>
                <span>DANA</span>
                <p>085156011372</p>
                <span>BNI</span>
                <p>023141262327</p>
                <span>BCA</span>
                <p>3151603813</p>
                <p></p>
                <a href="#" class="title">Jika ada kendala bisa menghubungi no dibawah ini</a>
                <p><img src="images/WA-icon.png" width="50px"><a href="https://api.whatsapp.com/send?phone=6281230530792&text=Hi Admin,Saya ada kendala dalam pemesanan saya.
                Foto bukti :">Hubungi via Whatsapp</a></p>
                <a href="#" class="title">Jika Sudah Transfer,Langsung Konfirmasi </a>
    <a href="upload.php" class="btn">Konfirmasi Pembayaran</a><br><br>
            </div>
        </div>
    </div>

</section>

