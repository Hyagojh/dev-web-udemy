#Atualizar os registros em uma tabela. Seleciona a tabela tb_alunos e seta na coluna nome, um novo valor onde o id_aluno for igual a treze

UPDATE tb_alunos SET nome = 'João' WHERE id_aluno = 13;

UPDATE tb_alunos SET interesse = 'Saúde' WHERE idade >=80;


UPDATE tb_alunos SET nome = 'João' WHERE id_aluno = 18;


UPDATE tb_alunos SET nome = 'José', idade = 25, email = 'jose@gmail.com' WHERE id_aluno = 18;


SELECT * FROM `tb_alunos` WHERE idade BETWEEN 18 AND 25 AND estado = 'PA';


#Removendo registros dentro de tabelas

DELETE FROM tb_alunos WHERE id_aluno = 5;

SELECT * FROM `tb_alunos` WHERE idade IN(10,18,22,28,34) AND interesse = 'Esporte';

DELETE FROM `tb_alunos` WHERE idade IN(10,18,22,28,34) AND interesse = 'Esporte';






