<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Değişken Sorunu</title>
</head>

<body>

  <?php

    // SORUN : Php de Echo için çift tırnak kullanılırsa Çift Tırnak içine yazılan değişkenler sorunsuz çalışır. Ekrana değişkenin değerini gönderir. Fakat echo için tek tırnak kullanılırsa tek tırnak içine yazılan değişknler ekrana değer gönderemez. Yazılan değişkeni ekrana bir yazıymış gibi gönderir. 


    // ÇÖZÜM : Echo da Tek tırnak içerisine yazılan değişkenleri Tırnaklar dışarısına çıkarmak gerekir.  Tek ve çift tırnakların her ikisinde de değişkeni dışarı çıkarabiliriz. Değişkenler tırnaklar dışına çıkarılınca Nokta (.) ile bağlanır.

    // 1-) İki değişkeni tek bir echo ile yazdır. 
    $ad_soyad = "Mustafa AÇIKYOL";
    $yas = "29";
    $il = "İstanbul";

    echo $ad_soyad . " " . $yas . " " . $il . "<br>";

    // 2-) Tek Tırnak İçerisindeki Değişken Sorununun çözümü için Mutlaka değişken dışarı çıkartılmalıdır.

    echo 'Ad Soyad :' . $ad_soyad . ' <br> Yaş :' . $yas . ' <br> İl :' . $il . ' <br>';

    // NOT : Değişkenler tırnaklar dışarısına yazılırsa daha iyi olur diye bir tavsiye vardır.  

    // 3-) İsterseniz çift tırnak içindeki değişkenleri de dışarı çıkarabilirsiniz.

    echo " Ad Soyad :" . $ad_soyad . " <br> Yaş :" . $yas . " <br> İl :" . $il . " <br>";

    // Soru : Link veren Html kodunu Php içine yaz. Tırnak sorununu çöz. Değişkenleri dışarı çıkar.
    // <a href="https://www.google.com.tr" title="Google">www.google.com.tr</a>
    $adres = "https://www.google.com.tr";
    $title = "Google";
    $link = "www.google.com.tr";
    echo "<a href='" . $adres . "' title='" . $title . "'> " . $link . " </a> <br>";
    echo '<a href="' . $adres . '" title="' . $title . '"> ' . $link . ' </a> <br>';

  ?>

</body>

</html>
