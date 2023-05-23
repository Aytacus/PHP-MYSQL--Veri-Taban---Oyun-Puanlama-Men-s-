<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silim</title>
    <style>
        body{
        background-image: url("resim12.jpg");
            background-size: cover;
            background-repeat: no-repeat;}
    </style>
</head>
<body>
<form action="oyunsil.php"  method="POST">
    Oyunun ID: <input type="text" name="oyunID"><br>
    <input type="submit" value="Oyunu Listeden Kaldır!"><br>
    Ana sayfaya geçmek için <a href='merkez.php'>tıklayınız</a>
</form>
<?php
include "config.php";
/*Forma silmek istedigimiz oyunun idsini gonderiyoruz. Bu sayede oyun siliniyor. Databaseden silinmesi icin Delete yapip oyunlardan oyunid arastirip o satiri tamamen siliniyor.*/
if(isset($_POST["oyunID"])){
$oyunidi = $_POST["oyunID"];

$silimislemi = "DELETE FROM oyunlardb WHERE oyunid = '$oyunidi'";

if ($db->query($silimislemi) === TRUE) {
    echo "Oyun Silindi.<br>";
    echo "Ana sayfaya geçmek için <a href='merkez.php'>tıklayınız</a>";
} else {
    echo "Veri silme işlemi başarısız " ;
}
}
?>
</body>
</html>
