<?php


function show()
{
    $pdo = new PDO('mysql:host=localhost; dbname=helthtrackr', 'root', 'root');
            
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_SESSION['role_id'] == 6 ) {
        $stmt = $pdo->prepare("SELECT a.id, b.name as user, a.date, a.value, a.qtde, c.name as product FROM sales as a JOIN users as b ON a.user_id = b.id JOIN products as c ON a.product_id = c.id where a.user_id =:user_id");
        $stmt->execute(['user_id' =>  $_SESSION['user_id']]); 
    } else {
        $stmt = $pdo->prepare("SELECT a.id, b.name as user, a.date, a.value, a.qtde, c.name as product FROM sales as a JOIN users as b ON a.user_id = b.id JOIN products as c ON a.product_id = c.id");
        $stmt->execute();
    }

    $query = $stmt->fetchAll();

    $sales = [];
    foreach ($query as $row) {
        $sales[] = [
            'id' => $row['id'],
            'user' => $row['user'],
            'date' => $row['date'],
            'value' => $row['value'],
            'qtde' => $row['qtde'],
            'product' => $row['product'],
        ];
    }
    return $sales;
}