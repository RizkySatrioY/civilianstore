<?php

include 'db.php';

?>

<?php
if(isset($_POST['simpan'])){
       // print_r($_FILES['gambar']);
       // menampung form
$nama=$_POST["nama"];
$angkatan=$_POST["angkatan"];
$no_wa=$_POST["no_wa"];
$baju=$_POST["baju"];
$bank=$_POST["bank"];

       //menampung data file upload
$filename = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];
$type1 = explode('.', $filename);
$type2 = $type1[1];

//menampung format file
$type_diizinkan = array('jpg', 'JPG', 'jpeg','JPEG', 'png', 'PNG');

//validasi format file
if(!in_array($type2, $type_diizinkan)){
echo '<script>alert("Format File Tidak Di Izinkan")</scri>';
}else{
move_uploaded_file($tmp_name, './barang/'.$filename);
$insert = mysqli_query($conn,"INSERT INTO transaksi VALUES(
null,
'".$nama."',
'".$angkatan."',
'".$no_wa."',
'".$baju."',
'".$bank."',
'".$filename."'
)");

if($insert){
echo '<script>alert("Tambah Data Berhasil")</script>';
echo '<script>window.location="upload.php"</script>' ;
}else{
echo 'Gagal'.mysqli_error($conn);
}
}

       //proses upload file 
}
?>