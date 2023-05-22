<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KayitOl</title>
    <style>
        /*Giris sistemi gibi tasarim yaptim. Form gonderme yaparak kayitkontrol.php'ye gitmesini sagladim. Eger kullanici benim zaten hesabim var diyorsa index.php'ye donebilir.(Anasayfaya done tiklayarak)*/
        body{
            background-image:url("resim2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            margin-top: 20%;
            margin-left: 47%;
            margin-right: 50%;
            
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
<form action="kayitkontrol.php" method="POST">
Kullanıcı Adı: <input type="text" name="kullaniciadi"><br>
Şifre: <input type="password" name="kullanicisifre"><br>
E-mail: <input type="email" name="kullaniciemail"><br>

<input type="submit" value="Kayıt Ol!">
</form>
<a style="color: white;" href="index.php">Ana Sayfaya Dönmek için buraya Tıklayınız</a>
</body>
</html>