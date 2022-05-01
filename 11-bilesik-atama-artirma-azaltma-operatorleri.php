<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bileşik Atama - Artırma Azaltma Operatörleri</title>
</head>

<body>
  <p>
    <?php
      // BİLEŞİK ATAMA - YANİ ARTIRMA AZALTMA OPERATÖRLERİ 

      $x = 10;

      // x değişkenin değerini 1 artırması için  $x=$x+1;   Yerine kısa kullanım olarak $x++
      // $x++ Önce x i yaz. Sonra değerini 1 artır demektir.  
      echo ++$x . "<br>"; //Önce artır sonra yaz//
      echo $x++ . "<br>"; #Önce yaz sonra artır#
      echo $x++ . "<br>";
      echo $x++ . "<br>";
      echo $x++ . "<br>";
      echo $x++ . "<br>";
      echo $x++ . "<br>";
      echo $x . "<br>";
      echo $x . "<br>";
      echo $x . "<br>";

      // x değişkenin değerini 1 azaltması için  $x=$x-1 Yerine Kısa kullanım olarak $x--

      echo --$x . "<br>";
      echo $x-- . "<br>";
      echo $x-- . "<br>";
      echo $x-- . "<br>";
      echo $x-- . "<br>";
      echo $x . "<br>";
      echo $x . "<br>";
      echo $x . "<br>";

      // x değişkenin değerini 5 artırması için $x=$x+5; Yerine Kısa kullanım olarak $x+=5

      echo $x += 5;
      echo "<br>";
      echo $x += 5;
      echo "<br>";
      echo $x += 5;
      echo "<br>";
      echo $x += 5;
      echo "<br>";

      // x değişkenin değerini 5 kat artırması için $x=$x*5; Yerine Kısa kullanım olarak $x*=5

      echo $x *= 5;
      echo "<br>";
      echo $x *= 5;
      echo "<br>";
      echo $x *= 5;
      echo "<br>";

      // x değişkeni değerini 3 e bölmesdi için $x=$x/3; Yerine Kısa kullanım olarak $x/=3

      echo $x /= 3;
      echo "<br>";
      echo $x /= 3;
      echo "<br>";
      echo $x /= 3;
      echo "<br>";

    ?>
  </p>
  
</body>

</html>
