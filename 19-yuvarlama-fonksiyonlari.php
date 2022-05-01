<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Yuvarlama Fonksiyonları</title>
</head>

<body>

    <?php

        $sayi    = 50.99;

        // floor : Aşağı yuvarlama yapar. Yani sayının ondalık kısmı ne olursa olsun aşağı yuvarlar.

        echo floor($sayi) . "<br>";

        // NOT : Türkiyede ondalık ayıracı VİRGÜL'dür. Binlik ayıracı NOKTA'dır. Fakat PHP içerisinde NOKTA ondalık ayıracıdır. VİRGÜL ise binlik ayıracıdır. Yani ondalıklı sayılar nokta ile gösterilir. 

        // ceil : Yukarı yuvarlama yapar. Sayının ondalık kısmı ne olursa olsun yukarı yuvarlar.

        $sayi1    = 50.001;

        echo ceil($sayi1) . "<br>";

        // round : Normal yuvarlama fonksiyonudur. Yani sayının ondalık kısmına bakar 5 ve üzeri ise yukarı, 5 den küçük ise aşağı yuvarlar.
        
        $sayi2        = 50.4;
        $sayi3        = 50.5;

        echo round($sayi2) . "<br>";
        echo round($sayi3) . "<br>";

    ?>

</body>

</html>
