<form action="" method="POST">
	<input type="text" name="ad" placeholder="adınız" required> <br>
	<input type="email" name="mail" placeholder="ornek@gmail.com" required> <br>
	<input type="text" name="captcha" placeholder="Doğrulama kodunu giriniz" required><br>
	<?php
	; 
	echo $dogrulama = rand(1111,9999);
	 ?> 
	<br><br> 
	<input type="submit" name="submit" value="Kaydet ve Gönder"><br>
	<input type="hidden" name="hcaptcha" value="<?= $dogrulama ?>"> 

	<?php
      if (@$_POST['submit']) {
      	if (@$_POST['captcha'] == @$_POST['hcaptcha']) {
      		echo "<b>Giriş başarılı</b>";
      	}
      	else{
      		echo "Giriş başarısız";
      	}
      }
	  ?>

</form>