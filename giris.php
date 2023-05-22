<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <style>
    /*Tasarim icin yaptim. Altta ise giris formu hazirladim*/
        body{
            background-image: url("resim4.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            margin-top: 20%;
            margin-left: 47%;
            margin-right: 50%;
            
        }
        form{
            color:black;
        }
        @media (max-width: 600px) {
            body {
                margin: 25% auto;
                max-width: 80%;
            }
        }
    </style>
</head>
<body>
<?php
include "config.php";
?>
<form action="giriskontrol.php" method="POST">
Kullanıcı Adı: <input type="text" name="kullaniciadi" ><br>
Şifre: <input type="password" name="kullanicisifre"><br>
<input type="submit" value="Giriş Yap!">
</form>

<a style="color:rgb(66, 206, 245);" href="index.php">Ana Sayfaya Dönmek için buraya Tıklayınız</a>
</body>
</html>
