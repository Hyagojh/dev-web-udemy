<?php

if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);
        
        $query = "select * from tb_usuarios where";
        $query .= " email = :usuario";
        $query .= " AND senha = :senha";

        /*
            proteção através do método prepare que também retorna um PDOStatment, porém ele n executa a query diretamente, ele aguarda uma ordem de execução, oq permite tratar antecipadamente através do método bind value. 

            O primeiro parâmetro do bindValue é uma variável de ligação e o segundo é o valor de fato da ligação, um terceiro parâmetro pode ser aplicado, para que o método saiba o tipo de dado a ser considero em casa de um SQL Injection
        */
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':usuario', $_POST['usuario']);
        $stmt->bindValue(':senha', $_POST['senha'], PDO::PARAM_INT);
        $stmt->execute();

        $usuario = $stmt->fetch();

        echo '<pre>';
        print_r($usuario);
        echo '<pre>';
        
     
    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
    }

}
?>

<html>
    <meta charset="utf-8">
    <title>Login</title>
</html>



<body>
    <form method="post" action="sqlInjection.php">
        <input type="text" placeholder="usuário" name="usuario"/>
        <br/>
        <input type="password" placeholder="senha" name="senha"/>
        <br/>
        <button type="submit">Entrar</button>
    </form>
</body>
