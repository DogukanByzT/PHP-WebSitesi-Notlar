<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="resim"> <br>
	<input type="submit" name="submit">
	<?php
     	$uzanti = pathinfo(@$_FILES['resim']['name'], PATHINFO_EXTENSION);
     	$yeniad = "/resimler".uniqid().".".$uzanti;
     	 if (move_uploaded_file(@$_FILES['resim'],['tmp_name'], $yeniad)) {
     	 	echo "Dosya Başarıyla Yüklendi";
     	 }
     	 else{
     	 	echo"Dosya Yüklenmedi";
     	 }
	?>
</form>
</body>
</html>