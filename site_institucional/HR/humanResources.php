<?php
$pdo = new PDO('mysql:host=localhost; dbname=helthtrackr', 'root', 'root');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function show($pdo)
{
    
    if ($_SESSION['role_id'] == 6 ) {
        $stmt = $pdo->prepare("SELECT * FROM users");
        $stmt->execute(['role_id' =>  $_SESSION['role_id']]);
    } else {
        $stmt = $pdo->prepare("SELECT * FROM users");
        $stmt->execute();
    }
    
    $query = $stmt->fetchAll();
    $users = [];
    foreach ($query as $row) {
        $users[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'email' => $row['email'],
            'profile' => $row['user_role_id'],
        ];
    }
    return $users;
}

function store()
{
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $id = $_POST["id"];

    $stmt = $pdo->prepare("INSERT INTO users (nome, password, email) VALUES (:nome, :password, :email)");
    $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]); 
}

function edit()
{
    $stmt = $pdo->prepare("SELECT b.slug, b.menu, b.route, b.menu_description FROM roles_permission as a LEFT JOIN permissions as b ON a.permission_id = b.id WHERE a.role_id=:role_id");
    $stmt->execute(['role_id' =>  $_SESSION['role_id']]); 
}

function update()
{
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $id = $_POST["id"];

    $stmt = $pdo->prepare("update cliente set nome = '".$nome."', email = '".$email."',telefone = '".$tel."' where idcliente = ".$id);
    $stmt->execute(['role_id' =>  $_SESSION['role_id']]); 
}

function delete()
{
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $id = $_POST["id"];

    $stmt = $pdo->prepare("update cliente set nome = '".$nome."', email = '".$email."',telefone = '".$tel."' where idcliente = ".$id);
    $stmt->execute(['role_id' =>  $_SESSION['role_id']]); 
}