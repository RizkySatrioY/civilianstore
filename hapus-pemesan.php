<?php
include 'db.php';
if(isset($_GET['idk'])){
    $delete = mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota = '".$_GET['idk']. "'");
    echo '<script>window.location="datapemesan.php"</script>' ;
}
?>