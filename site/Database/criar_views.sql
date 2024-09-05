-- Criação da VIEW para total de clientes
CREATE VIEW vw_total_clientes AS
SELECT COUNT(*) AS total_clientes
FROM clientes;

-- Criação da VIEW para total de animais por tipo
CREATE VIEW vw_total_animais_por_tipo AS
SELECT tipo, COUNT(*) AS total_animais
FROM animais
GROUP BY tipo;

-- Criação da VIEW para total de serviços realizados por nome
CREATE VIEW vw_total_servicos_realizados AS
SELECT s.nome, COUNT(*) AS total_realizados
FROM agendamentos a
JOIN servicos s ON a.servico_id = s.servico_id
GROUP BY s.nome
ORDER BY total_realizados DESC;

-- Criação da VIEW para receita total
CREATE VIEW vw_receita_total AS
SELECT SUM(s.preco) AS receita_total
FROM agendamentos a
JOIN servicos s ON a.servico_id = s.servico_id;

-- Criação da VIEW para receita por serviço
CREATE VIEW vw_receita_por_servico AS
SELECT s.nome, SUM(s.preco) AS receita
FROM agendamentos a
JOIN servicos s ON a.servico_id = s.servico_id
GROUP BY s.nome
ORDER BY receita DESC;

-- Criação da VIEW para total de agendamentos por data
CREATE VIEW vw_total_agendamentos_por_data AS
SELECT data, COUNT(*) AS total_agendamentos
FROM agendamentos
GROUP BY data
ORDER BY data ASC;

-- Criação da VIEW para total de animais por cliente
CREATE VIEW vw_total_animais_por_cliente AS
SELECT c.nome, COUNT(a.animal_id) AS total_animais
FROM clientes c
JOIN animais a ON c.cliente_id = a.cliente_id
GROUP BY c.nome
ORDER BY total_animais DESC;
