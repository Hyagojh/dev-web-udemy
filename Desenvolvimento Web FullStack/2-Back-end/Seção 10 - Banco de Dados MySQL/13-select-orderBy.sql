#Ordena o resultado da pesquisa em ordem ascendente ou descendente baseado na coluna indicada

SELECT * FROM `tb_alunos` WHERE idade BETWEEN 18 AND 59 ORDER BY nome ASC;

SELECT * FROM `tb_alunos` WHERE idade BETWEEN 18 AND 59 ORDER BY nome DESC;

SELECT * FROM `tb_alunos` WHERE idade BETWEEN 18 AND 59 ORDER BY nome ASC, idade DESC, estado ASC;
