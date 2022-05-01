<?php
session_start();

if ($_SESSION["yonetici"] == "") {
	header("location:24-session-oturum-ac.php");
}
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Session Oturum Açık Sayfa 1</title>
</head>

<body>
	Sayın <?php echo $_SESSION["yonetici"]; ?> Eğer oturum açık ise bu sayfayı görüntüleyebilirsiniz.
	<a href="24-session-oturum-kapat.php">Oturumu Kapat</a>
</body>

</html>
