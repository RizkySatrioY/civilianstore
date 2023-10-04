<?php
//Include file koneksi ke database
include "db.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST["nama"];
$angkatan=$_POST["angkatan"];
$status=$_POST["status"]?? "";
$no_wa=$_POST["no_wa"];
$email=$_POST["email"];
$size=$_POST["size"];
$status_terbaru=$_POST["status_terbaru"];
$eventdt= date("Y-m-d");
$order_id=rand();

//Query input menginput data kedalam tabel anggota
mysqli_query($conn,"insert into anggota values ('','$nama','$angkatan','$status','$no_wa','$email','$size','$status_terbaru','$eventdt','$order_id')");

//Mengeksekusi/menjalankan query diatas	
//Kondisi apakah berhasil atau tidak

	header("location:./midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id");
?>