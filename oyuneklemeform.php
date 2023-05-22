<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OyunEkleme</title>
    <style>
    /*Oyuneklemenin gorulen yuzu. Burada yaptigim sey sadece form olusturup oyunun ismin,yilini ve kac puan verdigini girmesini istemem.*/
        body{
            background-image: url("resim8.jpg");
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
<form action="oyunekleme.php" method="POST">
Oyun İsmi: <input type="text" name="oyunismi" ><br>
Oyun Çıkış Tarihi: <input type="date" name="oyuncikistarihi"><br>
Oyun Puanı: <input type="text" name="oyunpuani1"><br>
<input type="submit" value="Gönder!">
</form>
<a style="color:rgb(66, 206, 245);" href="merkez.php">Ana Sayfaya Dönmek için buraya Tıklayınız</a>
</body>
</html>