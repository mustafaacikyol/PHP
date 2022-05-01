<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Cookies - Çerezler - Oturum Aç</title>
</head>

<body>
  <p>
    <?php
      /*
      COOKİES - ÇEREZLER - BİLGİSAYAR DOSYA BIRAKMA

      Bilgisayarda yapılan bir işlemin belli bir süre geçmeden tekrar yapılması için bilgisayara bir dosya bırakılır. Sayfa açıldığında cookie kontrol edilerek işlemin yapılıp yapılmaması sağlanır. Cookilere bir ömür verilebilir. O süre dolunca cookie sonlanır veya biz cookie kontrollü bir şekilde de sonlandırabiliriz.

      Cookie tanımlamak için 

      setcookie("değişken","değer",ömür_zaman);
      setcookie("admin",$kullanici_adi,time()+60*60*24);

      Sonlandırırken de 
      setcookie("değişken",""); -- Değeri boş bırakmak veya verilen süreyi - yönde vermek cookiye sonlandırır.
      setcookie("admin",""); -- sonlandırır.
      setcookie("admin",$kullanici_adi,time()-60*60*24); -- sonlandırır.


      Cookie yi çağırıken

      $_COOKIE["admin"]


      */

      error_reporting(0);
      if ($_COOKIE["yonetici"] != "") {
        header("location:25-cookie-oturum-acik-1.php");
      }

      $yonetici     = $_POST["yonetici"];
      $parola       = $_POST["parola"];

      if ($yonetici == "admin" and $parola == "1234") {

        setcookie("yonetici", "Mustafa Acikyol", time() + 10 * 60);
        echo "Oturum açıldı";
        header("refresh:1;url=25-cookie-oturum-acik-1.php");
      } else {
        if ($_POST["button"]) {
          echo "HATA : Tekrar dene";
        }


    ?>
    <form id="form1" name="form1" method="post" action="">
      <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <td colspan="2">OTURUM AÇ</td>
        </tr>
        <tr>
          <td>Yönetici</td>
          <td><input type="text" name="yonetici" id="yonetici" required=""></td>
        </tr>
        <tr>
          <td>Parola</td>
          <td><input type="password" name="parola" id="parola" required=""></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Oturum aç"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </form>

    <?php
      }
    ?>

  </p>

</body>

</html>
