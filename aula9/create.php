<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $nome = 'jorge';
    $idade = 20;
    $email = 'jorge@email.com';

    try {
        $pdo = new PDO('mysql:host=localhost; dbname=lp1d2', 'root', 'root');
    
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $pdo->prepare('INSERT INTO pessoas (nome_pessoa, idade_pessoa, email_pessoa) VALUES (:nome, :idade, :email)');
    
        $stmt->execute(array(
            "nome" => $nome,
            "idade" => $idade,
            "email" => $email,
        ));
    } catch (PDOException $e) {
        $e->error_log();
    }

?>