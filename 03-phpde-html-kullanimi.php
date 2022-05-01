<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Php Kodları İçerinde HTML Kullanımı</title>
</head>

<body>

	<?php
		// HTML komutları PHP içerisinde kullanılacak ise echo ile tırnaklar içerisinde kullanılmalıdır. 
		echo '<p> Bu alan PHP içerisine yazılmış bir paragraftır.';

		echo "
		<ol>
			<li>Murat</li>
			<li>Mustafa</li>
			<li>Mehmet</li>
		</ol>
		";
		#echo "<a href="index.php">Anasayfa</a>";
		#Yukarıda tırnak sorunu, tırnak çakuşması oldu.

	?>

</body>

</html>
