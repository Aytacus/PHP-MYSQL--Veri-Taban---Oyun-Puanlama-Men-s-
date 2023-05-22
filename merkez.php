<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"> 
    <meta http-equiv="Pragma" content="no-cache">
    <title>AnaSayfa</title>
    <style>
    /*Bu kisim tamamen arayuz tarzi dusundum. Buradan oyun aramaya,oyun eklemeye,olan oyunu puanlamaya,oyunu silmeye ve cikisa tasimaya.*/
        body{
            background-image: url("resim6.jpg");
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
    border: 4px;;
    }

  .button:hover {
    background-color: #2980b9;
  }
    </style>
</head>
<body>
    <a class ="button" href="oyunara.php">Listede oyun aramak için tıklayın</a><br><br>
    <a class ="button" href="oyuneklemeform.php">Oyun Eklemek için Tıkla </a><br><br>
    <a class ="button" href="oyunlistele.php">Listedeki Oyunları Görmek için Tıklayın</a><br><br>
    <a class ="button" href="OyunpuanGuncelleme.php">Olan Oyuna Puan Vermek İçin Tıklayın...</a><br><br>
    <a class ="button" href="oyunsil.php">Oyun Listesinden Oyun Kaldırmak İçin Tıkla</a><br><br>
    <a class ="button" href="cikis.php">Çıkış için Tıklayın</a>
</body>
</html>