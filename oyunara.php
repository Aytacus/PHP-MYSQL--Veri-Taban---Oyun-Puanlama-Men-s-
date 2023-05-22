<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arama</title>
    <style>
        body{
            background-image: url("resim10.jpg");
            background-size: cover;
            background-repeat:no-repeat;
            margin: 0 auto;
        }
        table{
            color: red;
            margin:0 auto;
            font-size: 20px;
        }
    </style>
</head>
<body>
<?php
include "config.php";
/*Kodun en rahat yerlerinden biriydi. Form olusturup bu sefer php ile get ile alarak. O oyun database'de var mı yok mu kontrol ettim. Varsa ise ekrana yazdirdim.*/
if (isset($_GET["arama"])) {
    $arananOyun = $_GET["arama"];

    $query = mysqli_query($db, "SELECT * FROM oyunlardb WHERE oyunismidb LIKE '%$arananOyun%'");

    if (mysqli_num_rows($query) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Oyun ID&nbsp</th>";
        echo "<th>Oyun İsmi</th> ";
        echo "<th>Oyun Çıkış Tarihi&nbsp&nbsp</th>";
        echo "<th>Oyun Puanı</th>  ";
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>".$row['oyunid']."&nbsp"."</td>";
            echo "<td>" . $row['oyunismidb'] . "&nbsp&nbsp" . "</td>";
            echo "<td>" . $row['oyuncikistarihidb'] . "&nbsp&nbsp" . "</td>";
            echo "<td>" . $row['ortalama_puan'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Aranan oyun bulunamadı.";
    }

    mysqli_close($db);
}
?>
<form method="GET" action="oyunara.php">
    <input type="text" name="arama" placeholder="Oyun adı">
    <button type="submit">Ara</button>
</form>
<br><br>
<a href="merkez.php" color="white">Ana Sayfaya Dönmek İçin Tıklayınız...</a>
</body>
</html>