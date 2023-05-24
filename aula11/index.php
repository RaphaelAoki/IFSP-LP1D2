<?php
    session_start();
    // session_destroy();
    // ini_set('session.gc_maxlifetime', 86400 * 30 ); // expira em 30 dias
    // $_SESSION['username'] = 'Aoki';
    // $_SESSION['papel'] = 'dir';

    // setcookie('username', 'Aoki', time() + 86400 * 30);
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
    <form action="session.php" method="post">
        <input type="text" name="nome" id="nome">
        <button type="submit">logar</button>
    </form>

    <?php
        if (isset($_SESSION['username']) && $_SESSION['papel'] === "cord") {
            echo '<a href="coordenador.html" >coordenador</a>';
        } else if (isset($_SESSION['username']) && $_SESSION['papel'] === "dir") {
            echo '<a href="diretor.html" >diretor</a>';
        } else {
            echo 'no session';
        }

        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<br>session | $username";
        }

        // if(isset($_COOKIE['username'])) {
        //     echo "<br>cookie | $username";
        // }
    ?>
</body>
</html>