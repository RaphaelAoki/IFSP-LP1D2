<?php
    session_start();
    // session_destroy();
    $mock = [
        [
            'nome' => 'Jhon',
            'papel' => 'cord', // cord
        ],
        [
            'nome' => 'Mario',
            'papel' => 'dir', // dir
        ],
    ];

    $nome = $_POST['nome'];

    foreach ($mock as $data) {
        if ($data['nome'] == $nome) {
            $_SESSION['username'] = $nome;
            $_SESSION['papel'] = $data['papel'];
            break;
        } else {
            $_SESSION['username'] = null;
            $_SESSION['papel'] = null;
        }
        
        // $username = $_SESSION['username'];
        // if(isset($_SESSION['username'])) {
        //     echo "session | $username";
        // }
    }
    header('location: index.php');
?>