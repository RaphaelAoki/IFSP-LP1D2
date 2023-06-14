<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

// $name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

// LOGIN USUARIO
try {
    $pdo = new PDO('mysql:host=localhost; dbname=helthtrackr', 'root', 'root');
        
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->prepare("INSERT INTO users (nome, password, email) VALUES (:nome, :password, :email)");
    $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]); 
    $user = $stmt->fetchAll();

    if (count($user) == 0) {
        throw new Exception("Usuario não encontrado", 402);
    }

    foreach ($user as $row) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
    }

    header('Location: http://localhost/code/site_institucional/');
} catch (Exception $e) {
    // return $e->getMessage();
    // header('Location: http://localhost/code/site_institucional/login');
}
