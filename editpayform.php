<?php
include 'koneksi.php';
 
$id_penerima = $_GET['ID_PENERIMA'];
 
$query      = mysqli_query($connect, "select * from pembayaran where ID_PENERIMA='$id_penerima'");
$row        = mysqli_fetch_array($query);
 
 
// membuat data e-money menjadi dinamis dalam bentuk array
$emoney   = array('GoPay','Dana','OVO','LinkAja');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="stylepay.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<header class="header">

    <a class="logo"> <i class="fas fa-book"></i> Baca.in </a>

    <div class="icons">
        <div class="fas fa-bell" id="bell-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

</header>
<body>

<div class="container">

    <form id="pembayaran" method="POST" action="editpaydb.php">

        <div class="row">

            <div class="col">

                <h3 class="title">alamat penerima</h3>
                <input type="hidden" value="<?php echo $row['ID_PENERIMA'];?>" name="id_penerima">
                <div class="inputBox">
                    <span>Nama :</span>
                    <input type="text" name="nama" placeholder="Nama Lengkap"
                    value="<?php echo $row['NAMA'] ?>">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" placeholder="example@email.com"
                    value="<?php echo $row['EMAIL'] ?>">
                </div>
                <div class="inputBox">
                    <span>Alamat :</span>
                    <input type="text" name="alamat" placeholder="Alamat lengkap"
                    value="<?php echo $row['ALAMAT'] ?>">
                </div>
    

                <div class="flex">
                    <div class="inputBox">
                        <span>negara:</span>
                        <input type="text" name="negara" placeholder="Indonesia"
                        value="<?php echo $row['NEGARA'] ?>">
                    </div>
                    <div class="inputBox">
                        <span>kode pos :</span>
                        <input type="text" name="kodepos" placeholder="123 456"
                        value="<?php echo $row['KODEPOS'] ?>">
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">pembayaran e-money</h3>

                <div class="inputBox">
                    <span>Jenis penukaran yang diterima:</span>
                    <img src="imagespay/banner-logo.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Nama penerima:</span>
                    <input type="text" name="penerima" placeholder="masukkan nama penerima"
                    value="<?php echo $row['PENERIMA'] ?>">
                </div>
                <div class="inputBox">
                    <span>Nomor Handphone :</span>
                    <input type="text" name="hp" placeholder="08xxxxxxxxxx"
                    value="<?php echo $row['HP'] ?>">
                </div>
                <div class="inputBox">
                    <span>pilih jenis e-money :</span>
                    <select name="emoney" id="emoney">
                             <?php
                               foreach ($emoney as $e){
                                echo "<option value='$e' ";
                                echo $row['EMONEY']==$e?'selected="selected"':'';
                                echo ">$e</option>";
                            }
                             ?>
                      </select>
                </div>

                

            </div>
    
        </div>

        
        <input  type="button" class="cancel-btn" onclick="window.location.replace('index.html')" value="Cancel">
        <input type="submit" value="submit" class="submit-btn" name="submit">

    </form>

</div>    
    
</body>
</html>