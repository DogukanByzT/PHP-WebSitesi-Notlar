<?php 
session_start();
$_SESSION['giriskontrol'] = 0;
session_destroy();
unset($_SESSION['username']);
header("location: index.php?i=cikis");


 ?>