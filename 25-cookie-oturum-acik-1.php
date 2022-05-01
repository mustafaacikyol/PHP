<?php

	error_reporting(0);

	if ($_COOKIE["yonetici"] == "") {
		header("location:25-cookies-ac.php");
	}

?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Cookies - Çerezler - Oturum Açık - Sayfa 1</title>
</head>

<body>
	Sayın <?php echo $_COOKIE["yonetici"]; ?> Oturumunuz açık
	<a href="25-cookie-sonlandir.php">Oturumu Kapat </a>
</body>

</html>
