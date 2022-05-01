<?php
	/*
	
	FORM ELEMANLARI

	Form tasarlarken önce insert - form ile bir forma alanı açıp sonra tasarım yapılmalıdır. Çünkü FORM açtığımız zaman formun METHOD ve ACTİON özellikleri tanımlanır. Çünkü her formun bir method ve action ı olmalıdır. 

	Method POST veya GET olur. Fakat tüm önemli bilgiler, üyelik bilgileri, kredi kart bilgileri POST methodu ile gönderilmelidir. Çünkü POST methodu bilgileri gizli bir alandan (http header) gönderir , sınırsız bilgi gönderir. Biz formlarda POST methodunu kullanacağız. Formdan bilgileri çekebilmek için her form elemanına bir name (isim), değişken vermeliyiz.

	POST ile gönderilen bilgiler $_POST["degisken_adi"] ile çekilir. 

	Formun action ı butona basıldığı zaman açılacak oan sayfayı, bilgilerin gönderileceği sayfayı tanımlar. Action boş ise sayfa kendine actionlanır.

	*/
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Php Eğitimi - Form Elemanları</title>
</head>

<body>
	<h2>ÜYELİK FORMU</h2>
	<form action="09-bilgileri-cek.php" method="post">
		<p>
			Ad Soyad : <br>
			<input type="text" name="ad_soyad" required="">
		</p>
		<p>
			Şifre : <br>
			<input type="password" name="sifre" minlength="6" maxlength="8" required="">
		</p>
		<p>
			Yaş : <br>
			<input type="number" name="yas" min="18" max="80">
		</p>
		<p>
			Cinsiyet : <br>
			<input type="radio" name="cinsiyet" value="erkek" required="">Erkek
			<input type="radio" name="cinsiyet" value="kadın" required="">Kadın
		</p>
		<p>
			Eğitim Durumu : <br>
			<select name="egitim_durumu" id="" required="">
				<option value="">Seç</option>
				<option value="İlkokul">İlkokul</option>
				<option value="Ortaokul">Ortaokul</option>
				<option value="Lise">Lise</option>
				<option value="Üniversite">Üniversite</option>
			</select>
		</p>
		<p>
			<textarea name="adres" id="" cols="30" required=""></textarea>
		</p>
		<p>
			<input type="submit" name="gonder" value="Üye Ol">
		</p>
	</form>
</body>
</html>
