SELECT COUNT(*) AS total_clientes FROM clientes;

SELECT tipo, COUNT(*) AS total_animais
FROM animais
GROUP BY tipo;

SELECT s.nome, COUNT(*) AS total_realizados
FROM agendamentos a
JOIN servicos s ON a.servico_id = s.servico_id
GROUP BY s.nome
ORDER BY total_realizados DESC;

SELECT SUM(s.preco) AS receita_total
FROM agendamentos a
JOIN servicos s ON a.servico_id = s.servico_id;

SELECT s.nome, SUM(s.preco) AS receita
FROM agendamentos a
JOIN servicos s ON a.servico_id = s.servico_id
GROUP BY s.nome
ORDER BY receita DESC;

SELECT data, COUNT(*) AS total_agendamentos
FROM agendamentos
GROUP BY data
ORDER BY data ASC;

SELECT c.nome, COUNT(a.animal_id) AS total_animais
FROM clientes c
JOIN animais a ON c.cliente_id = a.cliente_id
GROUP BY c.nome
ORDER BY total_animais DESC;
