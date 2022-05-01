<?php 
	/* Fonksiyonları tanımladıgımız sayfayı diger sayfaları include ile cagıracagımız ıcın bu sayfada temel html kodları olmamalıdır.

	Fonksiyon: Küçük programlardır.
	Birden fazla sayfada tekrar tekrar kullanılacak kodları her defasında yazmaktansa onu bir fonksiyona dönüştürüp ihtiyaç oldugu zaman fonksiyonu çağırmak sureti ile kodu azaltmış oluruz.
	Fonksiyonlar: function ile tanımlanır bir veya daha fazla parametre alabilirler.
	return ile sonuç döndürürler.
	Örnek: function fonksiyon_adi ($değişken1, $değişken2) {
		yapılıcak işlemnler;
		return $sonuc;	
	}
	*/

	//Parametresi olmayan bir fonksiyon tanımlayalım

	function adres () {
		echo "Barbaros Bulvarı Beşiktaş - İstanbul <br>";
	}

	//verilenbir sayının %18 kdv hesaplama

	function kdv_18 ($x) {
		$sonuc 		= $x + ($x*0.18);
		return $sonuc;
	}

	//tutar ve verilen kdv oranına göre kdvli fiyatı hesaplayan fonksiyon. eğer kdv verilmez ise default oran olarak 18 olarak alan fonksiyon.

	function kdv_hesapla ($fiyat,$kdv_oran=18){
		$sonuc 			= ($fiyat * $kdv_oran) / 100;
		return $sonuc;
	}


	// Soru : Verilen bir email adresinde baştan ilk iki karakteri göster ondan sonraki karakter sayısı kadar * koy ve @ dahil sonrasını göster.

	// Örnek : mehmet@gmail.com  -  me****@gmail.com

	function email_gizle($email)
	{

		$a 			= strstr($email, "@");
		$b 			= substr($email, 0, 2);
		$c 			= (strlen($email) - strlen($a)) - 2;
		$d 			= str_repeat("*", $c);
		$e 			= $b . $d . $a;
		return $e . "<br>";
	}
	

	// ÇOK ÖNEMLİ  

	// Soru : Ürün eklerken Ürün adını resim adı olarak verecek, isim içindeki Türkçe karakterleri ve boşlukları düzeltecek, orjinal resimden uzantıyı ürün adından da ismi alacak araya tarih koyacak olan kodu yazın ve fonksiyona dönüştürün.


	// Ürün adı ile resim uzantısından yeni bir resim adı oluşturacak

	function seo_uyumlu_resim ($urun_adi,$resim_adi){


		//1-)Uzantıyı al.

		$resim_adi_dizi 	= pathinfo($resim_adi);
		//var_dump($resim_adi_dizi);
		$uzanti 			= $resim_adi_dizi["extension"];

		//2-)Ürün adı içerisindeki boşlukları ve türkçe karakterleri düzelt. Dosya adına uygun hale getir.

		$urun_adi_kucuk 		= mb_strtolower($urun_adi,"utf8");
		$x 						= array("ö","ü","ğ","ş","ç","ı"," ","+","*", "",".","'",'""',"/","(",")",":","!");
		$y						= array("o","u","g","s","c","i","-","-","-", "-","","-","-","-","-","-","","");

		$urun_adi_duzelt 		= str_replace($x,$y,$urun_adi_kucuk);
		$yeni_resim_adi 		= $urun_adi_duzelt.date("-YmdHis").".".$uzanti;

		return $yeni_resim_adi;
	}

?>
