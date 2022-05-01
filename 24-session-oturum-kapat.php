<?php

    session_start();

    //session_destroy();

    //$_SESSION["yonetici"] 	= "";

    unset($_SESSION["yonetici"]);

    header("location:24-session-oturum-acik-1.php");

?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Session Oturum Kapat</title>
</head>

<body>
</body>

</html>
