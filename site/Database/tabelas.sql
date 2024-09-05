-- Criação das tabelas
CREATE TABLE clientes (
    cliente_id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    telefone VARCHAR(15),
    email VARCHAR(100)
);

CREATE TABLE animais (
    animal_id INT PRIMARY KEY AUTO_INCREMENT,
    cliente_id INT,
    nome VARCHAR(100),
    tipo VARCHAR(50),
    raca VARCHAR(50),
    idade INT,
    FOREIGN KEY (cliente_id) REFERENCES clientes(cliente_id)
);

CREATE TABLE servicos (
    servico_id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    preco DECIMAL(10, 2)
);

CREATE TABLE agendamentos (
    agendamento_id INT PRIMARY KEY AUTO_INCREMENT,
    cliente_id INT,
    animal_id INT,
    servico_id INT,
    data DATE,
    FOREIGN KEY (cliente_id) REFERENCES clientes(cliente_id),
    FOREIGN KEY (animal_id) REFERENCES animais(animal_id),
    FOREIGN KEY (servico_id) REFERENCES servicos(servico_id)
);
