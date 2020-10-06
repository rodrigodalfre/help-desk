<?php

session_start();

//Se acaso não existir o autenticado
if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] == 'NAO'){
  header('location: index.php?login=erro2');
}

?>