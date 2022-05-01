<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>if ile form kontrolü ve bilgileri seçilmiş getirme</title>
</head>

<body>
	<h2>ÜYELİK FORMU</h2>

	<?php
		//Formdan girilen tüm bilgileri çek. Girilmeyen her bilgi için hata mesajı verecek. Tüm alanlar doldurulmuş ve güvenlik kodu da doğru girilmiş ise form kaybolsun. Değilse hata mesajları versin.
		error_reporting(0);
		$ad_soyad 		= $_POST["ad_soyad"];
		$sifre			= $_POST["sifre"];
		$yas			= $_POST["yas"];
		$cinsiyet 		= $_POST["cinsiyet"];
		$egitim_durumu	= $_POST["egitim_durumu"];
		$adres 			= $_POST["adres"];
		$guvenlik_kodu	= $_POST["guvenlik_kodu"];
		$uretilen_kod	= $_POST["uretilen_kod"];
		$gonder			= $_POST["gonder"];

		if ($ad_soyad and $sifre and $yas and $cinsiyet and $egitim_durumu and $adres and $guvenlik_kodu == $uretilen_kod) {
			echo "Tüm bilgiler doğru. Veritabanı kaydı yap veya Email olarak gönder.";
		} else {

		if ($gonder) {
			if (!$ad_soyad) {
				echo "Ad Soyad giriniz";
			} elseif (!$sifre) {
				echo "Şifre giriniz";
			} elseif (!$yas) {
				echo "Yaş giriniz";
			} elseif (!$cinsiyet) {
				echo "Cinsiyet giriniz";
			} elseif (!$egitim_durumu) {
				echo "Eğitim durumu giriniz";
			} elseif (!$adres) {
				echo "Adres giriniz";
			} elseif (!$guvenlik_kodu) {
				echo "Güvenlik kodu giriniz";
			} else {
				echo "HATA : Güvenlik kodunu tekrar girin.";
			}
		}

	?>

	<form action="" method="post">
		<p>
			Ad Soyad : <br>
			<input type="text" name="ad_soyad" required=""> value="<?php echo $ad_soyad ?>">
		</p>
		<p>
			Şifre : <br>
			<input type="password" name="sifre" required="" minlength="6" maxlength="8">
		</p>
		<p>
			Yaş : <br>
			<input type="number" name="yas" required=""> min="18" max="80" value="<?php echo "$yas"; ?>">
		</p>
		<p>
			Cinsiyet : <br>
			<input type="radio" name="cinsiyet" required=""> value="erkek" <?php if ($cinsiyet == "erkek") {
																				echo 'checked=""';
																			} ?> >Erkek
			<input type="radio" name="cinsiyet" required=""> value="kadın" <?php if ($cinsiyet == "kadın") {
																				echo 'checked=""';
																			} ?>>Kadın
		</p>
		<p>
			Eğitim Durumu : <br>
			<select name="egitim_durumu" id="" required="">
				<option value="">Seç</option>
				<option value="İlkokul" <?php if ($egitim_durumu == "İlkokul") {
											echo 'selected=""';
										} ?>>İlkokul</option>
				<option value="Ortaokul" <?php if ($egitim_durumu == "Ortaokul") {
												echo 'selected=""';
											} ?>>Ortaokul</option>
				<option value="Lise" <?php if ($egitim_durumu == "Lise") {
											echo 'selected=""';
										} ?>>Lise</option>
				<option value="Üniversite" <?php if ($egitim_durumu == "Üniversite") {
												echo 'selected=""';
											} ?>>Üniversite</option>
			</select>
		</p>
		<p>
			<textarea name="adres" id="" required="" cols="30"><?php echo $adres; ?></textarea>
		</p>
		<p>
			Güvenlik Kodu : <br>
			<input type="text" name="guvenlik_kodu" required="">
			<?php
			$kod = rand(100, 999);
			echo $kod;
			?>
			<input type="hidden" name="uretilen_kod"> value="<?php echo $kod; ?>">
		</p>
		<p>
			<input type="submit" name="gonder" value="Üye Ol">
		</p>
	</form>
	
	<?php
	}
	?>
</body>

</html>
