<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>While Döngüsü</title>
</head>

<body>
	<?php
		/*
		WHILE DÖNGÜSÜ

		While döngüsü parantez içerisindeki koşul doğru olduğu sürece istenilen kod blogunu çalıştırır. Özellikle Veritabanındaki kayıtları çekmekte, listelemede While döngüsü kullanılır. 

		while (koşul) {
			Yapılacak işlemler;	
		}


		*/

		// Soru : While döngüsü kullanarak isminizi alt alta 10 kez yazdırın.


		$x = 1;
		while ($x <= 10) {
			echo "$x-Mustafa Açıkyol <br>";
			$x++;
		}

		// soru : While Döngüsü Kullanarak 2000 den 1200 e kadar  5 er 5 er azalan şekilde yazdır.
		$y = 2000;
		while ($y >= 1200) {
			echo $y . "<br>";
			$y -= 5;
		}

	?>

</body>

</html>
