<?php

session_start();

//Variável que verifica a autenticação 
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(
    1 => "Adm",
    2 => 'User'
);
    
//Usuarios do sistema HARDCODE
$usuario_app = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2),
    array('id' => 3, 'email' => 'rodrigo@teste.com.br', 'senha' => 'abcd', 'perfil_id' => 2),
);

echo '<pre>';

foreach ($usuario_app as $user ) {
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        //Será true apenas se entrar nessa condição.
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_id_perfil = $user['perfil_id'];
    }
}

if($usuario_autenticado == true){
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_id_perfil;
    header('location: home.php');

} else {
    //Dois parametros: location(string) e destino
    $_SESSION['autenticado'] = 'NAO';
    header('location: index.php?login=erro');
}

?>