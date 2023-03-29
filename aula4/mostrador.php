<?php

include '../lib/file_handler.php';

$res = rfile("maria@gmail.com");

echo implode(' <br> ', $res);

// foreach ($res as $row) {
//         echo "$row<br>";
// }
?> 