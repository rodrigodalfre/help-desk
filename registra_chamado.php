<?php

session_start();

#https://www.php.net/manual/en/function.fopen.php
$arquivo = fopen('arquivo.hd', 'a');

$post = implode(' # ', str_replace('#', '', $_POST));

//Transforma um array em uma string
$texto = $_SESSION['id'] . ' # ' . $post . PHP_EOL;

fwrite($arquivo, $texto);

fclose($arquivo);

?>