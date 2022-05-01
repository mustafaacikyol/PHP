<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Fonksiyon Çağırma</title>
</head>

<body>

    <?php
        include("28-fonksiyon-tanimla.php");

        //Parametresi olmayan bir fonksiyon tanımlayalım
        adres();
        //verilenbir sayının %18 kdv hesaplama
        $fiyat         = 1000;

        echo kdv_18($fiyat) . "<br>";

        echo number_format(kdv_18($fiyat), 2, ",", ".") . "<br>";
        //tutar ve verilen kdv oranına göre kdvli fiyatı hesaplayan fonksiyon. eğer kdv verilmez ise default oran olarak 18 olarak alan fonksiyon.

        echo kdv_hesapla(100) . "<br>";
        echo kdv_hesapla(100, 30) . "<br>";

        $fiyat         = 500;
        $k_oran         = 21;

        $tutar         = $fiyat + kdv_hesapla($fiyat, $k_oran);

        echo $tutar . "<br>";

        // Ev Ödevi : Verilen bir email adresinde baştan ilk iki karakteri göster ondan sonraki karakter sayısı kadar * koy ve @ dahil sonrasını göster.

        // Örnek : mehmet@gmail.com  -  me****@gmail.com

        $email = "mehmet@gmail.com";
        echo email_gizle($email);

        // ÇOK ÖNEMLİ  

        // Soru : Ürün eklerken Ürün adını resim adı olarak verecek, isim içindeki Türkçe karakterleri ve boşlukları düzeltecek, orjinal resimden uzantıyı ürün adından da ismi alacak araya tarih koyacak olan kodu yazın ve fonksiyona dönüştür kullan.

        //1-) Fonksiyonu üye için kullan.

        $uye_adi           = "Mustafa Açıkyol";
        $image             = "1234.png";

        echo seo_uyumlu_resim($uye_adi, $image) . "<br>";

        //2-) Haber için Resim değiştirme

        $haber         = "Son dakika haberi: Şampiyonlar Ligi Kupası sahibini buldu.";
        $resim         = "haber1.jpg";

        echo seo_uyumlu_resim($haber, $resim) . "<br>";

    ?>

</body>

</html>
