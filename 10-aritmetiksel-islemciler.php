<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Aritmetiksel İşlemciler - Toplama Çıkarma Çarpma Bölme ve Mod Alma</title>
</head>

<body>
    <?php
        /*
        PHP de işlem önceliğini belirlemek için parantez kullanmak gerekir. Özellikle artimetiksel işlemcilerde parantez kullanılmaz ise Çarpma, Bölme, Toplama ve çıkarma sırasına göre işem yapar. 
        */
        $a = 78;
        $b = 17;

        // + : Toplama işemine karşılık gelir.   
        // İŞLEMİN TOPLAMA OLARAK SONUCU


        // echo "$a + $b = $toplam <br>";
        $toplam = $a + $b;
        echo "$a+$b=$toplam <br>";

        echo $a . "+" . $b . "=" . $toplam . " <br>";


        // - : Çıkarma işlemine karşılık gelir. 
        // İŞLEMİN ÇIKARMA OLARAK SONUCU
        $cikar = $a - $b;

        echo $a . '-' . $b . '=' . $cikar . ' <br>';

        // * : Çarpma işlemine karşılık gelir.
        // İŞLEMİN ÇARPMA OLARAK SONUCU
        $carp = $a * $b;

        echo $a . "*" . $b . "=" . $carp . "<br>";

        // / : Bölme işlemine karşılık gelir.
        // İŞLEMİN BÖLME OLARAK SONUCU

        $bol = $a / $b;
        echo "$a/$b=$bol <br>";

        // % : Bölümünden kalanı bulur. Yani modülüs (mod) alır.
        // İŞLEMİN MOD OLARAK SONUCU

        $mod = $a % $b;

        echo "$a%$b=$mod <br>";

        // İşlem Öncelikleri Parantezler ile belirtilmelidir. Parantez kullanılmaz ise sonuçlar yanlış çıkabilir. 
        $x = 40;
        $y = 10;
        $z = 4;
        $c = 5;
        $d = 2;

        $sonuc = ($x + $y - $z) * $c / $d;

        echo $sonuc . "<br>";

    ?>
</body>

</html>
