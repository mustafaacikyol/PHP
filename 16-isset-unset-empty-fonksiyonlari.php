<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>isset unset empty fonksiyonları</title>
</head>

<body>
	<?php
		error_reporting(0);
		// isset : Fonksiyonu parametre olarak değişkenin tanımlı olup olmadığına bakar. Değişken tanımlı ve değeri boş bile olsa doğru sonuç verir. 
		$ad_soyad	=	"";

		if (isset($ad_soyad)) {
			echo "Değişken var";
		} else {
			echo "HATA : Değişken yok";
		}

		echo "<br>-----------------------------------<br>";

		// unset : Tanımlı olan bir değişkeni siler. Öldürür. Değişkeni yok eder.

		unset($ad_soyad);

		if (isset($ad_soyad)) {
			echo "Değişken var";
		} else {
			echo "HATA : Değişken yok";
		}

		echo "<br>-----------------------------------<br>";

		// empty : Bir değişkenin değerinin boş olup olmadığını kontrol eder. Değişkenin değeri boş ise doğru sonuç verir. Değişkenin değeri dolu ise yanlış sonuç verir. Anlamı $ad_soyad=="" yerine empty($ad_soyad)
		
		$il 	=	"Kocaeli";
		
		if (empty($il)) {
			echo "Değişkenin değeri boş";
		} else {
			echo "Veri girilmiş. Değişken dolu.";
		}

	?>

</body>

</html>
