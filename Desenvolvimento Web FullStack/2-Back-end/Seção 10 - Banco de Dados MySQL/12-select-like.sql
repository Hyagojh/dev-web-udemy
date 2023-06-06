#Permite realizar uma pesquisa com base em um conjunto de caracteres dentro de uma coluna textual. % significa que a palavra necessita terminar, começar ou estar entre outras com a letra designada, ou seja através da posição dessa letra. Ex: selecione tudo da tabela tb_alunos onde o nome termine com E. O underscore indica que antes de RIEL é necessário ter apenas um caractere, ou seja designa exatamente a quantidade de caracteres necessárias à pesquisa.

SELECT * FROM `tb_alunos` WHERE nome = 'Evelyn';

SELECT * FROM `tb_alunos` WHERE nome LIKE '%e';
SELECT * FROM `tb_alunos` WHERE nome LIKE '%ne';
SELECT * FROM `tb_alunos` WHERE nome LIKE '%a%';
SELECT * FROM `tb_alunos` WHERE nome LIKE 'C%';

SELECT * FROM `tb_alunos` WHERE nome LIKE '_riel';
SELECT * FROM `tb_alunos` WHERE nome LIKE '_ru_';

SELECT * FROM `tb_alunos` WHERE nome LIKE 'I__';