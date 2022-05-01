<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Session Oturum Aç</title>
</head>

<body>
  <p>
    <?php
      /*
      SESSION - OTURUM YÖNETİMİ

      Php de Oturum (Session) ile ziyaretçi bilgilerini birden sazla sayfada kullanmak mümkündür. Normalde Link veya form ile değişkeni en fazla bir sonraki sayfaya gönderip orada kullanabilirsiniz. Fakat session ile tanımlanan değişkenler tarayıcı (Sayfa) kapatılmadığı sürece istediğimiz kadar alt sayfada kullanabiliriz.  Session ile Kişilere özel sayfalar, yönetim panelleri oluşturmak mümkündür. Oturum açmadan o özel sayfaları göremeyecek. Oturum açtığı zaman görecek. 

      Bir iletişim Formu oluşturup Kullanıcı Adı Parola ile oturum açılacak. Her sayfanın başında Oturum kontrolü yapılacak. Oturum açık değilse o sayfayı görüntüleyemeyecek. İşi bitince Oturumu kapatmak için ya Güvenli Çıkış yapacak. 

      Oturum kullanılan Her sayfanın en başında 

      session_start();

      komutu verilir.  Oturum açılınca 

      $_SESSION[" "] diye bir değişken tanımlanır. Ona değer ataması yapılır. 

      Güvenli Çıkış Butonuna basınca Session ı sonlandırmak için

      session_destroy();

      komutu kullanılır. 

      */
      session_start();
      error_reporting(0);

      //Eğer oturum açılmış ise tekrar şifre istemeden oturum-acik sayfasına gönder
      if ($_SESSION["yonetici" != ""]) {
        header("location:24-session-oturum-acik-1.php");
      }

      //Formdan bilgileri $_POST ile çek 

      $yonetici     =   $_POST["yonetici"];
      $parola       =   $_POST["parola"];

      if ($yonetici == "admin" and $parola == "1234") {
        $_SESSION["yonetici"] = "Mustafa Acikyol";
        echo "Oturum açıldı";
        header("refresh:1;24-session-oturum-acik-1.php");
      } else {
        if ($_POST["button"]) {
          echo "Hata : tekrar dene";
        }
      }

    ?>

    <form id="form1" name="form1" method="post" action="">
      <table width="400" border="0" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <td colspan="2">OTURUM AÇ</td>
        </tr>
        <tr>
          <td>Yönetici</td>
          <td><input type="text" name="yonetici" id="yonetici"></td>
        </tr>
        <tr>
          <td>Parola</td>
          <td><input type="password" name="parola" id="parola"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="button" id="button" value="Oturum aç"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>
          </td>
        </tr>
      </table>
    </form>

  </p>

</body>

</html>
