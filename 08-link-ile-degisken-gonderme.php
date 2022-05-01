<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Link ile değişken gönderme ve Çekme</title>

</head>

<body>
	<?php
	/*
		LİNK İLE DEĞİŞKEN GÖNDERME VE ÇEKME

		Link ile gönderilen değişkenlerde kullanılan Method GET methodudur. Get methodu adres çubuğunu kullanır. Hızlıdır. Max 2048 karakter gönderir. ADres çubuğunu kullandığı için güvenli değildir. Önemli bilgiler Kredi kartı bilgileri, üyelik bilgileri GET methodu ile gönderilmez. Get methodu daha çok linklerde kullanılır. 

		Link ile değişken gönderirken değişken sayfaya ? ile bağlanır. Birden fazla değişken gönderilecek ise aralarına & konulur.

		index.php

		index.php?id=12&urun_adi=pc  

		id ve urun_adi isimli iki değişken var. 

		Eğer değişken aynı sayfaya gönderilip orada çekilip kullanılacak ise sayfa adını yazmadan direk ? ile başlanabilir. Yani

		?id=12&urun_adi=pc  

		Link ile gönderilen değişkenler aslında bir dizinin elemanlarıdır. Link ile gönderilen değişkenler $_GET[]


		$_GET["id"];

		$_GET["urun_adi"];

		şeklinde çekilir.

	*/
	error_reporting(0);


	?>
	<p>
		<a href="?ad=Mustafa&yas=29&il=Istanbul">Mustafa</a>
		<a href="?ad=Murat&yas=30&il=Kocaeli">Murat</a>
		<a href="?ad=Mehmet&yas=43&il=Sakarya">Mehmet</a>
	</p>
	<p>
		Ad Soyad : <?php echo $_GET["ad"]; ?><br>
		Yaş : <?php echo $_GET["yas"]; ?> <br>
		İl : <?php echo $_GET["il"]; ?><br>
	</p>
	<h2>FORMDAN $_GET İLE BİLGİ ÇEKMEK</h2>
	<form action="" method="get">
		<p>
			E-mail adresi : <br>
			<input type="email" name="eposta" required="">
		</p>
		<p>
			Cinsiyet : <br>
			<input type="radio" name="cinsiyet" value="Erkek" required="">
			Erkek
			<input type="radio" name="cinsiyet" value="Kadın" required="">
			Kadın
		</p>
		<p>
			<input type="submit" name="buton" value="Formu Gönder">
		</p>
	</form>

	<?php echo "<p>Email Adresi :" . $_GET["eposta"] . " <br> Cinsiyet :" . $_GET["cinsiyet"] . " </p>"; ?>
	
</body>

</html>
