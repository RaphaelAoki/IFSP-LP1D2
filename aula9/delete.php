<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $id = 1;

    $pdo = new PDO('mysql:host=localhost; dbname=lp1d2', 'root', 'root');

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('DELETE FROM pessoas WHERE id_pessoa = :id');

    $stmt->execute(array(
        "id" => $id
    ));
?>