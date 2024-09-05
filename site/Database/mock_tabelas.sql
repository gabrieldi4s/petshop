INSERT INTO clientes (nome, telefone, email) VALUES
('João Silva', '11987654321', 'joao.silva@example.com'),
('Maria Oliveira', '11912345678', 'maria.oliveira@example.com'),
('Carlos Pereira', '11923456789', 'carlos.pereira@example.com'),
('Ana Souza', '11934567890', 'ana.souza@example.com'),
('Fernanda Lima', '11945678901', 'fernanda.lima@example.com');


INSERT INTO animais (cliente_id, nome, tipo, raca, idade) VALUES
(1, 'Rex', 'Cachorro', 'Labrador', 5),
(1, 'Bolinha', 'Gato', 'Siamês', 3),
(2, 'Princesa', 'Cachorro', 'Poodle', 4),
(3, 'Frajola', 'Gato', 'Persa', 2),
(4, 'Bobby', 'Cachorro', 'Bulldog', 6),
(5, 'Lulu', 'Gato', 'Maine Coon', 4),
(5, 'Pipoca', 'Cachorro', 'Beagle', 2);


INSERT INTO servicos (nome, preco) VALUES
('Banho', 50.00),
('Tosa', 70.00),
('Vacinação', 120.00),
('Consulta Veterinária', 150.00),
('Higiene Bucal', 80.00);

INSERT INTO agendamentos (cliente_id, animal_id, servico_id, data) VALUES
(1, 1, 1, '2024-08-01'),  -- João Silva leva Rex para Banho
(1, 2, 2, '2024-08-02'),  -- João Silva leva Bolinha para Tosa
(2, 3, 3, '2024-08-03'),  -- Maria Oliveira leva Princesa para Vacinação
(3, 4, 4, '2024-08-04'),  -- Carlos Pereira leva Frajola para Consulta Veterinária
(4, 5, 1, '2024-08-05'),  -- Ana Souza leva Bobby para Banho
(5, 6, 5, '2024-08-06'),  -- Fernanda Lima leva Lulu para Higiene Bucal
(5, 7, 1, '2024-08-07'),  -- Fernanda Lima leva Pipoca para Banho
(1, 1, 2, '2024-08-08'),  -- João Silva leva Rex para Tosa
(2, 3, 1, '2024-08-09'),  -- Maria Oliveira leva Princesa para Banho
(4, 5, 3, '2024-08-10');  -- Ana Souza leva Bobby para Vacinação
