<?php
/*Oturum baslattim ve veri tabanı ile web sunucusunu birbirine bagladim.*/
session_start();
$db_host="localhost";
$db_uname="root";
$db_sifre="";
$db_name="oyun";
$db=mysqli_connect($db_host,$db_uname,$db_sifre,$db_name);
if(mysqli_connect_errno()){
    echo ("Bir hata meydana geldi...<br>Bağlanılamadı...");
    exit();
}
    $onem=false;
    if(isset($_SESSION["id"])&&$_SESSION["id"]>0){
        $kullaniciyicek=$db->query("SELECT * FROM kullanicilardb WHERE id=".$_SESSION["id"]);
        $onem=$kullaniciyicek->fetch_assoc();
    }
?>