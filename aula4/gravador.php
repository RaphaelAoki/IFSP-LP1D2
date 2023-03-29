<?php

include '../lib/file_handler.php';

//$data = date('ymdhis');
//$filename = $data.'-'.strtolower($_POST['nome']).'-'.($_POST['snome']).'.txt';

$filename = $_POST['email'];
$myfile = fopen($filename, "a") or die("Unable to open file!");

wline($myfile, $_POST['nome'].' '.$_POST['snome']);
wline($myfile, $_POST['email'].' '.$_POST['telefone']);
wline($myfile, $_POST['mensagem']);
wline($myfile, '');


fclose($myfile);

echo 'Arquivo gravado com sucesso!';
?> 