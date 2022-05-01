<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sayıları Formatlı Yazdırmak</title>
</head>

<body>

    <?php

        // NOT : Türkiyede ondalık ayıracı VİRGÜL'dür. Binlik ayıracı NOKTA'dır. Fakat PHP içerisinde NOKTA ondalık ayıracıdır. VİRGÜL ise binlik ayıracıdır. Yani ondalıklı sayılar nokta ile gösterilir. 

        // Tutar 1 350 TL. 556 Kuruş sayısnı Türkiye 1.350,25 yazılır. İngilizce de 1,350.25 yazılır.

        $tutar = 1350.256987898; // Ben bu sayıyı ekrana benim istediğim şekilde yazdırmak için 
        // number_format(değişken,ondalık basamak sayısı, "ondalık ayıracı" , "binlik ayıracı");

        // Ondalık ayıracı ve binlik ayıracı çift tırnaklar içine yazılacak.

        //Dolar için gösterim şekli 

        echo "Price : " . number_format($tutar, 2) . "$<br>";

        //Türk lirası TL için

        echo "Price : " . number_format($tutar, 2, ",", ".") . "TL <br>";

    ?>

</body>

</html>
