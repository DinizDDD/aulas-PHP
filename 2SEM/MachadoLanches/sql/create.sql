DROP DATABASE MachadoLanches;
CREATE DATABASE MachadoLanches;
USE MachadoLanches;

CREATE TABLE funcionarios (
    id_funcionario INT PRIMARY KEY AUTO_INCREMENT,
    nome_funcionario VARCHAR(255) NOT NULL,
    cargo VARCHAR(255) NOT NULL,
    data_admisssao DATE NOT NULL,
    ativo BOOLEAN NOT NULL DEFAULT TRUE,
);

CREATE TABLE produto (
    id_produto INT PRIMARY KEY AUTO_INCREMENT,
    preco DECIMAL(4,2) NOT NULL,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NOT NULL
)

CREATE TABLE clientes (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nome_cliente VARCHAR(255) NOT NULL,
    telefone VARCHAR(255) NOT NULL,
    endereco VARCHAR(255) NOT NULL,
    sexo ENUM('M', 'F') NOT NULL DEFAULT ('F'),
    data_cadastro DATE NOT NULL
);

CREATE TABLE mesas (
    id_mesa INT PRIMARY KEY AUTO_INCREMENT,
    quantidade_pessoas INT NOT NULL,
    horario_entrada DATETIME NOT NULL,
    horario_saida DATETIME NOT NULL,
    vazia BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE DATABASE pedidos (
    id_pedido INT PRIMARY KEY AUTO_INCREMENT,
    id_mesa INT NOT NULL,
    id_produto INT NOT NULL,
    FOREIGN KEY (id_mesa) REFERENCES mesas(id_mesa)
);

