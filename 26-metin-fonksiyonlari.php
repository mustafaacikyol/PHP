<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Metin Fonksiyonları</title>
</head>

<body>
	<?php
		// PHP HAZIR FONKSİYONLARINDAN METİN FONKSİYONLARI

		// strlen :  Bir metnin karakter sayısını, karakter uzunluğunu bulur.
		// Kullanımı : strlen(değişken)
		$isim = "mustafa";

		echo strlen($isim) . "<br>";

		$haber = "uğur";

		echo strlen($haber) . "<br>";

		//Türkçe karakterleri strlen iki olarak sayar. 
		//Türkçe karakterleri doğru saymak için mbstrlen kodu kullanılır.
		echo mb_strlen($haber, "utf8") . "<br>";

		echo "------------------------------------------------------- <br>";

		// substr : Bir metnin içerisinden ( Başından, Ortasından veya sonundan ) istenilen kadar karakteri almak, çekmek için kullanılır. Başlangıç değeri 0 sıfırdır.
		$haber = "boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.";

		// substr(değişken, başlangıç karakteri, alanacak karakter sayısı)

		// Soru : Haberin baştan 10 karakterini aldır.
		echo substr($haber, 0, 10) . "<br>";
		// Soru : Haberin 20. karakterinden başla sonuna kadar al.
		echo substr($haber, 20) . "<br>";

		// Soru : Haberin 20. Karakterinden başla 15 karakter aldır. 
		echo substr($haber, 20, 15) . "<br>";

		// Soru : Haberin sondan 30 karakterini aldır.
		echo substr($haber, -30) . "<br>";

		echo mb_substr($haber, 0, 50, "utf8") . "...<br>";

		echo "------------------------------------------------------- <br>";


		// Strpos : Belirtilen karakterin sıfırdan başlayıp kaçıncı karakter olduğunu bulur.
		// Kullanımı : strpos (değişken,"Karakter"); 

		$eposta = "mehmet@gmail.com";

		// Soru : @ işareti kaçıncı karakterdir. 

		echo strpos($eposta, "@") . "<br>";

		// Soru : Size verilen bir eposta adresindeki domaini alıp o domanin internet sitesini açacak şekilde link verin.
		 
		$email 			= "mehmet@hurriyet.com.tr";
		$konum 			= strpos($email, "@");
		$domain 		= substr($email, $konum + 1);

		echo "<a href='http://www.$domain'>$domain</a> <br>";

		echo "------------------------------------------------------- <br>";

		// strstr : Belirtilen karakterden başlayıp sonuna kadar alır.
		// Kullanımı : strstr(değişken,"karakter")

		echo strstr($email, "@") . "<br>";

		// Soru : Size verilen bir eposta adresindeki domaini alıp o domanin internet sitesini açacak şekilde link verin.  strstr fonksiyonunu kullanarak yaptırın.
		$isim 		= strstr($email, "@");
		$domain 	= substr($isim, 1);

		echo "<a href='http://www.$domain'>www.$domain</a> <br>";

		echo "------------------------------------------------------- <br>";


		// substr_count : Belirtilen karakterden kaç tane olduğunu bulur. 
		// Kullanımı : substr_count(değişken,"Karakter");

		echo substr_count($email, "@") . "<br>";

		// Soru : Verilen bir email adresinin doğru email yapısına uygun olup olmadığını kontrol ettirin. 
		// Doğru Emailde @ bir tane olur, En az bir tane nokta olur, @ den önce en az 2 karakter olur, @ ten sonra en az 5 karakter olmalıdır. 
		$eposta 		= "mehmet@gmail.com";

		$nokta 					= substr_count($eposta, ".");
		$karakter 				= substr_count($eposta, "@");
		$karakter_oncesi 		= strpos($eposta, "@");
		$karakter_sonrasi 		= strlen(strstr($eposta, "@")) - 1;

		if ($nokta < 1) {
			echo "HATA : Email adresinde en az 1 tane nokta olmalıdır.";
		} elseif ($karakter != 1) {
			echo "HATA : Email adresinde 1 tane @ işareti olmalıdır.";
		} elseif ($karakter_oncesi < 2) {
			echo "HATA : @ işaretinden önce en az 2 karakter olmalıdır.";
		} elseif ($karakter_sonrasi < 5) {
			echo "HATA : @işaretinden sonra en az 5 karakter olmalıdır.";
		} else {
			echo "Email yapısına uygun bir eposta adresi girdiniz.";
		}

		echo "------------------------------------------------------- <br>";

		// strtolower :  Verilen metnin tamamını Küçük harfe çevirir.
		// Kullanımı :  strtolower(değişken);
		$isim = "UĞUR AÇIKYOL";

		echo strtolower($isim) . "<br>";

		//mb_ türkçe karakter için eklenir

		echo mb_strtolower($isim, "utf8") . "<br>";

		echo "------------------------------------------------------- <br>";

		// strtoupper : Verilen metnin tamamını Büyük harfe çevirir.
		// Kullanımı :  strtoupper(değişken);
		$uye 	= "burak yıldırım";

		echo strtoupper($uye) . "<br>";
		echo mb_strtoupper($uye, "utf8") . "<br>";


		echo "------------------------------------------------------- <br>";

		// ucwords : Verilen bir metnin her kelimesinin baş harflerini büyük harfe çevirir. 
		// Kullanımı :  ucwords(değişken);
		$baslik = "php programlama";

		echo ucwords($baslik) . "<br>";

		echo "------------------------------------------------------- <br>";

		// str_replace : Bir metnin içerisindeki bir karakteri bulup başka bir karakter ile değiştirmeyi sağlar. Büyük Küçük harf ayrımı yapar.

		// str_ireplace : Bir metnin içerisindeki bir karakteri bulup başka bir karakter ile değiştirmeyi sağlar. Büyük Küçük harf ayrımı yapmaz.
		// kullanımı : str_replace("aranan","yerine konacak", değişken);
		$ders		= "Php Programlama";

		echo str_replace("P", "?", $ders) . "<br>";
		echo str_ireplace("P", "?", $ders) . "<br>";
		// ------------------------------------------------------------------------
		// ÇOK ÖNEMLİ  

		// Soru : Ürün eklerken Ürün adını resim adı olarak verecek, isim içindeki Türkçe karakterleri ve boşlukları düzeltecek, orjinal resimden uzantıyı Ürün adından da ismi alacak araya tarih koyacak olan kodu yazın.

		$urun_adi = "Tefal a3800/DR Serisi Paslanmaz Çelik Tabanlı Buharlı Ütü";
		$resim_adi = "resim1.jpg";
		// Ürün adı ile resim uzantısından yeni bir resim adı oluşturacak

		//1-)Uzantıyı al.

		$resim_adi_dizi 	= pathinfo($resim_adi);
		//var_dump($resim_adi_dizi);
		$uzanti 			= $resim_adi_dizi["extension"];

		//2-)Ürün adı içerisindeki boşlukları ve türkçe karakterleri düzelt. Dosya adına uygun hale getir.

		$urun_adi_kucuk 		= mb_strtolower($urun_adi, "utf8");
		$x 						= array("ö", "ü", "ğ", "ş", "ç", "ı", " ", "+", "*", "", ".", "'", '""', "/", "(", ")");
		$y						= array("o", "u", "g", "s", "c", "i", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");

		$urun_adi_duzelt 		= str_replace($x, $y, $urun_adi_kucuk);
		$yeni_resim_adi 		= $urun_adi_duzelt . date("-YmdHis-") . "." . $uzanti;

		echo $yeni_resim_adi . "<br>";

		echo "------------------------------------------------------- <br>";

		// --------------------------------------------------------------------------

		// str_repeat : Bir karakteri veya bir metni istediğimiz sayıda tekrar ettirmek için kullanılır. 
		// Kullanımı : str_repeat(karakter,tekrar_sayısı);

		echo str_repeat("*", 100) . "<br>";


		// ------------------------------------------------------------------------
		// ÖNEMLİ  


		// Soru : Verilen bir email adresinde baştan ilk iki karakteri göster ondan sonraki karakter sayısı kadar * koy ve @ dahil sonrasını göster.

		// Örnek : hikmet@gmail.com  -  hi****@gmail.com
		$eposta 		= "acikyolmustafa17@gmail.com";

		$ilk_iki 		= substr($eposta, 0, 2);
		$et_dahil 		= strstr($eposta, "@");
		$yildiz_sayisi 	= strlen($eposta) - (strlen($et_dahil) + 2);

		$eposta_gizli 	= $ilk_iki . str_repeat("*", $yildiz_sayisi) . $et_dahil;

		echo $eposta_gizli . "<br>";



		// ------------------------------------------------------------------------

		// explode : Bir metni belirtilen noktalardan parçalayıp diziye dönüştürür. 

		// Kullanımı : explode ("@",degisken);

		// Özellikle Dogum Tarihi GÜn Ay Yıl olarak seçilecek bilgiler ayrı ayrı değişkenlerden gelecek fakat biz bu bilgiyi veritabanına tek bilgi olarak kayıt edeceğiz 

		$dogum_tarihi  = "25/10/1980"; // Gün Ay Yıl ayrı ayrı istiyoruz.

		$dogum_tarihi_parcala 	= explode("/", $dogum_tarihi);

		echo "Gün : " . $dogum_tarihi_parcala[0] . "<br>";
		echo "Ay : " . $dogum_tarihi_parcala[1] . "<br>";
		echo "Yıl : " . $dogum_tarihi_parcala[2] . "<br>";


		// implode : Bir dizinin elemanlarını belirtilen karakteri kullanarak metne dönüştürür.

		// Kullanımı : implode(",",dizi);
		$sinif	= array("Uğur", "Burak", "Mustafa", "Mehmet");

		echo implode(" ", $sinif) . "<br>";


		// addslashes : Metin içersindeki tek veya çift tırnakları etkisiz hale getirir. Yani başına ters bölü koyar.

		// kullanımı : addslashes(degisken);
		$yorum 	= "Kayahan'ın abisi";

		echo addslashes($yorum) . "<br>";


		// stripslashes : Metin içerisindeki ters slahları temizler.

		// Kullanımı : stripslashes(degisken);
		$yorum		= "Kayahan\'ın abisi";

		echo stripslashes($yorum) . "<br>";

		// strip_tags :  Mesaj içerisindeki tüm html kodlarını ve javascript kodlarını temizler. Sadece yazıları gönderir.

		$kod 	= '<script type="text/javascript">
		<!--
		window.location = "https://www.google.com.tr/"
		//-->
		</script>';

		echo strip_tags($kod) . "<br>";

		$kod_2 	= '<a href="https://www.google.com">Google</a>';

		echo strip_tags($kod_2) . "<br>";

		// htmlentities : Html ve Javascript kodlarını ekrana bir metin, mesaj, text gibi gönderir. 

		echo htmlentities($kod) . "<br>";


		// trim : Baştaki ve sondaki boşlukları siler.

		$parola 	= " hd 123 ";

		echo trim($parola) . "<br>";


	?>
</body>

</html>
