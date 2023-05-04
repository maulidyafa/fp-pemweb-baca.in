<?php
include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
		table {
            border-collapse: collapse;
            width: 100%;
        }
 
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            font-family: 'Poppins', sans-serif;
        }
        th {
            background-color: rgb(19, 110, 170);
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        tr:hover {background-color: #f5f5f5;}
        .act {
               display: inline-block;
               padding: 2px 5px;
               margin-bottom: 0;
               font-size: 14px;
               color: #333;
               text-align: center;
               vertical-align: middle;
               cursor: pointer;
               background-color: #ffffff;
               background-image: none !important;
               border: none;
               text-shadow: none;
               box-shadow: none;
               transition: all 0.12s linear 0s !important;
               font: 14px/20px 'Poppins', sans-serif;
               text-decoration: none;
          }
        .act-edit {
            color: #fff;
            background-color: #27ae60;
            border: 1px solid #ccc;
        }
        .act-hapus {
            color: #fff;
            background-color: #cc4e2e;
            border: 1px solid #d43f3a;
        }
        .act-edit, .act-hapus {
               text-shadow: 0 -1px 0 rgba(0,0,0,0.2);
               -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);
               box-shadow: inset 0 1px 0 rgba(255,255,255,0.15),0 1px 1px rgba(0,0,0,0.075);
        }
        .act-edit:hover{
            background: #2ecc71;
        }
        .act-hapus:hover{
            background: #d16e55;
        }
        button{
            display: inline-block;
            padding: 5px 10px;
            margin-bottom: 0;
            font-size: 18px;
            color: #fff;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-color: #27ae60;
            background-image: none !important;
            border: none;
            text-shadow: none;
            box-shadow: none;
            transition: all 0.12s linear 0s !important;
            font: 18px/20px 'Poppins', sans-serif;
            text-decoration: none;
        }
        button:hover{
            background: #2ecc71;
        }
	</style>
</head>
<body>
<h1 style="text-align:center; font: 40px/50px 'Poppins', sans-serif">DATABASE PEMBAYARAN</h1>
<a href="indexpay.html"><button>Tambah Data</button></a>
<br><br>
<table border="1">
<tr>
  <th>Nama</th>
  <th>Email</th>
  <th>Alamat</th>
  <th>Negara</th>
  <th>Kode Pos</th>
  <th>Akun Penerima</th>
  <th>No. Handphone</th>
  <th>Jenis E-Money</th>
  <th>Action</th>
</tr>
 
<?php

$query ="select * from pembayaran order by NAMA ASC";
$hasil = mysqli_query($connect, $query);
 
if(mysqli_num_rows($hasil) > 0){
    while($data = mysqli_fetch_array($hasil)){
        ?>
        <tr>
            <td><?= $data["NAMA"] ?></td>
            <td><?= $data["EMAIL"] ?></td>
            <td><?= $data["ALAMAT"] ?></td>
            <td><?= $data["NEGARA"] ?></td>
            <td><?= $data["KODEPOS"] ?></td>
            <td><?= $data["PENERIMA"] ?></td>
            <td><?= $data["HP"] ?></td>
            <td><?= $data["EMONEY"] ?></td>
            <td>
                <a href="editpayform.php?ID_PENERIMA=<?= $data['ID_PENERIMA']; ?>" 
                class="act act-edit">Edit</a>&nbsp;
                <a href="hapuspay.php?ID_PENERIMA=<?= $data['ID_PENERIMA']; ?>"
                class="act act-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
            </td >
            

        </tr>
        <?php
    }
}else{
    echo "0 result";
}
?>
  </table>
  </body>
</html>