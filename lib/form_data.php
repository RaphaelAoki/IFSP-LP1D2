<?php 
// os nomes das nossas funções são sempre em português

/**
 * Lê o valor de um item do array GET
 * Retorna string vazia caso o índice name não exista
 * 
 * @param name: o nome do índice associativo
 * @return: string | number
 */
function paramGet($name) {
    return isset($_GET[$name]) ? $_GET[$name] : '';
}

function verificaLogin() {
    $mail = $_POST['email'];
    $pass = $_POST['senha'];

    if(strcmp($mail, 'maria@gmail.com') != 0 || strcmp($pass, '12345678') != 0){
        header('Location: login.php');
    }
}