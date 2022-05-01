<!-- 
Soru  : Formdan girilen bilgileri çek. Kullanıcı adı "mehmet" ve Parola "12345" ise FORM Kaybolsun ve  "Oturum açıldı" yazsın. Değilse hata kısmında yanlış  kullanıcı adı veya parola girdiniz yazsın. (Bu işlem için önce bilgileri $_POST ile çekip if else kullanılacak)
-->

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>if ile Oturum Aç</title>
</head>

<body>

	<?php
		error_reporting(0);
		//Formdan bilgileri çek//
		$kullanici_adi = $_POST["kullanici_adi"];
		$parola = $_POST["parola"];
		$btn_giris = $_POST["btn_giris"];

		if ($kullanici_adi == "mehmet" and $parola == "12345") {
			echo "Oturum Açıldı";
		} else {
			if ($btn_giris) {
				echo "HATA : Kullanıcı adınız veya parolanız hatalı";
			}

		//Else'nin } işareti formun altında kapanıyor. Yani form else içine alındı. Yani bilgiler doğru ise oturum açıldı gözükecek. Yanlış ise Hata mesajı ve form gözükecek.
	
	?>

	<form action="" method="post">
		<p>
			<input type="text" name="kullanici_adi" required="" placeholder="Kullanıcı Adınız...">
		</p>
		<p>
			<input type="password" name="parola" placeholder="Şifre Giriniz..." required="">
		</p>
		<p>
			<input type="submit" name="btn_giris" value="Oturum Aç">
		</p>
	</form>

	<?php
		}
	?>
	
</body>

</html>
