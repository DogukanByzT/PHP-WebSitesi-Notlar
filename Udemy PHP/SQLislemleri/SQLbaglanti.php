<?php
define("HOST", "localhost"); //define : kesinlikle değişmeyecek işlemler
define("DBNAME", "udemy");
define("DBUSER", "root");
define("DBPASS", "");

try {

   $db = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", DBUSER, DBPASS);
   $db -> exec("SET NAMES 'utf8'; SET CHARSET 'utf8' ");

} catch(PDOExpection $ex) {

	echo $ex->getMessage();
}
 
  ?>