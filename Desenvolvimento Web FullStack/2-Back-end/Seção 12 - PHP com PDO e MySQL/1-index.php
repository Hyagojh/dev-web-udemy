<?php
    /*
        PDO - PHP Data Objects: 

        Consiste em um conjunto de objetos que auxilia no trabalho com banco de dados, o seu objetivo é prover uma padronização no php na forma em que o mesmo se comunica com os bancos de dados. Os objetos são agregados no formato de extensão, que podem ser habilitados ou desabilitados através do arquivo php.ini

        Isso garante grande compatibilidade com os mais diversos bancos de dados, onde o PDO funciona como uma interface, que define regras a serem seguidas, onde ao mudar o SGBD é necessário apenas mudar o driver de comunicação, dispensando a necessidade de se alterar todo o código, chamadas e parâmetros. Nos fornece também uma boa camada de segurança, inclusive contra SQL Injections.
    */

    /*
        Primeiro parâmetro é o Data Source Name, indica qual o driver de conexão a ser utilizado e demais informações sobre onde o banco está e o nome do banco a ser utilizado.

        Segundo parâmetro: usuário do banco de dados e senha
    */

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {

        $conexao = new PDO($dsn, $usuario, $senha);

        /*
            Executando instruções SQL com método exec, que  retorna o número de linhas alteradas ou removidas no bd. DDL e 'Selects', por exemplo, retornariam 0 pois não estão nem modificando e nem removendo registros.
        
        $query = '
            CREATE TABLE IF NOT EXISTS tb_usuarios(
                id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                nome VARCHAR(50) NOT NULL,
                email VARCHAR(100) NOT NULL,
                senha VARCHAR(32) NOT NULL
            );
        ';

        $retorno = $conexao->exec($query);
        echo $retorno;

        $query = '
            INSERT INTO tb_usuarios (nome, email, senha)
            VALUES ("Jaques", "Jaques@teste.com.br", "123456");
        ';
        
        $retorno = $conexao->exec($query);
        echo $retorno;

        $query = '
            DELETE FROM tb_usuarios';
        
        $retorno = $conexao->exec($query);
        echo $retorno;
        */
        
        /*$query = '
            INSERT INTO tb_usuarios (nome, email, senha)
            VALUES ("Jaques", "Jaques@teste.com.br", "123456"),
            ("José", "Jose@teste.com.br", "123"),
            ("Maria", "maria@teste.com.br", "777");
        ';

        $retorno = $conexao->exec($query);*/ 

        /*
            Método query do PDO para o PHP enviar instruções SQL ao PDO, onde o PDO devolverá um PDOStatment Object  que contenha a declaração da query e permita recuperar as informações contidas no Banco de Dados
         
            Testes com PDOStatment
        */

        /*$query = '
            SELECT * FROM tb_usuarios;
        ';

        $statment = $conexao->query($query);

        /*
            retorna todos os registros recuperados com a consulta e através de parâmetros podemos trabalhar os tipos de retorno. Para trazer apenas os índices de forma associativa usa-se 'PDO::FETCH_ASSOC', apenas numérico 'PDO::FETCH_NUM', para ambos é ou nenhum parâmetro ou 'PDO::FETCH_BOTH', retornar um Array de objetos = 'PDO::FETCH_OBJ', nesse caso é preciso também modificar o método de acesso.
        */

        /*
        $lista = $statment->fetchAll(PDO::FETCH_OBJ); 

        echo '<pre>';
        print_r($lista);
        
        echo$lista[0]['nome'];
        echo $lista[1]->nome;
        */

        /*
            Método fetch retorna apenas um registro, os retornos podem esperar os mesmos parâmetros do fetchAll. 
        */
        
        /*
        $query = '
            SELECT * FROM tb_usuarios 
            WHERE id = 8;
        ';

        $statment = $conexao->query($query);

        $usuario = $statment->fetch(PDO::FETCH_OBJ); 

        echo '<pre>';
        print_r($usuario);
        echo '<pre>';

        echo $usuario->nome;
        */

        /*
            Listando registros com for each
        

        $query = '
            SELECT * FROM tb_usuarios';

        $statment = $conexao->query($query);

        $lista_usuarios = $statment->fetchAll(PDO::FETCH_ASSOC);

        foreach($lista_usuarios as $key => $value) {
            echo $value['nome'];
            echo '<hr>';
        }
        */

        /*
            query on the run, recuperar os registros no instante da execução do método query.
        */

        $query = '
            SELECT * FROM tb_usuarios';

        foreach($conexao->query($query) as $key => $value) {
            print_r($value);
            echo '<hr>';
        }


    } catch(PDOException $e) {

        echo 'Erro: ' .$e->getCode(). '<br>Mensagem: ' .$e->getMessage();

    }

?>