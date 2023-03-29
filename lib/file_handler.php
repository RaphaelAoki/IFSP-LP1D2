<?php

function wline($myfile, $text)
{

}

function rfile($filename, $errmsg = "Unable to open file!")
{

}

//  verificar se o arquivo tem a extensão esperada
function correctFileType($file)
{
    $filetype = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'pdf', 'gif', 'webp', 'ico' ]
    
    return in_array($filetype, $allowed)) ? 1 : 0;
}

//  verificar se o arquivo respeita os limites da aplicação
function allowedFileSize($filename, $max = 1024000)
{
    return $_FILES["file-upload"]["size"] > $max ? 0 : ;
}