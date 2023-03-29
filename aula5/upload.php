<?php
include '../lib/file_handler.php'
// print_r($_POST);
// echo '<br><br>';
// print_r($_FILES);

/*
 $prefix prefixo do arquivo
 
 $root contem diretorio raiz
 
 $dir contem o diretorio em que sera salvo o arquivo 
 
 $file guarda o nome do arquivo
 
 $limit define o tamanho limite para os arquivos
 
 move_uploaded_files() move o arquivo indicado e salva arquivo no local indicado no segundo parametro
*/

$filename = "foto-perfil";
$prefix = date("ymdhis");
$root = $_SERVER['DOCUMENT_ROOT'];
$dir = $root.'/code/assets/img/'; // ALTERAR PARA O DIRETORIO DESEJADO!
$k = 1;

if (isset($_FILES[$filename])) {
    //  $file = $dir.$_FILES['foto-perfil']['name'];
    $file = $dir.$prefix.'_'.$_FILES['foto-perfil']['name'];

    // verificar se o arquivo tem a extensão esperada 
    k *= correctFileType($file);

    //  verificar se o arquivo respeita os limites da aplicação
    $k *= allowedFileSize($filename);

    //  verificação de existência
    $k *= file_exists($file) ? 0 : 1;

    // OUTRAS FORMAS DE FAZER

    // verificar se o arquivo tem a extensão esperada
    // $filetype = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    // $allowed = ['jpg', 'jpeg', 'png', 'pdf', 'gif', 'webp', 'ico' ]
    
    // if (! in_array($filetype, $allowed)) {
    //     echo 'Arquivo não suportado pelo sistema';
    //     return;
    // }
    
    
    
    // Opção de verificação da extensão do arquivo
    // if (! strcmp($filetype, 'jpg')) {
    //     echo 'Arquivo não suportado pelo sistema';
    // }
    
    //  verificar se o arquivo respeita os limites da aplicação
    // $limit = 5000;
    
    // if ($_FILES["foto-perfil"]["size"] > 1024000) {
    // if ($_FILES["foto-perfil"]["size"] > $limit) {
    //     echo 'Arquivo maior que o limite do sistema';
    //     return;
    // }
    
    
    //  verificação de existência
    // if (! file_exists($file)) {
    //     echo 'Arquivo já existe no sistema';
    //     return;
    // }
    
    
    if ($k) {
        // usar o @ serve para suprimir a mensagem de erro
        // @move_uploaded_file($_FILES['foto-perfil']['tmp_name'], $file);
        move_uploaded_file($_FILES['foto-perfil']['tmp_name'], $file);
        echo "Arquivo $file enviado com sucesso";
    } else {
        echo 'Seu arquivo não foi enviado com sucesso!';
    }
}

$v = scandir($dir);

foreach ($v as $key => $value) {
    echo '<a href="'.$dir.$value'" class="btn btn-success">Download</a>'.$value.'<br>';
}