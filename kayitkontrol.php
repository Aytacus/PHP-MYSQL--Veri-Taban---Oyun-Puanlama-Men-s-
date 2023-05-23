<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıtok</title>
    <style>
    /*Bu sistem ise kullanicilardb'e veri eklemesi icin yaptim gibi. Bu yuzden database'e ekledim. Eger sikinti olursa kayit olusamayacak. Eger sikinti yoksa kayit olusacak ve database'e kaydedilecek.*/
        body{
            background-image: url("resim1.jpg");
            background-size: cover;
            background-repeat: no-repeat;
        }
        .success-message{
            color: "aqua";
            size: 5;
            align: "center";
        }
    </style>
</head>
<body>
    <?php
    include "config.php";
    $yenikullaniciadi=$_POST["kullaniciadi"];
    $yenisifre=$_POST["kullanicisifre"];
    $yeniemail=$_POST["kullaniciemail"];
    $islem=$db->query("INSERT INTO kullanicilardb (kullaniciadidb,kullanicisifredb,epostadb) VALUES ('". $yenikullaniciadi."', '".$yenisifre."','".$yeniemail."')");

    if($islem==false){
        echo ("Kayıt oluşamadı");
        echo "<a href='index.php'>Giriş sayfasına dön</a>";
    }
    else{
        echo("Kayıt Başarılı<br>");
        echo("Giriş Ekranına gelmek için <a href='giris.php'>Buraya Tıklayın </a>");
    }
    ?>
</body>
</html>
