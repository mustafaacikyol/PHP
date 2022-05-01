<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Php Eğitimi - Foreach Döngüsü</title>
</head>

<body>

	<?php
		/*
		FOREACH DÖNGÜSÜ : Dizilerde kullanılan bir döngü şeklidir. Dizinin elaman sayısı kadar otomatik döngü yapar. For döngüsünde olduğu gibi başlangıç, bitiş ve artış miktarı belirtmeye gerek yoktur. Dizinin elaman sayısı kadar döngü otomatik yapılır. 

		foreach ( dizi_adı as yeni_değişken ) {
			echo yeni_değişken;
		}

		*/

		// Soru : Bir dizinin içeriğini ekrana foreach kullanarak ekrana yazdır.
		$uyeler		=	array("mustafa", "murat", "leyla", "mehmet", "ela", "derya");

		foreach ($uyeler as $x) {
			echo $x . "<br>";
		}

		echo "---------------------------------------- <br>";

		// Soru : Dizi içeriğini ekrana yazdır. Sadece dizideki Değerleri yazdır.
		$data		=	array("ad" => "mustafa", "yas" => "29", "il" => "Giresun");
		foreach ($data as $y) {
			echo $y . "<br>";
		}


		echo "------------------------------------<br>";
		// Soru : Dizi içeriğini  name ve değerleri ile birlikte ekrana yazdır. 

		foreach ($data as $key => $value) {
			echo $key . ":" . $value . "<br>";
		}

		//81 ilimizi form'da select içine yazdır.
		$iller = array(
			'', 'Adana', 'Adıyaman', 'Afyon', 'Ağrı', 'Amasya', 'Ankara', 'Antalya', 'Artvin',
			'Aydın', 'Balıkesir', 'Bilecik', 'Bingöl', 'Bitlis', 'Bolu', 'Burdur', 'Bursa', 'Çanakkale',
			'Çankırı', 'Çorum', 'Denizli', 'Diyarbakır', 'Edirne', 'Elazığ', 'Erzincan', 'Erzurum', 'Eskişehir',
			'Gaziantep', 'Giresun', 'Gümüşhane', 'Hakkari', 'Hatay', 'Isparta', 'Mersin', 'İstanbul', 'İzmir',
			'Kars', 'Kastamonu', 'Kayseri', 'Kırklareli', 'Kırşehir', 'Kocaeli', 'Konya', 'Kütahya', 'Malatya',
			'Manisa', 'Kahramanmaraş', 'Mardin', 'Muğla', 'Muş', 'Nevşehir', 'Niğde', 'Ordu', 'Rize', 'Sakarya',
			'Samsun', 'Siirt', 'Sinop', 'Sivas', 'Tekirdağ', 'Tokat', 'Trabzon', 'Tunceli', 'Şanlıurfa', 'Uşak',
			'Van', 'Yozgat', 'Zonguldak', 'Aksaray', 'Bayburt', 'Karaman', 'Kırıkkale', 'Batman', 'Şırnak',
			'Bartın', 'Ardahan', 'Iğdır', 'Yalova', 'Karabük', 'Kilis', 'Osmaniye', 'Düzce'
		);

	?>

	<form action="">

		<select name="il" id="">

			<?php
			foreach ($iller as $yaz) {
				echo "<option value='$yaz'>$yaz</option>";
			}
			?>

		</select>

	</form>

</body>

</html>
