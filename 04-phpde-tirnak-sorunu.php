<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Phpde Tırnak Sorunu ve Çözümü</title>
</head>

<body>

    <?php
        /*
            PHP DE TIRNAK SORUNU VE ÇÖZÜMÜ: 	Tırnak sorunu 3 farklı yöntemle çözülebilir.

            1- İçtekiler Çift Tırnak İse echo ya ait olan dıştaki tırnaklar tek tırnak olarak kullanılır.

            2- Güzel olanı ve tavsiye edileni Dıştakileri çift tırnak yap. İçtekileri tek tırnak yap.

            3- Etkisizleştirmeyi kullan. Yani hem içtekiler hem de dıştakiler aynı olabilir. Fakat içteki tırnakların başına ters bölü \ koyup etkisiz hale getir.

        */

        // 1. örnek
        echo '<a href="index.php" title="Anasayfa" target="_blank" >Anasayfa</a>';

        // 2. örnek
        echo "<a href='index.php' title='Anasayfa' target='_blank' >Anasayfa</a>";

        // 3. örnek
        echo "<a href=\"index.php\" title=\"Anasayfa\" target=\"_blank\" >Anasayfa</a>";
        echo '<a href=\'index.php\' title=\'Anasayfa\' target=\'_blank\' >Anasayfa</a>';
    ?>

</body>

</html>
