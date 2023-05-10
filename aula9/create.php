<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $nome = 'jorge';
    // $idade = 20;
    $idade = 'erro';
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

        echo "usuario criado com sucesso";
    } catch (PDOException $e) {
        echo $e->getMessage();
    } finally {
        echo "<br><br>";
        echo "Erro ao criar usuario";
        
    }

    function newException($error)
    {

    }
?>