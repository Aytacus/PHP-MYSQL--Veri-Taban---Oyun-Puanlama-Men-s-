<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cikis</title>
    <style>
        body{
            background-image:url("resim7.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
     <script type="text/javascript">
        /* Kullaniciya uyari vermesi icin yaptim birde index.php geri donebilmesi icin yaptim.(Kullanici Tarayici da geri tusa bastiginda)*/
        window.onbeforeunload = function () {
            window.location.href = 'index.php';
            return false;
        };
    </script>
</head>
<body>
<?php

include "config.php";
/*Oturum sonlanmasi icin yaptim.*/
session_unset();
session_destroy();
session_start();
session_regenerate_id(true);
?>
 Çıkış yaptınız!
<br>

<p text-align=center><a href='index.php'>Giriş Seçenekleri Olan Yere Dönmek İçin Tıklayınız</a></p>
   
</body>
</html>