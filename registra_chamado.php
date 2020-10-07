<?php

#https://www.php.net/manual/en/function.fopen.php
$arquivo = fopen('arquivo.hd', 'a');

//Transforma um array em uma string
$texto = implode(' # ', str_replace('#', '', $_POST)) . PHP_EOL;

fwrite($arquivo, $texto);

fclose($arquivo);

?>