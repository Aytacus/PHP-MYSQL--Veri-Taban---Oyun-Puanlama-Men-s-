<?php
include "config.php";
/*Oyun ekleme kisminin arkasinda calisan kod. Ayni kullanicilardb gibi bunda da veri tabanına yukledim(oyunlardb). Oyun eklendikten sonra da merkez.php'ye gonderdim.*/
if(isset($_POST["oyunismi"])){
    $formoyunismi=$_POST["oyunismi"];
    $formoyuncikistarihi=$_POST["oyuncikistarihi"];
    $formoyunpuani=$_POST["oyunpuani1"];
    $formsayac=1;
    $formoyunortpuani=$_POST["oyunpuani1"];
    $db=mysqli_connect($db_host,$db_uname,$db_sifre,$db_name);
$query=mysqli_query($db,"INSERT INTO `oyunlardb` (`oyunismidb`, `oyuncikistarihidb`, `oyunpuani`,`sayac`,`ortalama_puan`) VALUES ('".$formoyunismi."', '".$formoyuncikistarihi."', '".$formoyunpuani."', '".$formsayac."', '".$formoyunortpuani."')");
    if(mysqli_errno($db)!=0){
        echo "Bir hata meydana geldi!";
        exit();
    }
    echo "Oyun Eklendi<br>";
    header("Location: merkez.php");
    exit();
}
?>