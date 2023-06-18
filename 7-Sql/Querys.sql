1)
    A) SELECT nome
        FROM organizacao
        ORDER BY data_fundacao DESC
        LIMIT 1;

    B) SELECT nome
       FROM colaborador
       ORDER BY salario DESC
       LIMIT 1;

    C) SELECT nome, data_nascimento
       FROM colaborador
       ORDER BY salario DESC;

    D) SELECT nome, YEAR(CURDATE()) - YEAR(data_nascimento) AS idade
       FROM colaborador;

    E) SELECT c.nome AS colaborador, o.nome AS empresa
       FROM colaborador c
       JOIN organizacao o ON c.organizacao_id = o.id;

2) SELECT o.nome AS organizacao
   FROM organizacao o
            JOIN colaborador c ON o.id = c.organizacao_id
   GROUP BY o.nome
   HAVING MAX(c.salario) = (
       SELECT MAX(salario)
       FROM colaborador
   )

3) SELECT o.nome AS organizacao, AVG(c.salario) AS media_salario
   FROM organizacao o
            JOIN colaborador c ON o.id = c.organizacao_id
   GROUP BY o.nome;

4) SELECT o.nome AS organizacao
   FROM organizacao o
            JOIN colaborador c ON o.id = c.organizacao_id
   GROUP BY o.nome
   HAVING MIN(c.data_nascimento) = (
       SELECT MIN(data_nascimento)
       FROM colaborador
   )
