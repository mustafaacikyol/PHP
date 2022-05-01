<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Dizi Değişkenler</title>
</head>

<body>
	<?php
		/*
			DİZİ DEĞİŞKENLER

			Birden fazla değer alabilen değişkenlere dizi değişkenler denir. Tek boyutlu ve çok boyutlu olmak üzere ikiye ayrılır. 
			- Üyeler : Hikmet , Mustafa , Nadir, Alper - sadece isimleri varsa tek boyutlu
			- İsmi, Kullanıcı ismi, Parola, Meslek, Cinsiyet gibi birden fazla veriye sahip ise de çok boyutlu dizidir. 

			Diziler array ile tanımlanır. Dizilerin içindeki her bir elemana indis denir. Dizinin ilk elemanın indis değeri 0 (sıfırdır).

			Dizilerin içerikleri indisleri ile birlikte ekrana dökmek için 

			print_r(değişkken) 

			kullanılır. print_r görmek içindir. İşlem yapmak için değildir.

			----------------

			Dizilerin eleman sayısını 

			count

			bulur.

		*/

		// TEK BOYUTLU DİZİLER

		// print_r($sinif);
		$uyeler = array("hakan", "mustafa", "hasan", "ali", "mehmet");
		/*echo "<pre>";
		print_r($uyeler);
		echo "</pre>";*/
		echo $uyeler[0] . "<br>";
		echo $uyeler[1] . "<br>";
		echo "Toplam " . count($uyeler) . " üyemiz var.";

		echo "<br>";


		// İNDİS İLE DİZİ TANIMLAMA : Herkes İsim Yaş Memleket bilgilerini dizinin indisi olarak tanımlayıp diziyi kullanarak Ekrana Ad: değeri , Yaş: Değeri Memleket : Değeri tek echo ile yazdırsın. 
		$bilgiler = array("Mustafa Açıkyol", 29, "Istanbul");
		echo "Ad Soyad : $bilgiler[0] <br> Yaş : $bilgiler[1] <br> İl : $bilgiler[2] <br>";
		echo "Ad Soyad : " . $bilgiler[0] . " <br> Yaş : " . $bilgiler[1] . " <br> İl : " . $bilgiler[2] . " <br>";



		echo "------------------------------------------- <br>";

		// İNDİS YERİNE NAME KULLANARAK DİZİ TANIMLAMAK : Herkes İsim Yaş Memleket bilgilerini dizinin indisi yerine name verip tanımlasın. Diziyi kullanarak Ekrana Ad: değeri , Yaş: Değeri Memleket : Değeri tek echo ile yazdırsın. 
		$bilgiler = array("ad" => "Mustafa Açıkyol", "yas" => 29, "il" => "Istanbul");
		echo "Ad Soyad : " . $bilgiler['ad'] . " <br> Yaş : " . $bilgiler['yas'] . " <br> İl :" . $bilgiler['il'] . " <br>";
		echo "------------------------------------------- <br>";


		// ÇOK BOYUTLU DİZİLER 

		// İndis Numarası kullan
		$uyeler = array(
			array("murat", 32, "Kocaeli"),
			array("mustafa", 29, "Istanbul"),
			array("mehmet", 43, "Sakarya")
		);

		// Soru 1: Mustafa'nın ilini yazdırın.
		echo $uyeler[1][2] . "<br>";

		echo "------------------------------------------- <br>";
		// Soru 2: Murat'ın yaşı
		echo $uyeler[0][1] . "<br>";


		echo "------------------------------------------- <br>";

		// İndis yerine Name kullan
		$uyeler = array(
			array("ad" => "murat", "yas" => 32, "il" => "Kocaeli"),
			array("ad" => "mustafa", "yas" => 29, "il" => "Istanbul"),
			array("ad" => "mehmet", "yas" => 43, "il" => "Sakarya")
		);


		// Soru 1: Mustafanın ilini yazdırın.

		echo $uyeler[1]["il"] . "<br>";

		echo "------------------------------------------- <br>";
		// Soru 2: Hakan'ın yaşı

		echo $uyeler[0]["yas"] . "<br>";

	?>

</body>

</html>
