
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Civilian Store</title>
    <link rel="icon" href="images/civilian.jpg">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/payment.css">
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


<div class="container">
    
<div class="container">

<div class="container">

<form action="st.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="row">

            <div class="col">
                <br><br><br><br><center><h3 class="title">konfirmasi pembayaran</h3></center><br>
                
                <div class="inputBox">
                <h2 class="">Atas Nama (Pengirim)*</h2><br>
                    <input type="text" name="nama" placeholder="Masukkan Nama" autofocus required>
                </div>
                <div class="inputBox">
                <h2 class="">Angkatan*</h2><br>
                    <input type="tel" name="angkatan" placeholder="Masukkan Angkatan Kalian" required>
                </div>
                <div class="inputBox">
                <h2 class="">No WA*</h2><br>
                    <input type="tel" name="no_wa" placeholder="Masukkan Nomor Hp" required>
                </div>
                <div class="inputBox">
                <h2 class="">Jumlah Baju yang di pesan*</h2><br>
                    <input type="tel" name="baju" placeholder="Masukkan Jumlah Baju" required>
                </div>
                <div class="form-group">
                <h2 class="">Metode Pembayaran Bank (yang dituju)*</h2><br>
            <select class="form-control" name="bank" required>
                                                <option value = "BCA">BCA </option>
                                                <option value = "BNI">BNI </option>
                                                <option value = "DANA">DANA </option>
                                            </select>
                                        </div>
            </div>
                <div class="inputBox">
                <h2 class="">Upload Bukti Pembayaran*</h2><br>
                    <input type="file" name="gambar" placeholder="Upload Bukti" required>
                </div>

    
        </div><br>

        <input type="submit" name = "simpan"  value ="Simpan" class="submit-btn">

         
</div>    
    
</body>
</html>