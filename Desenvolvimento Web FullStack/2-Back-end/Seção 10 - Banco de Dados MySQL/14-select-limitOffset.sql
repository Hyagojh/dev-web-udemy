#Limita a quantidade de registros de retorno da pesquisa. Offset determina um deslocamento, a partir de qual registro devemos retornar uma determinada quantidade de registros. A sintaxe pode ser 'LIMIT 2, 5', onde o primeiro parâmetro é considerado o offset. Ex: a partir do segundo registro, limite os resultados em 5.

SELECT * FROM `tb_alunos` LIMIT 25;

SELECT * FROM `tb_alunos` ORDER BY id_aluno DESC LIMIT 25;

SELECT * FROM `tb_alunos` LIMIT 4 OFFSET 0;

SELECT * FROM `tb_alunos` LIMIT 4 OFFSET 4;

SELECT * FROM `tb_alunos` LIMIT 4 OFFSET 8;