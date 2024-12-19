<?php 

for ($i=0; $i<20 ;$i++) 
{ 
if ($i%2==0) 
	echo $i."<br>"; //çift sayıları ekrana yazdırır.
}

$dizi = array(1,2,3,4,5,6,7,8,9,10);

foreach ($dizi as $d) { // dizinin yanındaki "d" değeri onun anahtarıdır. Döngü içinde o isimleri çağrılır.
	echo "$d-"."<br>";
}

$isim = array(
"İsim" => "Doğukan",
"Soyisim" => "Bayazit", //yan yana da yazılabilir alt altada.
 "Yaş" => "20");
foreach ($isim as $key => $value) {
	echo "$key". " " .":". " " .$value."<br>"; //key Eşittir işaretinden öncekileri yani anahtarları (İsim,Soyisim,Yaş), value ise eşittir işaretinden sonrasını temsil eder (Doğukan, Bayazit, 20.)
}

$sayı = "1";
while ($sayı < 20) { //While bir şartın yerine getirilmesi halinde çalışan döngüye denir. Eğer şart sürekli yerine getirilirse sonsuz bir döngü oluşur.
	echo $sayı;
	$sayı++;
	//break; Döngüye girmemesini sağlıyor
}