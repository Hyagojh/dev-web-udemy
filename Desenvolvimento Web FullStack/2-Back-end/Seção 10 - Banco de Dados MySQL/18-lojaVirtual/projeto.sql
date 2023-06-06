/*
    O relacionamento entre tabelas consiste em tentar 'imitar' a relação entre as coisas que existem no mundo real. Ex: uma tabela de alunos, outra de cursos e disciplinas... onde um curso pode possuir muitas disciplinas e um aluno se matricular em muitos cursos, um curso pode ter diversos alunos e assim por diante. Existem três tipos possíveis de relação entre tabelas: um para um, um para muitos e muitos para muitos.

    CHAVE PRIMÁRIA: Constituída por um ou mais campos e tem por objetivo servir como um identificador único para cada registro dentro de uma tabela.

    CHAVE ESTRANGEIRA: É uma referência à uma chave primária de outra tabela.
*/

/*
    RELACIONAMENTO UM PARA UM: A descrição técnica só existirá se existir o produto, um produto tem apenas uma descrição técnica e uma descrição técnica se trata apenas de um produto.
*/

CREATE DATABASE db_loja_virtual

CREATE TABLE tb_produtos(
    id_produto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    produto VARCHAR(200) NOT NULL,
    valor FLOAT(8,2) NOT NULL
);

CREATE TABLE tb_descricoes_tecnicas(
    id_descricao_tecnica INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL ,
    descricao_tecnica TEXT NOT NULL,
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto)
);

/*
    POPULANDO AS TABELAS
*/

INSERT INTO tb_produtos(produto, valor) VALUES ('Notebook Dell Inspiron Ultrafino Intel Core i7, 16GB RAM e 240GB SSD', 3500.00);

INSERT INTO tb_produtos(produto, valor) VALUES ('Smart TV LED 40" Samsung Full HD 2 HDMI 1 USB Wi-Fi Integrado', 1475.54);

INSERT INTO tb_produtos(produto, valor) VALUES ('Smartphone LG K10 Dual Chip Android 7.0 4G Wi-Fi Câmera de 13MP', 629.99);


INSERT INTO tb_descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (1, 'O novo Inspiron Dell oferece um design elegante e tela infinita que amplia seus sentidos, mantendo a sofisticação e medidas compactas...');

INSERT INTO tb_descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (2, 'A smart TV da Samsung possui tela de 40" e oferece resolução Full HD, imagens duas vezes melhores que TVs HDs padrão...');

INSERT INTO tb_descricoes_tecnicas(id_produto, descricao_tecnica) VALUES (3, 'Saia da mesmice. O smartphone LG está mais divertido, rápido, fácil, cheio de selfies e com tela HD de incríveis 5,3"...');

/*
    RELACIONAMENTO UM PARA MUITOS: A tabela de imagens será responsável por armazenar uma ou N imagens referentes ao produto. Um produto pode ter muitas imagens, mas um conjunto de imagens só podem pertencer a um produto. Um id (chave estrangeira) é capaz de 'armazenar' mais de um valor. 
*/

CREATE TABLE tb_imagens(
    id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL,
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto),
    url_imagem VARCHAR(200) NOT NULL
);

INSERT INTO tb_imagens(id_produto, url_imagem)VALUES(1, 'notebook_1.jpg'), (1, 'notebook_2.jpg'), (1, 'notebook_3.jpg');

INSERT INTO tb_imagens(id_produto, url_imagem)VALUES(2, 'smart_tv.jpg'), (2, 'smart_tv2.jpg');


/*
    RELACIONAMENTO MUITOS PARA MUITOS: Um cliente pode realizar muitos pedidos e um pedido pode conter muitos produtos e um mesmo produto pode estar em muitos pedidos diferentes. Esse tipo de relacionamento exige uma tabela auxiliar, que guarda o relacionamento, com as duas foreign key. Relaciona o pedido de id 1, com o produto de id 2 e assim por diante.    
*/

CREATE TABLE tb_clientes(
	id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    idade INT (3) NOT NULL
);

CREATE TABLE tb_pedidos(
	id_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES tb_clientes(id_cliente),
    data_hora DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tb_pedidos_produtos(
	id_pedido INT NOT NULL,
    id_produto INT NOT NULL,
    FOREIGN KEY(id_pedido) REFERENCES tb_pedidos(id_pedido),
    FOREIGN KEY(id_produto) REFERENCES tb_produtos(id_produto)
);

INSERT INTO tb_clientes(nome, idade) VALUES('Jorge', 29);	
INSERT INTO tb_pedidos(id_cliente) VALUES(1);	
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(1, 2);
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(1, 3);
INSERT INTO tb_pedidos(id_cliente) VALUES(1);
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(2,3);
INSERT INTO tb_clientes(nome, idade) VALUES('Jamilton', 30);
INSERT INTO tb_pedidos(id_cliente) VALUES(2);
INSERT INTO tb_pedidos_produtos(id_pedido, id_produto) VALUES(3,1);


/*
    Junções permitem conectar registros de tabelas diferentes, formando com isso resultados compostos por diversas colunas e tabelas diferentes que se relacionem de alguma forma.


    LEFT JOIN: Relaciona todos os registros da tabela à esquerda + CASO EXISTA, todos os registros da tabela à direita onde o relacionamento seja satisfeito.
*/

SELECT 
    *
FROM    
    tb_clientes LEFT JOIN tb_pedidos ON(tb_clientes.id_cliente = tb_pedidos.id_cliente);

SELECT * FROM tb_produtos LEFT JOIN tb_imagens ON (tb_produtos.id_produto = tb_imagens.id_produto)


/*
    RIGHT JOIN: Relaciona todos os registros da tabela à direita + CASO EXISTA, todos os registros da tabela à direita onde o relacionamento seja satisfeito.
*/

SELECT 
    *
FROM    
    tb_clientes RIGHT JOIN tb_pedidos ON(tb_clientes.id_cliente = tb_pedidos.id_cliente);

/*
    INNER JOIN: Relaciona todos os registros da tabela à direita e à esquerda onde exista o relacionamento entre registros.
*/

INSERT INTO tb_produtos(produto, valor) VALUES ('HD Externo Portátil Seagate Expansion 1TB USB 3.0', 274.90);

SELECT * FROM tb_pedidos LEFT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido);

SELECT * FROM tb_pedidos LEFT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) LEFT JOIN tb_produtos ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto)

SELECT * FROM tb_pedidos RIGHT JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) LEFT JOIN tb_produtos ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto)

SELECT * FROM tb_pedidos INNER JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido);


SELECT * FROM tb_pedidos INNER JOIN tb_pedidos_produtos ON (tb_pedidos.id_pedido = tb_pedidos_produtos.id_pedido) INNER JOIN tb_produtos ON (tb_pedidos_produtos.id_produto = tb_produtos.id_produto)


