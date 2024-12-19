<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title></title>
	<form action="" method="GET">
		<input type="text" name="ad" placeholder="Adınızı Giriniz."><br>
		<input type="text" name="soyad" placeholder="Soyadınızı Giriniz"><br>
		<input type="email" name="mail" placeholder="mail adresiniz"><br>
		Cinsiyetiniz; <br>
		Erkek <input type="radio" name="cinsiyet" value="Erkek"><br> 
		Kadın<input type="radio" name="cinsiyet" value="Kadın"><br>
		<p>Doğum Tarihiniz:</p>
		<select name="gun">
			<?php
			for ($i=0; $i <=31 ; $i++) { 
				echo '<option value='.$i.'"">'.$i.'</option>'; //aralara nokta gelmesinin sebebi değişken olması
			}
			?>
		</select>

		<select name="ay">
				<?php
		$aylar = array('Ocak' ,"Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık");
			foreach ($aylar as $ay) {
				echo '<option value='.$ay.'"">'.$ay.'</option>';
			}
				?>
		</select>
	
		<select name="yil">
			<?php
			for ($z=1985; $z <=date("Y") ; $z++) {  //date"Y" güncel olarak bulunduğu yılı gösterir 
				echo '<option value='.$z.'"">'.$z.'</option>'; //aralara nokta gelmesinin sebebi değişken olması
			}
			?>
		</select>

		<input type="submit" name="kaydet">
		<input type="reset" name="sıfırla">
		
	</form>
	<hr>
	<?php 
    if (@$_GET["kaydet"]) { //@ hata almamızı önler.
    	echo "AD: <b>$_GET[ad]</b><br>
    		 SOYAD: <b>$_GET[soyad]</b><br>
    		 email: <b>$_GET[mail]</b><br>
    		 cinsiyet: <b>$_GET[cinsiyet]</b><br>
    		 Doğum Tarihi: <b>$_GET[gun]/$_GET[ay]/$_GET[yil]</b><br> 
    		 
    	"; //GET YERİNE _POST YAZILABİLİR POST DEĞERLERİ LİNK KISMINDA GÖSTERMEZ.
    }
    	else {
    	 	echo"Tıklanmadı";
    	}
    	

	?>
</head>
<body>

</body>
</html>