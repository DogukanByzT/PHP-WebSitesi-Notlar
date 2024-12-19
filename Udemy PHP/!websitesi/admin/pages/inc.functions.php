<?php
 // veritabanına bağlan
header("Content-Type: text/html; charset=utf-8"); 
//eror_reporting(0);
setlocale(LC_ALL, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish'); //türkçe karakterlere izin verir

$DBhost = "localhost";
$DBuser = "root";
$DBpass =  "";
$DBname = "udemy";

try {
 	$db = new PDO("mysql:host=$DBhost;dbname=$DBname", $DBuser, $DBpass);

} 
catch(PDOException $e){
	echo $e->getMessage();
}
$db -> exec("SET NAMES `utf-8`;SET CHARSET `utf8`");

define("_URL","http://localhost/Udemy%20PHP/" ); //değişmeyecek değerlerde kullanılır.

  ?>