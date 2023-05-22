<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GirisKontrol</title>
    <style>
        /*Tasarım için yaptım. Belki kullanici giremez diye. Giris kontrol sistemi yaptim. Formdan Post methodu ile bilgileri aldim ve veritabani ile karşilaştirdim. Sonuca göre merkeze gidebilir yaptim.*/
        body{
            background-image:url("resim3.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<?php
include "config.php";
$kullaniciadi=$_POST["kullaniciadi"];
$kullanicisifre=$_POST["kullanicisifre"];
$sonuc= $db->query("SELECT *FROM kullanicilardb WHERE kullaniciadidb='$kullaniciadi' AND kullanicisifredb='$kullanicisifre' LIMIT 1");

$satirsayisi= $sonuc->num_rows;
if($satirsayisi==0){
    echo "<p style='color: red; text-align: center;'>Kullanici bulunamadi...</p>";
    echo "<p style='color: red; text-align: center;'>Kayit olmak için <a href='kayit.php'><p style='color: white; text-align: center; text-decoration: none;'>Buraya tıklayın </p></a></p> <br><p style='color: red; text-align: center;'>Yeniden Giriş için ise <a href='giris.php'><p style='color: purple; text-align: center; text-decoration: none;'>Buraya tıklayın </p></a></p> ";
exit();
}

$satir = $sonuc->fetch_assoc();

$_SESSION["id"] = $satir["id"];
$_SESSION["username"] = $satir["username"];

header("Location: merkez.php");
?>
</body>
</html>