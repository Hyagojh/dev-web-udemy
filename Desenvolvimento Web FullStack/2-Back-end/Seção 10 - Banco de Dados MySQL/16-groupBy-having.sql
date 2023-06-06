#Agrupa os registros com base em uma ou mais colunas cujos valores sejam iguais. Permite realizar funções de agregação em cada subconjunto agrupado de regristros.

SELECT * FROM `tb_alunos` GROUP BY interesse;

SELECT *, count(*) FROM `tb_alunos` GROUP BY interesse;

SELECT interesse, count(*) FROM `tb_alunos` GROUP BY interesse;


SELECT interesse, count(*) AS total_por_interesse FROM `tb_alunos` GROUP BY interesse;

SELECT * FROM `tb_alunos` GROUP BY estado;

SELECT estado, COUNT(*) AS total_por_estado FROM `tb_alunos` WHERE estado = 'ES'; 

#Aplica filtro sobre o resultado de colunas agrupadas. Exemplo: Selecione o estados e a contagem de total de registros agrupados por estado, onde tiver o total de registros maior ou igual a cinco. Podendo ser aplicado diretamente sobre o estado, por exemplo, em cima dos resultados agrupados de  estado, selecionar aqueles que o estado seja MG ou SP, usando outro operador já estudado.

SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` GROUP BY estado;

SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` GROUP BY estado HAVING total_de_registros >= 5;

SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` GROUP BY estado HAVING estado IN ('MG', 'SP');

SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` GROUP BY estado HAVING estado IN ('CE', 'SC') AND total_de_registros > 4;

SELECT estado, COUNT(*) as total_de_registros FROM `tb_alunos` WHERE interesse != 'Esporte' GROUP BY estado HAVING total_de_registros > 3;


