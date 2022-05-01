<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>For Döngüsü</title>
</head>

<body>
	<p>
		<?php
			/*
			DÖNGÜLER

			İstenilen komutları istenilen sayıda çalıştırmak için kullanılır. Döngüler tekrar eden işlemleri yapmakta kullanılır.

			FOR DÖNGÜSÜ

			for (degisken ve başlangıç değeri; değişkenin koşul değeri;artış miktarı) {
				yapılacak işlemler	
			}

			for ($a=1;$a<=100;$a++) {
				Yapılacaklar;	
			}

			Aradaki işlem 100 kez yapılacak.

			*/

			// Soru 1: İsminizi 10 kez alt alta for döngüsü kullanarak yazdırın.

			for ($x = 1; $x <= 10; $x++) {
				echo "Mustafa Açıkyol <br>";
			}

			// Soru 2: 2020 den 1900 e kadar for döngüsü kullanarak alt alta yazdır. 

			for ($y = 2020; $y >= 1900; $y--) {
				echo $y . "<br>";
			}

			// Soru 3 : For döngüsü kullanarak Gün Ay ve Yıl Form kullanarak oluştur. Gün 1-31 arası,  Ay Ocak - Aralık Arası Dizi olacak. Yıl 2013 - 1900  arası olacak 

		?>
	</p>
	<form action="" method="post">
		<p>
			Doğum Tarihi:
			<select name="gun" id="" required="">
				<option value="">Gün</option>

				<?php
					for ($a = 1; $a <= 31; $a++) {
						if ($a < 10) {
							$a = "0" . $a;
						}

						echo "<option value='$a'>$a</option>";
					}
				?>

			</select>
			<select name="ay" id="" required="">
				<option value="">Ay</option>
				
				<?php
					$aylar = array("ocak", "şubat", "mart", "nisan", "mayıs", "haziran", "temmuz", "ağustos", "eylül", "ekim", "kasım", "aralık");
					for ($b = 0; $b < 12; $b++) {
						echo "<option value='$aylar[$b]'>$aylar[$b]</option>";
					}
				?>

			</select>
			<select name="yil" id="" required="">
				<option value="">Yıl</option>

				<?php
					for ($c = 2020; $c >= 1900; $c--) {
						echo '<option value="' . $c . '">' . $c . '</option>';
					}
				?>

			</select>
		</p>
		
		<p>
			<input type="submit" name="buton" value="Formu Gönder">
		</p>

	</form>
	
</body>

</html>
