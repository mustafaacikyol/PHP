<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Rand Fonksiyonu ile Rastgele Sayı Üretmek</title>
</head>

<body>

  <p>

    <?php
      // rand : Rastgele sayı üreten hazır bir PHP fonksiyonudur. Belirtilen aralıklarda rastgele sayı üretir. Özellikle rastgele banner, reklam veya özlü sözler göstermek için kullanılabilir. En önemlisi sitede yorum alanı veya form alanı varsa otomatilk bir yazılımla bilgi göndermeyi rand fonksiyonu ile engellemek mümkündür. 

      // Örnek : 1 ile 10 arasında rastgele sayı ürettir.
      echo rand(1, 10) . "<br>";

      // Örnek : 1000 ile 9999 arasında rastgele sayı ürettir.
      echo rand(1000, 9999) . "<br>";

      //-------------------------------------------------------------------------------- 

      // Soru : Rand ile Harf ve rakamlardan oluşan 6 Haneli Güvenlik kodu ürettirin.

      $dizi  =  array("a", 1, "B", 2, "c", 3, "d", 4, "E", 5, "F", 6, "H", 7, "k", 8, "M", 9);
      $kod   = "";
      for ($x = 1; $x <= 6; $x++) {
        $kod   =   $kod . $dizi[rand(0, count($dizi) - 1)];
      }
      echo "Güvenlik kodu : $kod <br>";

      //-------------------------------------------------------------------------------- 

      // Rand Fonksiyonu ile resim değiştirme

    ?>

    <img src="resimler/fon<?php echo rand(1, 5) ?>.jpg" alt="">

  </p>

</body>

</html>
