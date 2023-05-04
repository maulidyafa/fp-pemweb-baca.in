<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_penerima    = $_POST['id_penerima'];
$nama           = $_POST['nama'];
$email          = $_POST['email'];
$alamat         = $_POST['alamat'];
$negara         = $_POST['negara'];
$kodepos        = $_POST['kodepos'];
$penerima      = $_POST['penerima'];
$hp             = $_POST['hp'];
$emoney         = $_POST['emoney'];
 
// query SQL untuk insert data ke dalam Mysql
$query="UPDATE pembayaran SET NAMA='$nama',EMAIL='$email',ALAMAT='$alamat',NEGARA='$negara'
    ,KODEPOS='$kodepos',PENERIMA='$penerima',HP='$hp',EMONEY='$emoney' where ID_PENERIMA='$id_penerima'";
mysqli_query($connect, $query);
// mengalihkan ke halaman indexpay.php
echo "<script>alert('Data Berhasil Diupdate!');window.location='tabelpay.php'</script>";
?>