<?php

//Variável que verifica a autenticação 
$usuario_autenticado = false;
    
//Usuarios do sistema HARDCODE
$usuario_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    array('email' => 'rodrigo@teste.com.br', 'senha' => 'abcd'),

);

echo '<pre>';

foreach ($usuario_app as $user ) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        //Será true apenas se entrar nessa condição.
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado == true){
    echo 'Usuário autenticado';
} else {
    //Dois parametros: location(string) e destino
    header('location: index.php?login=erro');
}




print_r($_POST);

?>