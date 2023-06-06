#O comando retorna através de uma sintaxe sugar, uma lista de posssibilidades. Aqui tem o exemplo de como seria sem o comando e com ele.

SELECT * FROM `tb_alunos` WHERE interesse = 'Jogos' OR interesse = 'Esporte' OR interesse = 'Música';



SELECT * FROM `tb_alunos` WHERE interesse IN('Jogos', 'Esporte', 'Música');


SELECT * FROM `tb_alunos` WHERE interesse NOT IN('Jogos', 'Esporte', 'Música');