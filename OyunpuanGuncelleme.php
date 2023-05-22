<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PuanGuncelleme</title>
    <style>
        body{
            background-image: url("resim11.jpg");
            background-size: cover;
            background-repeat:no-repeat;
        }
    </style>
</head>
<body>
<?php
include "config.php";
/*Odevin en zor kismiydi burasi. Burasi icin oyunlardb tablosuna iki tane sutun ekledim. 1.Sayac 2.Ortalama Puan. Sizin girdiginiz puan ortalama puanin icin de tutuluyor ve bir islem sayesinde ortalama puan hesaplaniyor.*/
    if (isset($_POST["oyunid"]) && isset($_POST["yenipuan"])) {
        $oyunid = $_POST["oyunid"];
        $yenipuani = $_POST["yenipuan"];

        /* Eski puanı al*/
        $eskiPuanSorgu = mysqli_query($db, "SELECT oyunpuani, sayac, ortalama_puan FROM oyunlardb WHERE oyunid = '$oyunid'");
        $eskiPuanRow = mysqli_fetch_assoc($eskiPuanSorgu);
        $eskiPuan = $eskiPuanRow['oyunpuani'];
        $sayac = $eskiPuanRow['sayac'];
        $eskiOrtalamaPuan = $eskiPuanRow['ortalama_puan'];

        /* Yeni puanı hesapla*/
        $yeniPuan = $eskiPuan + $yenipuani;

        /* Yeni ortalama puanı hesapla*/
        $yeniOrtalamaPuan = ($eskiOrtalamaPuan * $sayac + $yenipuani) / ($sayac + 1);

        /* Sayacı güncelle*/
        mysqli_query($db, "UPDATE oyunlardb SET sayac = sayac + 1 WHERE oyunid = '$oyunid'");

        /* Oyunun puanını güncelle*/
        mysqli_query($db, "UPDATE oyunlardb SET oyunpuani = '$yeniPuan', ortalama_puan = '$yeniOrtalamaPuan' WHERE oyunid = '$oyunid'");

        echo "Oyun puanı güncellendi.<br>";
        echo "Ortalama puan: " . $yeniOrtalamaPuan . "<br>";
    }


mysqli_close($db);
?>

<form method="POST" action="OyunpuanGuncelleme.php">
Oyun ID'si: <input type="text" name="oyunid"><br>
Puan: <input type="text" name="yenipuan"><br>
<input type="submit" value="Oyunun Puanını Güncelle"><br>
</form>
<a href="merkez.php">Anasayfaya Dönün</a>
</body>
</html>
