<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Header Refresh ile yönlendirme</title>
</head>

<body>
    <?php
        // Php de belli bir saniye bekledikten sonra yani ekranda bir mesaj çıkartıp o mesaj belli bir süre ekranda kaldıktan sonra bir sayfaya yönlendirme yapılacak ise header("refresh:saniye;url=sayfa veya site adı");

        echo "Sayfaya yönlendiriliyorsunuz...";

        header("refresh:3;url=23-upload.php")

    ?>
</body>

</html>
