<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>include</title>
</head>

<body>

  <p>

    <?php

      // include ve require Php içerisine dışarıdan dosya çağırmak için kullanılır. Her sayfada tekrar eden ve değişecek olan bölümleri ayrı bir sayfaya kayıt edip include ve require ile dışarıdan çağırırız.

      // DİKKAT : Include ile dışarıdan çağırılacak sayfalardaki temel html yapısı olmamalıdır. Yani <html> <head> <title> <body> tagleri silinmelidir. 

      include_once("27-menu.php");
      require("27-menu.php");

    ?>

  </p>

</body>

</html>
