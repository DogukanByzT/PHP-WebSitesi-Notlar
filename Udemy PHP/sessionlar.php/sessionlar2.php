<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Giriş Yap</title>
</head>
<body>
<form action="" method="POST">
<input type="text" name="username" placeholder="Kullanıcı Adı" required><br> 
<input type="password" name="password" placeholder="****" required><br><br>

<input type="submit" name="submit" value="Giriş Yap">
<input type="reset" name="reset" value="Sıfırla">

</form>
<?php

error_reporting(0); // POST un başına @ koymadan hata almamasını sağlar
if ($_POST["submit"]) {
		if ($_POST["username"] == "DogukanByzT" && $_POST["password"] == "12345") {
		echo "Giriş Yapıldı";
		$_SESSION["kadi"] = $_POST["username"];
		header("Location: uye.php");
		}		 
			else{
			echo "Kullanıcı adı veya şifre yanlış";
			}
}

  ?>

</body>
</html>