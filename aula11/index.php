<?php
    session_start();
    session_destroy();
    ini_set('session.gc_maxlifetime', 86400 * 30 ); // expira em 30 dias
    $_SESSION['username'] = 'Aoki';

    setcookie('username', 'Aoki', time() + 86400 * 30);
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
        $username = $_SESSION['username'];
        if(isset($_SESSION['username'])) {
            echo "session | $username";
        }

        if(isset($_COOKIE['username'])) {
            echo "<br>cookie | $username";
        }
    ?>
</body>
</html>