<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Formdan Bilgi Çek</title>
</head>

<body>
	<?php
	error_reporting(0); //Uyarıları kapat. Gizle.
	echo "Ad soyad : " . $_POST["ad_soyad"] . " <br> Şifre :" . $_POST["sifre"] . " <br> Yaş :" . $_POST["yas"] . " <br> Cinsiyet :" . $_POST["cinsiyet"] . " <br> Eğitim durumu :" . $_POST["egitim_durumu"] . " <br> Adres :" . $_POST["adres"];
	?>
</body>

</html>
