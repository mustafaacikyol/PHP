<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tarih Saat Fonksiyonu</title>
</head>

<body>
    <?php
        /*
        DATE fonksiyonu

        date("d") - Day : Günü verir. Yani ayın kaçıncı günü olduğunu verir. 26 sı

        date ("m") - Month : Ayı verir. Ayın Rakam karşılığını verir. 11. ay

        date ("Y") - Years : Yılı verir. 4 haneli olarak. 2013 gibi

        date ("H") : Hour : Saati 24 lük saat dilimi ile verir. 19 gibi

        date ("i") : minute : Dakika i olarak kullanılır. 

        date ("s") Second : Saniyeyi verir.

        Farklı bir ülkeden Server kiraladığımız zaman saat veyaz zaman farkı olmasın diye 

        date_default_timezone_set() kodu o sayfada tarih saat fonksiyonundan önce kullanılmalıdır.  

        date_default_timezone_set("Europe/Istanbul");

        */

        date_default_timezone_set('Europe/Istanbul'); // Tarih saat varsa ülke ayarı yapar. (Etc/GMT-3)

        // Gün (Day) İçin 
        echo date("d") . "<br>";
        echo date("D") . "<br>";
        // Ay (Month) için
        echo date("m") . "<br>";
        echo date("M") . "<br>";
        // Yıl (Year) için
        echo date("y") . "<br>";
        echo date("Y") . "<br>";


        // Gün / Ay / Yıl için
        echo date("d.m.Y") . "<br>";
        // Saat (Hours) için
        echo date("h") . "<br>";
        echo date("H") . "<br>";
        // Dakika (Minute) için
        echo date("i") . "<br>";
        // Saniye (Second) için 
        echo date("s") . "<br>";
        // Saat : Dakika : Saniye için
        echo date("H:i:s") . "<br>";
        // Tarih ve Saat bilgisi için
        echo date("d.m.Y H:i:s") . "<br>";
        /*
        Bizim Ülkemizde Tarihler gün / ay / Yıl
        Yurtdışında ay / gün / Yıl
        Mysql de Yani Veritabanında Yıl / Ay / Gün şeklinde yazılır.

        Bu durumlarda Tarihi istediğimiz formatta göstermek için 

        strtotime fonksiyonu kullanılır. 

        date("d/m/Y",strtotime($tarih_degiskeni));
        */

        $k_tarihi = "2015-02-26 20:52:20"; // Yıl Ay Gün şeklinde yazılmış tarihi ekrana Gün Ay Yıl şeklinde yazdırın.
        echo $k_tarihi . "<br>";
        echo date("d.m.Y H:i:s", strtotime($k_tarihi)) . "<br>";

        // Tarih Üzerine Saniye Dakika Saat Gün Ay Yıl Eklemek için
        echo date("d.m.Y H:i:s", strtotime($k_tarihi) + 20) . "<br>"; //20 saniye ekle
        echo date("d.m.Y H:i:s", strtotime($k_tarihi) + 4 * 60) . "<br>"; //4 dakika ekle
        echo date("d.m.Y H:i:s", strtotime($k_tarihi) + 2 * 60 * 60) . "<br>"; //2 saat ekle
        echo date("d.m.Y H:i:s", strtotime($k_tarihi) + 5 * 24 * 60 * 60) . "<br>"; //5 gün ekle
        echo date("d.m.Y H:i:s", strtotime($k_tarihi) + 8 * 365 * 24 * 60 * 60) . "<br>"; //8 yıl ekle
        /* 
        İKİ TARİH ARASINDAKİ ZAMAN FARKINI HESAPLATMAK İÇİN

        İki tarih arasındaki zaman farkını hesaplarkan önce zamanları UNİX zaman dilimine çevirmek gerekir. 

        Şu anda içinde bulunduğumuz zamanın Unix karşılığını 

        time(); 

        Fonksiyonu bulur.

        Geçmiş bhir tarihin UNİX karşılığını bulmak için mktime() fonksiyonu kullanılır.

        mktime(saat,dakika,saniye,ay,gun,yıl);

        fark=Şu andaki zamannın Unix karşılığı - Eski tarihin Unix Karşılığı;

        */
        $yorum_zamani   = "10.02.2017 08:21:40";

        $gun            =     substr($yorum_zamani, 0, 2);
        $ay             =     substr($yorum_zamani, 3, 2);
        $yil            =     substr($yorum_zamani, 6, 4);
        $saat           =     substr($yorum_zamani, 11, 2);
        $dakika         =     substr($yorum_zamani, 14, 2);
        $saniye         =     substr($yorum_zamani, 17, 2);

        $simdi_unix     =     time();
        $yorum_unix     =    mktime($saat, $dakika, $saniye, $ay, $gun, $yil);

        $fark_saniye    =     $simdi_unix - $yorum_unix;
        echo "Yorum yapılalı ";

        if ($fark_saniye < 60) {
            echo $fark_saniye . " saniye ";
        } elseif ($fark_saniye < 60 * 60) {
            $dakika = $fark_saniye / 60;
            echo floor($dakika) . " dakika ";
        } elseif ($fark_saniye < 24 * 60 * 60) {
            $saat = $fark_saniye / (60 * 60);
            echo floor($saat) . " saat ";
            echo " oldu ";
        } elseif ($fark_saniye < 365 * 24 * 60 * 60) {
            $gun = $fark_saniye / (24 * 60 * 60);
            echo floor($gun) . " gün ";
            echo " oldu ";
        } else {
            $yil = $fark_saniye / (365 * 24 * 60 * 60);
            echo floor($yil) . " yıl ";
            echo " oldu ";
        }


    ?>

</body>

</html>
