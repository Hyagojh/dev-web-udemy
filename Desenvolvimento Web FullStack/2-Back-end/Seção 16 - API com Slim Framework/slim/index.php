<?php

/*  MANIPULAÇÃO DO BD DA API COM ILUMINATE
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Illuminate\Database\Capsule\Manager as Capsule;

require 'vendor/autoload.php';

$app = new \Slim\App(['settings' => ['displayErrorDetails' => true]]);


$conteiner = $app->getContainer();
$container['db'] = function(){
    $capsule = new Capsule;
    $capsule->addConnection([
        'driver'   => 'mysql',
        'host'     => 'localhost',
        'database' => 'database',
        'username' => 'root',
        'password' => 'password',
        'charset'  => 'utf8',
        'collation'=> 'utf8_unicode_ci',
        'prefix'   => '',
    ]);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

$app->get('/bd', function(Request $request, Response $response){
    $db = $this->get('db');
    $db->schema()->dropIfExists('usuarios');
    $db->schema()->create('usuarios', function($table){
        $table->increments('id');
        $table->string('nome');
        $table->string('email');
        $table->timeStamps();        
    });

$db->table('usuarios')->insert([
    'nome'  => 'Hyago',
    'email' => 'teste@gmail.com'
]);

$db->table('usuarios')->where('id', 1)->update([
    'nome'  => 'Carlos',
    'email' => 'teste2@gmail.com'
]);

$db->table('usuarios')->delete();

//listagem
$usuarios = $db->table('usuarios')->get();
foreach($usuarios as $usuario){
    echo $usuario->nome . '<br>';
}

});

$app->run();
*/


/* TIPOS DE RESPOSTAS: CABEÇALHO, TEXTO, JSON, XML

//CABEÇALHO-TEXTO
$app->get('/header', function(Request $request, Response $response){

    $response->write('Esse é um retorno header');
    return $response->withHeader('allow', 'PUT')->withAddedHeader('Content-Length', 10);

});

//JSON
$app->get('/json', function(Request $request, Response $response){

    return $response->withJson([
        "nome" => "Jaques Hyago",
        "email" => "teste@teste.com"
    ]);
    

});

//XML 
$app->get('/xml', function(Request $request, Response $response){

    $xml = file_get_contents('arquivo');
    $response->write($xml);

    return $response->withHeader('Content-Type', 'application/xml');

});
*/


/* MIDDLEWARE: basicamente adicionam camadas de execução de código dentro da sua aplicação, antes da execução principal. Por ex: um middleware que faz a autenticação de um usuário antes que ele consiga acessar qualquer rota. O método 'add' permite adicionar um middleware, podendo ser chamado a partir de uma função anônima ou através de uma classe e do método mágico invoke.  

$app->add(function($request, $response, $next){
    /* Caso escrito apenas com essa linha, o usuário não seguiria para as próximas rotas, visto que isso não foi configurado e é esse o trabalho de um middlewar. 
    //$response->write('Início camada 1 + '); 
    //return $next($request, $response);
   
    /* de maneira recursiva faz as camadas de end (saída do middleware)
    $response =  $next($request, $response);
    $response->write(' + Fim camada 1');
    return $response;
});

$app->add(function($request, $response, $next){
    $response->write('Início camada 2 + ');
 
    $response =  $next($request, $response);
    $response->write(' + Fim camada 2');
    return $response;
});

// $app->add(function($request, $response, $next){
//     $response->write('Início camada 2 + ');
//     return $next($request, $response);
// });

$app->get('/usuarios', function(Request $request, Response $response){

    $response->write("Ação principal dos usuários");

});

$app->get('/postagens', function(Request $request, Response $response){

    $response->write("Ação principal: postagens");

});

*/


/* CONTAINER DEPENDENCY INJECTION 
class Servico{

}

$servico = new Servico;

/* A classe "Servico" não pode ser 'vista' de dentro da função anônima, seria possível utilizar o 'use', entretanto, em casos de muitas classes, é melhor uma injeção de dependências. */

/* Container Pimple - disponibiliza serviços que podem ser utilizados pelo App 

$container = $app->getContainer();
$container['servico'] = function(){
    return new Servico;
};

$app->get('/servico', function(Request $request, Response $response){
    $servico = $this->get('servico');
    var_dump($servico);
});

/* Controllers como serviço 
$container = $app->getContainer();
$container['Home'] = function(){
    return new MyApp\Controllers\Home( new MyApp\View );
};
$app->get('/usuario','Home:index');

*/

/* PADRÃO PSR-7 
$app->get('/postagens', function($request, $response){
    /* Escreve no corpo da resposta utilizando o padrão PSR7 
    $response->getBody()->write("Listagem de postagens");
    return $response;
});

/* Seria necessário criar todo um formulário parar testar o método de requisição post, entretanto é possível usar extensões que façam esse teste sem essa necessidade.

$app->post('/usuarios/adiciona', function($request, $response){
    /* Recupera post ($_POST)  
    $post = $request->getParseBody();
    $nome = $post['nome'];
    $email = $post['email'];

    /* Salvar no BD com INSERT INTO... 

    return $response->getBody()->write($nome . " - " . $email);
});

/* PUT 
$app->put('/usuarios/atualiza', function($request, $response){
    /* Recupera post ($_POST)  
    $post  = $request->getParseBody();
    $id    = $post['id'];
    $nome  = $post['nome'];
    $email = $post['email'];

    /* Atualizar no BD com UPDATE...

    return $response->getBody()->write($nome . " - " . $email . " - " . $id);
});

/* delete 
$app->delete('/usuarios/remove', function($request, $response){
    
    $id = $request->getAttribute('id');     

    /* Deletar no BD com DELETE...

    return $response->getBody()->write("Sucesso ao deletar: " . $id);
    
});
*/

/* CRIAÇÃO, NOMEAÇÃO E AGRUPAMENTO DE ROTAS
$app->get('/postagens2', function(){
    echo "Lista postagens";
});

//colchetes tornam a inserção de valor opcional 
$app->get('/usuarios[/{id}]', function($request, $response){
    $id = $request->getAttribute('id');
    echo "Listagem de usuários ou ID: ".$id; 
});

$app->get('/postagens[/{ano}[/{mes}]]', function($request, $response){
    $ano = $request->getAttribute('ano');
    $mes = $request->getAttribute('mes');

    echo "Listagem de postagens ano: ". $ano . " mês: ". $mes; 
});

$app->get('/lista/{itens:.*}', function($request, $response){
    $itens = $request->getAttribute('itens');

    var_dump(explode("/", $itens));
});


//NOMEAR ROTAS
$app->get('/blog/postagens/{id}', function($request, $response){
    echO "Listarr postagem para um ID";
})->setName("Blog");

$app->get('/meusite', function($request, $response){
    $retorno = $this->get("router")->pathFor("blog", ["id" => "5"]);

    echo $retorno;
});

//AGRUPAR ROTAS

$app->group('/v1', function(){

    $this->get('/usuarios', function(){
        echo "Listagem de usuários";
    });

    $this->get('/postagens', function(){
        echo "Listagem de postagens";
    });

});*/


