<?php
    $value = 'alguma coisa de algum lugar';
    setcookie("CookieTeste", $value);
    setcookie("CookieTesteTime", $value, time()+3600);  /* expira em 1 hora */

    // trabalhando com sessão
    session_start();

    $_SESSION['email'] = 'maria@mail.com';
    $_SESSION['nome'] = 'Maria';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if (isset($_COOKIE['CookieTeste'])) {
            echo $_COOKIE["CookieTeste"];
            // print_r($_COOKIE);
        } else {
            // echo "Cookie não encontrado";
        }

    ?>
</body>
</html>