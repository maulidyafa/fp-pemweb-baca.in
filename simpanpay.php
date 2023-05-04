<?php
    include "koneksi.php";

    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $alamat = $_GET['alamat'];
    $negara = $_GET['negara'];
    $kodepos = $_GET['kodepos'];
    $penerima = $_GET['penerima'];
    $hp = $_GET['hp'];
    $emoney = $_GET['emoney'];

    $sql = "INSERT INTO pembayaran(NAMA, EMAIL, ALAMAT, NEGARA, KODEPOS, PENERIMA, HP, EMONEY) 
            VALUES('$nama', '$email', '$alamat', '$negara', '$kodepos', '$penerima', '$hp', '$emoney')";
            mysqli_query($connect, $sql);
    echo "<script>alert('Proses penukaran uang Anda berhasil diproses!');window.location='index.html'</script>";
?>
