<?php 
require_once "functions.php";

//VERİTABANI EKLEME İŞLEMLERİ
$baslik = "bu bir aciklamadir";
$aciklama = "bu bir aciklamadir.";
$insert = $db -> prepare("INSERT INTO `haberler`(`baslik`, `aciklama`)VALUES(:baslik, :aciklama)");
$insert -> bindValue(":baslik",$baslik, PDO::PARAM_STR);
$insert -> bindValue(":aciklama", $aciklama, PDO::PARAM_STR);
if ($insert->execute()) {
 echo "Başarıyla Eklendi.";
} else {
    echo "Ekleme işlemi başarısız";
}
 ?>
