<?php
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GamePoints</title>
    <style>
    /*Ilk girdigimizde bu ekran var. Ekranin mantigi giris yap, kayit ol ve githup linkime ulasilabilir yaptim.*/
        body{
            background-image: url("resim5.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #3498db;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }

  .button:hover {
    background-color: #2980b9;
  }
    </style>
</head>
<body>
<h1 style="text-align: center; color: white;">GamePoints Sistemine Hoşgeldiniz</h1>
<h3 style="text-align: center; color: white;"><a class="button"href=giris.php>Giriş İçin Tıkla</a></h3>
<h3 style="text-align: center; color: white;"><a class="button"href=kayit.php>Kayıt için Tıkla</a></h3> 
<h3 style="text-align: center; color: white;"><a class="button"href=kayit.php>Kayıt için Tıkla</a></h3>   
</body>
</html>
