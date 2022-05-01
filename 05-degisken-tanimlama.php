<?php
    //Title, description ve keywords tanımla.
    $title = "Php içerisinde değişken tanımlama ve değişken kullanımı";
    $description = "Değişken Tanımlama Kuralları, değişkenin önemi ve değişken örnekleri";
    $keywords = "Değişken tanımlama, değişkenler, değişken örnekleri, değişken kullanımları";
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> <?php echo $title; ?> </title>
    <meta name="description" content="<?php echo $description; ?> ">
    <meta name="keywords" content="<?php echo $keywords; ?> ">
</head>

<body>
    <?php
        /*
        DEĞİŞKEN :  Bir bilgiyi bir yerden alıp başka bir yere taşımak için kullanılan yapılara değişken denir. Değişkenin içine aldığı bilgiye değer denir. Ziyaretçiden bilgi almak veya veri tabanındaki bir bilgiyi sayfaya değişkenler ile aktarırız.
        Programlama Değişkenler ve o değişkenlerin değerleri üzerine kuruludur. 

        İnteger : Sayısal değere sahip değişken türüdür.
        String : Metinsel değere sahip.
        Date :  Tarihsel değere sahip.
        Boolen : Doğru yanlış 
        Array : Diziler

        DEĞİŞKEN TANIMLARKEN DİKKAT EDİLECEK KONULAR
        - Değişkenlerin başına $ işareti konulur.
        - Değişken adlarında Türkçe karakter ö,ü,ğ,ş,ç,ı kullanılmaz.
        - Değişken adlarında boşluk kullanılmaz. Boşluk yerine alttan tire kullanılır. Orta tire de kullanılmaz.
        - Özel karakterler ( ) ? * + / - < > & ' " kullanılmaz.
        - Değişkenler büyük küçük harfe duyarlıdır. Nasıl tanımlandı ise öyle çağırılmalıdır. 
        - Değişkenlere atama eşittir ile yapılır. 
        - Değişkenlere metinsel bir değer atanacak ise tırnaklar içerisinde yazılmalıdır.
        - Değişkenler önce tanımlanır sonra kullanır.
        */

        // Örnek Uygulamalar
        $ad_soyad = "Mustafa Açıkyol";
        $yas      = 42;
        $il       = "İstanbul";

        echo "Ad Soyad : $ad_soyad <br> Yaş : $yas <br> İl : $il <br>";

        // Link Veren yapıyı değişkenler ile tanımla ve sayfaya değişkenleri çağır.
        // <a href="https://www.google.com" title="Açıklama"> Tıkla </a>
        $adres = "https://www.google.com";
        $title = "Google ana sayfası";
        $link = "Google";
        echo "<a href='$adres' title='$title'> $link </a>";
        echo '<a href="$adres" title="$title"> $link </a>';

        // Değişken kullanılacak alanlarda echo da çift tırnak kullan içeride tek tırnak kullan.

    ?>

</body>

</html>
