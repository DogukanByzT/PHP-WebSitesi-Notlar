<?php
/*
VERİ TİPLERİ:
integer: tam sayılar, kısaltması int'tir (10,200vs.)
float: ondalıklı sayılardır. (10.54 , 20.02)
string:"düz yazı" "a,b vs."
boolean: mantıksal ifadeler (True 1, False 0)
array: diziler
object: nesneler 
*/

$x = 20;
var_dump($x); //php için özel bir terimdir. Sırasıyla dosya konumunu, bulunduğu satırı, değişkinen türünü ve değerini verir.
$y = 25.65;
var_dump($y);
$isim = "Ahmet";
var_dump($isim); //string'te ilave olarak kaç karakter bulunduğunuda yazacaktır.
$boolean = true;
var_dump($boolean);
$renkler = array("kırmızı", "mavi", "sarı", "mor", "bordo");
var_dump($renkler);
define("_sitead","www.sitead.com.tr", ); //define sabit değerler için kullanılır,true yazılmasının sebebi büyük ile küçük harfleri ayırmaması içindir.
echo _sitead. "<br>"; //Ekrana yazdırma.
echo "__file__ çalıştığımız dosyanın konumunu gösterir.".  __file__. "<br>"; 
echo "__line__ kaçıncı satırda olduğunu gösterir.". __line__. "<br>";
echo "PHP_VERSION php'nin versiyonunu gösterir.". PHP_VERSION;