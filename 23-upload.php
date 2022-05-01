<?php
	/*
	UPLOAD - SUNUCUYA DOSYA, RESİM, VİDEO YÜKLEMEK

	Önce bir form hazırla. Fomda Dosya File Field ( Insert - Form - File Field ) kullanılır. Bu alanı ekleyince FORMUN ENCTYPE özelliği 

	enctype="multipart/form-data"

	olur. Formdan ad_soyad, email_adresi, cinsiyet gibi alanları 

	$_POST[" "] ile çekiyorduk.

	Fakat Dosya File Field alanına isim olarak dosya demiş isek Sadece dosya alanını

	$_FILES["dosya"]

	ile çekeceğiz.  

	$_FILES[" "] ile çekilen bilgiler de bir dizi değişkendir. Bu dizi değişken içerisinde dosyanın tipi, boyutu, adı, ve geçici adı yani tmp_name bulunur. Dosyayı sunucuya atmak için dosyanın name ve tmp_name bilgilerine ihtiyaç vardır.

	Upload için

	move_uploaded_file(kaynak,hedef);

	kaynak = onun tmp_name  dir.
	hedef = normal name dir.

	*/

	// FORMDAN Normal bilgileri $_POST[" "] ile çekeriz.


	// FORMDAN FİLE alanındaki bilgiler $_FILES[" "] ile çekilir. Fakat Files ile çekilen bilgiler de bir dizi değişkendir.



	// print_r($dosya);
	// Array ( [name] => pers3.jpg [type] => image/jpeg [tmp_name] => C:\wamp\tmp\php9F.tmp [error] => 0 [size] => 359397 ) 
	// echo $ad_soyad. "<br>" . $mesaj . "<br>" .$dosya. "<br>";

	// Upload yaptırmak için
	// move_uploaded_file(kaynak,hedef);
	// kaynak = tmp_name
	// hedef = name 


	// Butona basılmış ise işlemleri yapsın.

	// Formdan girilen Ad Soyad bilgisi $_POST ile çekilecek

	// Seçilen Fotoğraf bilgisi $_FILES ile çekilecek

	// print_r($fotograf_dizisi);
	// Array ( [name] => indir (1).jpg [type] => image/jpeg [tmp_name] => C:\wamp\tmp\phpB94C.tmp [error] => 0 [size] => 9383 )

?>


<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Sunucuya Dosya Yüklemek</title>
</head>

<body>
	<?php
		
		error_reporting(0);
		//Formdan ad_soyad bilgisi $_POST ile çek
		$ad_soyad 		= 	$_POST["ad_soyad"];

		//Resim bilgisi $_FILES ile çekilir. Çekilen bilgi bir dizidir.
		$resim_dizisi 	= 	$_FILES["urun_resmi"];

		/*var_dump($resim_dizisi);

		array (size=5)
		'name' => string 'yuruyen-insalar-siyah-beyaz.jpg' (length=31)
		'type' => string 'image/jpeg' (length=10)
		'tmp_name' => string 'C:\wamp64\tmp\phpBB82.tmp' (length=25)
		'error' => int 0
		'size' => int 76505
		*/

		if ($ad_soyad and $resim_dizisi["name"]) {
			//Ad soyad girilmiş ve resim seçilmiş ise upload etsin
			$yukle 		= 	move_uploaded_file($resim_dizisi["tmp_name"], "resimler/uye-resimleri/" . $resim_dizisi["name"]);
			if ($yukle) {
				echo "Resim yüklendi";
			} else {
				echo "HATA : Resim yüklenemedi";
			}
		}

	?>

	<form action="" method="post" enctype="multipart/form-data">
		<p>
			Ad Soyad : <br>
			<input type="text" name="ad_soyad" required="">
		</p>
		<p>
			Ürün Resmi : <br>
			<input type="file" name="urun_resmi" required="">
		</p>
		<p>
			<input type="submit" name="btn_ekle" value="Ürün ekle">
		</p>
	</form>
	
</body>

</html>
