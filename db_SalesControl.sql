CREATE DATABASE salesControl;

USE salesControl;

CREATE TABLE cliente(
    idCliente int NOT NULL,
    CPF varchar(11) NOT NULL,
    nome varchar(100) NOT NULL,
    endereco varchar(100) NOT NULL,
    cidade varchar(60) NOT NULL,
    CEP varchar(8) NOT NULL,
    UF char(2) NOT NULL,
    tel_ddd varchar(3) NOT NULL,
    tel varchar(9) NOT NULL,
    limiteCredito float(10, 2) NOT NULL,
    limiteDisponivel float(10, 2) NOT NULL,
    PRIMARY KEY (idCliente)
);

CREATE TABLE vendedor(
    idVendedor int NOT NULL,
    CPF varchar(11) NOT NULL,
    nome varchar(100) NOT NULL,
    endereco varchar(100) NOT NULL,
    cidade varchar(60) NOT NULL,
    CEP varchar(8) NOT NULL,
    UF char(2) NOT NULL,
    tel_ddd varchar(3) NOT NULL,
    tel varchar(9) NOT NULL,
    salarioBase float(10, 2) NOT NULL,
    taxaComissao float(10, 2) NOT NULL,
    PRIMARY KEY (idVendedor)
);

CREATE TABLE produto(
    idProduto int NOT NULL,
    descricao text NOT NULL,
    qtDisponivel int NOT NULL,
    precoUnit float(10, 2) NOT NULL,
    estoqueMinimo int NOT NULL,
    PRIMARY KEY (idProduto)
);

CREATE TABLE pedido(
    idPedido int NOT NULL,
    statusPedido varchar(15) NOT NULL,
    dtPedido date NOT NULL,
    dtPagto date NOT NULL,
    CONSTRAINT idCliente FOREIGN KEY (idCliente) REFERENCES cliente(idCliente),
    CONSTRAINT idVendedor FOREIGN KEY (idVendedor) REFERENCES vendedor(idVendedor),
    PRIMARY KEY (idPedido, idCliente, idVendedor)
);

CREATE TABLE itemPedido(
    qtVendida int NOT NULL,
    CONSTRAINT idPedido FOREIGN KEY (idPedido) REFERENCES pedido(idPedido),
    CONSTRAINT idProduto FOREIGN KEY (idProduto) REFERENCES produto(idProduto),
    PRIMARY KEY (idPedido, idProduto)
);