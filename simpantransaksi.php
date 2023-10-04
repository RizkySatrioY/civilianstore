<?php
//Include file koneksi ke database
include "db.php";

//menerima nilai dari kiriman form pendaftaran
$nama=$_POST["nama"];
$angkatan=$_POST["angkatan"];
$no_wa=$_POST["no_wa"];
$bank=$_POST["bank"];
$fileName = $_FILES['gambar']['name'];

//Query input menginput data kedalam tabel anggota
  $sql="insert into transaksi (nama,angkatan,no_wa,bank,gambar) values
		('$nama','$angkatan','$no_wa','$bank','$fileName')";
		move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($conn,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	?>
	<script type= "text/javascript">
	alert ("Data Berhasil Disimpan");
	window.location.href="coba.php";
</script>
<?php
  }

else {
	echo "Gagal simpan data anggota";
	exit;
}  

?>