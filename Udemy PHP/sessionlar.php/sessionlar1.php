<?php
session_start();
$_SESSION['isim'] = "Doğukan";
$_SESSION["soyad"] = "Bayazit";
//unset $_SESSION["soyad"]; Sessionları silmek için kullanılır.
//session_destroy() tüm sessionları silmek için kullanılır.

echo "Hoşgeldin: <b>$_SESSION[isim] $_SESSION[soyad]</b>" ;

?>