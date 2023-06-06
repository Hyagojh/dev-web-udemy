<?php

/*
    Para criar rotas protegidas, muitas linguagens de programação utilizam o recurso de sessão, que faz com que determinada instância do browser, a partir de um ID tenha condições de acessar uma determinada sessão do lado do servidor, que nada mais é que um espaço de memória onde é possível do lado do servidor, armazenar algumas informações que conecte a instância da aplicação do lado do servidor, com a instância da aplicação do lado do cliente. Esse ID é sempre transitado na requisição através de um cookie ou URL, para que a linguagem tenha condições de recuperar os dados e acessar o espaço de memória dedicado àquela instância do browser em especial.
*/

/*
    sempre antes de qualquer instrução que faça algum output de dados
*/
    session_start();


/*
    Entre a requisição e a resposta na arquitetura cliente-servidor, é possível anexar informações, via protocolo HTTP. O browser possuí a inteligência para encapsular as informações e formar uma requisição http, preenchendo o cabeçalho e o corpo da requisição e o apache do outro lado capaz de receber o request e submeter essa requisição à um script e receber o retorno do mesmo, a comunicação entre o apache e a linguagem de programação é conhecida como CGI.
*/

/*
    $_GET é uma super global e um array que recupera os dados via método GET (que expõe os parâmetros do formulário na URL), através do atributo 'name' no html, e os atribuí a uma posição do array.


    $_GET['email'];
    $_GET['senha'];
*/

/*
    Já o método POST, anexa os dados do formulário dentro da própria requisição, o tornando assim mais seguro.


print_r($_POST);
$_POST['email'];
$_POST['senha'];

*/

//variável que verifica se a autenticação foi realizada
$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

$usuarios_app = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '12345', 'perfil_id' => 1 ),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '12345', 'perfil_id' => 1),
    array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '12345', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '12345', 'perfil_id' => 2)
);

foreach($usuarios_app as $user){

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_perfil_id = $user['perfil_id'];
    }
}

if($usuario_autenticado){
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location:home.php');
} else{
    $_SESSION['autenticado'] = 'NÃO';
    //força o redirecionamento
    header('Location:index.php?login=erro');
}

?>