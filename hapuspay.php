<?php
    include "koneksi.php";

    $id_penerima = $_GET['ID_PENERIMA'];

    $query = "DELETE FROM pembayaran WHERE ID_PENERIMA = '$id_penerima'";
            mysqli_query($connect, $query);

            echo "<script>alert('Data Berhasil Dihapus!');window.location='tabelpay.php'</script>";
            
?>
