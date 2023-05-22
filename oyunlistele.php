<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <style>
        body{
            background-image: url("resim9.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        table{
            color: red;
            font-size:20px;
            text-align: center;
            margin:0 auto;
        }
    </style>
</head>
<body>
<?php
/*Oyun ara kisminin belirlenen oyun icin degil tum oyunlar icin uyguladim. Boylelikle oyunların idsi, ismi, tarhi ve puani ortaya çikiyor. Bu arada puanlar sizin verdiginiz puanlar degil tum kullanicilarin verdigi puanların ortalamasi(Ben 7 vermistim neden 5 diye sorarsanız diye aciklamak istedim.)*/
include "config.php";
$listeleme=mysqli_query($db,"SELECT * FROM oyunlardb");
if(mysqli_num_rows($listeleme)){
    echo "<table>";
    echo "<tr>";
    echo "<th>Oyun ID</th>&nbsp";
    echo "<th>Oyun İsmi</th> ";
    echo "<th>Oyun Çıkış Tarihi&nbsp&nbsp</th>";
    echo "<th>Oyun Puanı</th>  ";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($listeleme)) {
        echo "<tr>";
    echo "<td>".$row['oyunid']."&nbsp"."</td>";
    echo "<td>" . $row['oyunismidb'] ."&nbsp&nbsp"."</td>";
    echo "<td>" . $row['oyuncikistarihidb'] ."&nbsp&nbsp"."</td>";
    echo "<td>" . $row['ortalama_puan'] ."</td>";
    echo "</tr>";
}
echo "<tr>"."<a href='merkez.php'> Ana Sayfaya Dön</a>";
echo "</table>";
    }

else{
    echo "Listelenecek oyun yok!!!";
    echo "<a href='merkez.php'> Ana Sayfaya Dön</a>";
}
mysqli_close($db);
?>

</body>
</html>
