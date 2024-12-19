<?php
/*
== eşittir
!== eşit değildir.
<> eşit değildir.
< küçüktür.
> büyüktür.
<= küçük eşittir.
>= büyük eşittir.

&& ve
|| veya
*/
$a = 15;
$b = 35;

var_dump($a == $b); 
var_dump($a != $b);
var_dump($a < $b);
var_dump($a > $b);
var_dump($a <= $b);
var_dump($a >= $b);     

if ($a > $b) {
	echo $a."  ".$b."'den büyüktür.";
}
else{
	echo $a."  ".$b."'den küçüktür.". "<br>";
}

$renk = "siyah";
//switch ile if else aynı sayılabilir. İkiside koşullara göre çalışırlar.
switch ($renk) {
	case "mavi":
		echo "seçilen renk mavidir.";
		break;
	
	case "eflatun":
	    echo "seçilen renk eflatun";
		break;
	default: 
	echo "renk havuzunda bulunmayan renk seçildi veya renk hatalı yazıldı."; //Default eğer hiçbir değer uyuşmaz ise çalışacak kod.
}

$not = 71;

if ($not > 70) {
	echo "Öğrencinin Aldığı Not : pekiyi";
}
else if ($not > 45 ) {
	echo "Öğrencinin Aldığı Not : iyi";
}
if ($not < 45) {
	echo "Öğrencinin Aldığı Not : zayıf";
}
