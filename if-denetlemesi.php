<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>If Denetlemesi</title>
</head>

<body>
	<?php
		/*
		IF DENETLEMESİ : Bir işlemin yapılabilmesi için kontroller yapmayı ve o kontrollere uyuyorsa yapılacak işlemleri, uymadığında yapılması gereken işlemler denetlemeler ile gerçekleşir. Kontroller, Denetlemeler if ler ile yapılır. Denetlemeler için İç denetleme (Karşılaştırma) ve Dış Denetleme (Mantıksal) Operatörler kullanılır. 

		Tek eşittir değişkene değer ataması yaparken kullanılır. Çift eşittir ise sınamalarda kullanılır. 

		İÇ DENETLEME (KARŞILAŞTIRMA) OPERATÖRLERİ
		== 	Eşit mi? Eşitse anlamına gelir.  
		!= 	Eşit değilse 
		<> 	Eşit Değilse 
		< 		Küçükse
		<= 	Küçük eşitse
		> 		Büyükse
		>= 	Büyük Eşitse

		------------------------------------------------------------------------------

		DIŞ DENETLEME (MANTIKSAL) OPERATÖRLER 
		Birden fazla değeri kontrol etmek gerektiğinde kullanılır.

		and	: Ve anlamına gelir. Tüm şartların doğru olması halinde doğru sonuç verir. Şartlardan 1 tanesi bile yanlış olsa yanlış sonuç verir. Yani kabul etmez. 

		and  yerine && kullanılabilir.

		or : Veya anlamına gelir. Şartlardan bir tanesi bile doğru olsa doğru sonuç verir.

		or  yerine || kullanılabilir. 


		IF KULLANIMI - Tekli : Doğru ve yanlış olma halinde yapılacak işlemler. Yani tek koşul varsa.

		if(koşul) { 
			Koşul doğru ise yapılacaklar ;
		} else {
			Koşul yanlış ise yapılacaklar ;
		}


		*/

		// Soru  1 : Öğrencinin ortalaması 50 ve üzeri ise GEÇTİ yazsın. Değilse KALDI yazsın. 

		$ortalama = 50;
		if ($ortalama >= 50) {
			echo "Geçti";
		} else {
			echo "Kaldı";
		}

		echo "<br>----------------------------------<br>";

		// Soru 2 : Kullanıcı adı "mehmet" ve Parola "12345" ise "Oturum açıldı" yazsın. Değilse "yanlış kullanıcı adı veya parola girdiniz" yazsın. (Kullanıcı Adı ve Parola isimli iki değişken tanımla ve if ile kontrol et) 
		$kullanici_adi = "mehmet";
		$parola = "12345";

		if ($kullanici_adi == "mehmet" and $parola == "12345") {
			echo "Oturum açıldı";
		} else {
			echo "HATA : Kullanıcı adı veya parolanız yanlış";
		}

		echo "<br>----------------------------------<br>";

		/*
		IF ÇOKLU KULLANIMI : Birden fazla koşulu kontrol etmemiz gereken durumlarda if in çoklu kullanımına ihityaç vardır.

		if (koşul1) {
			koşul 1 doğru ise yapılacaklar;	
		} elseif (koşul2) {
			koşul 2 doğru ise yapılacaklar;	
		} elseif (koşul3) {
				koşul 3 doğru ise yapılacaklar;	
		} else {
			Yukardaki koşulların tamamı yanlış ise yapılacaklar;	
		}

		*/

		// Soru 2: Ortalama 0 - 49 Arası BAŞARISIZ, 50 - 69 arası ORTA, 70 - 84 arası İYİ , 85 - 100 arası PEKİYİ, Diğerleri HATALI NOT GİRDİNİZ yazsın.

		$ortalama = 185;
		if ($ortalama >= 0 and $ortalama <= 49) {
			echo "Başarısız";
		} elseif ($ortalama >= 50 and $ortalama <= 69) {
			echo "Orta";
		} elseif ($ortalama >= 70 and $ortalama <= 84) {
			echo "iyi";
		} elseif ($ortalama >= 85 and $ortalama <= 100) {
			echo "pekiyi";
		} else {
			echo "HATA : Geçersiz Ortalama";
		}


	?>
</body>

</html>
