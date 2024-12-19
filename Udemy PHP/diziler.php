<?php

$meyveler = array("Elma", "Armut","Portakal", "Çilek", "Ayva"); //ilk yol

$meyveler2[0] =   "Elma";
$meyveler2[1] =   "Armut";
$meyveler2[2] =   "Portakal"; //İkinci yol.
$meyveler2[3] =   "Çilek";
$meyveler2[4] =   "Ayva";

echo $meyveler2[1];

foreach ($meyveler as $m) {
	echo $m."<br>";
}

//ÇOK BOYUTLU DİZİLER

$sporlar = array(
"Topla Oynananlar" => array(1=>"Futbol", 2=> "Basketbol", 3 => "Voleybol"),
"Atletizm" => array(4=>"Koşu", 5=> "Uzun Atlama")
);
print_r($sporlar);
echo $sporlar["Topla Oynananlar"][2]."<br>";

/*Dizileri Sıralamak İçin:
sort:[değer]küçükten büyüğe, key value korunmaz.
rsort: [değer]büyükten küçüğe, key value korunmaz
shuffle: [değer]rastgele, key value korunmaz
asort: [değer]küçükten büyüğe, key value korunur
arsort: [değer]büyükten küçüğe, key value korunur
ksort: [key]küçükten büyüğe, key value korunur.
krsort: [key]büyükten küçüğe, key value korunur.
eğer key value korunuyorsa atanan değerlerin büyüklüğüne göre sıralama gerçekleştirilir.
*/

$sayilar = array("bir"=>1
	,"iki"=>2,
	"üç"=>3);

asort($sayilar); //asortta atadığımız keyler aynı şekilde durur (bir,iki,üç)
print_r($sayilar);
sort($sayilar); //asortta atadığımız keyler küçükten büyüğe direk sıralanır (0,1,2)
print_r($sayilar);
unset($sayilar[0]);