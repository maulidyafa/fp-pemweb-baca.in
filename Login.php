<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/stylelogin.css">
    <style type="text/css"> 
    </style>
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-book"></i> Baca.in </a>
    <div class="icons">
        <div class="fas fa-cog" id="cog-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>
</header>

    <h1 class="heading"> <br></h1>
    <center><table>
        <tr>
            <td>
                <div class="container2">
                <div>
                <form method="POST" action="../index2.php">
                    <input name="tujuan" type="hidden" value="LOGIN" >
                    <center><br><b><h1>Login</h1></b><br></center>
                    <p> Username </p>
                    <p><input type="text"placeholder="No.Handphone/Username/Email" autofocus style="width:345px; height: 30px; border:2px solid #1ef3f3; border-radius: 5px;"required></p><br>
                    <p> Password </p>
                    <p><input type="text"placeholder="Password" autofocus style="width:345px; height: 30px; border:2px solid #1ef3f3; border-radius: 4px;" required></p>
                    <br><center><a href="#" class="btnlogin">LOG IN</a></center><br><br>
                    <p>Don't have an account?&ensp;&ensp;<a href="SignUp.php" class="btnsignup">Sign Up</a></p>
                </div>
            </td>
        </tr>
    </table></center>















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
<footer></footer>
</html>