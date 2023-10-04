 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="styleloginuser.css">
 
    <title>Halaman Login</title>
    <link rel="icon" href="images/civilian.jpg">
</head>
<body>
    <div class="alert alert-warning" role="alert">
    </div>




</header>
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 1rem; font-weight: 800;">Selamat Datang Di Website Civilian </p>
            <p class="login-text" style="font-size: 1rem; font-weight: 800;"> Login User</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email"  required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            
<?php  
if (isset($_POST['submit'])) {
    session_start();
include 'db.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $cek = mysqli_query($conn, "SELECT * FROM user WHERE email='".$email."' AND password='".MD5($password)."'");
    if (mysqli_num_rows($cek) > 0) {
        $d = mysqli_fetch_object($cek);
        $_SESSION['status_login'] = true;
        $_SESSION['u_global'] = $d;
        $_SESSION['id'] = $d->id;
        echo '<script>window.location="index.php"</script>';
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
            <h5 class="login-register-text">Anda belum punya akun? <a href="registeruser.php">Register</a></h5><br>
            <p class="login-register-text">Login Sebagai Admin ?   <a href="login.php">Login</a></p>
            
        </form>
    </div>
</body>
</html>
