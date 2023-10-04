<?php
include 'db.php';
if(isset($_GET['idk'])){
    $delete = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi = '".$_GET['idk']. "'");
    echo '<script>window.location="transaksi.php"</script>' ;
}
?>