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
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email=:email and password=:password ");
    $stmt->execute(['email' => $email, 'password' => $password]); 
    $user = $stmt->fetchAll();

    if (count($user) == 0) {
        throw new Exception("Usuario não encontrado", 402);
    }

    foreach ($user as $row) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['role_id'] = $row['user_role_id'];
    }

    // getPermissions($_SESSION['role_id']);
    $stmt = $pdo->prepare("SELECT b.slug, b.menu, b.route, b.menu_description FROM roles_permission as a LEFT JOIN permissions as b ON a.permission_id = b.id WHERE a.role_id=:role_id");
    $stmt->execute(['role_id' =>  $_SESSION['role_id']]); 
    $roles = $stmt->fetchAll();

    $permissions = [];
    foreach ($roles as $row) {
        $permissions[] = [
            'slug' => $row['slug'],
            'menu' => $row['menu'],
            'route' => $row['route'],
            'menu_description' => $row['menu_description'],
        ];
    }
    $_SESSION['permissions'] = $permissions;

    // redirecionar
    switch ($_SESSION['role_id']) {
        case '1':
            header('Location: http://localhost/code/site_institucional/admin');
            break;
        case '2':
            header('Location: http://localhost/code/site_institucional/sales/admin');
            break;
        case '3':
            header('Location: http://localhost/code/site_institucional/human-resources');
            break;
        case '4':
            header('Location: http://localhost/code/site_institucional/customer-service/admin');
            break;
        case '5':
            header('Location: http://localhost/code/site_institucional/sales/colaborator');
            break;
        case '6':
            header('Location: http://localhost/code/site_institucional/customer-service/colaborator');
            break;
                       
        default:
            header('Location: http://localhost/code/site_institucional/');
            break;
    }

} catch (Exception $e) {
    $_SESSION['error'] = $e->getMessage();
    header('Location: http://localhost/code/site_institucional/login');
}

// function getPermissions($role_id)
// {
//     $stmt = $pdo->prepare("SELECT * FROM roles_permission WHERE role_id=:role_id LEFT JOIN table2 ON roles_permission.permission_id = permissions.id;");
//     $stmt->execute(['role_id' => $role_id]); 
//     $roles = $stmt->fetchAll();

//     foreach ($roles as $row) {
//         var_dump($row);
//         die();
//     }
// }