CREATE DATABASE salesControl;

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
    limiteCredito money NOT NULL,
    limiteDisponivel money NOT NULL,
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
    salarioBase smallmoney NOT NULL,
    taxaComissao smallmoney NOT NULL,
    PRIMARY KEY (idVendedor)
);

CREATE TABLE produto(
    idProduto int NOT NULL,
    descricao text NOT NULL,
    qtDisponivel int NOT NULL,
    precoUnit money NOT NULL,
    estoqueMinimo int NOT NULL,
    PRIMARY KEY (idProduto)
);

CREATE TABLE pedido(
    idPedido int NOT NULL,
    idCliente int NOT NULL,
    idVendedor int NOT NULL,
    statusPedido varchar(15) NOT NULL,
    dtPedido date NOT NULL,
    dtPagto date NOT NULL,
    FOREIGN KEY (idCliente) REFERENCES idCliente(cliente),
    FOREIGN KEY (idVendedor) REFERENCES idVendedor(vendedor),
    PRIMARY KEY (idPedido, idCliente, idVendedor)
);

CREATE TABLE itemPedido(
    idPedido int NOT NULL,
    idProduto int NOT NULL,
    qtVendida int NOT NULL,
    FOREIGN KEY (idPedido) REFERENCES idPedido(pedido),
    FOREIGN KEY (idProduto) REFERENCES idProduto(produto),
    PRIMARY KEY (idPedido, idProduto)
);