CREATE DATABASE db_salesControl;

-- USE db_salesControl;

CREATE TABLE tbl_client(
    cli_idClient int NOT NULL AUTO_INCREMENT,
    cli_cpf varchar(11) NOT NULL,
    cli_name varchar(100) NOT NULL,
    cli_address varchar(100) NOT NULL,
    cli_city varchar(60) NOT NULL,
    cli_cep varchar(8) NOT NULL,
    cli_uf char(2) NOT NULL,
    cli_ddd varchar(3) NOT NULL,
    cli_tel varchar(9) NOT NULL,
    cli_creditLimit float(10, 2) NOT NULL,
    cli_availableLimit float(10, 2) NOT NULL,
    PRIMARY KEY (cli_idClient)
);

CREATE TABLE tbl_salesman(
    sal_idSalesman int NOT NULL AUTO_INCREMENT,
    sal_cpf varchar(11) NOT NULL,
    sal_name varchar(100) NOT NULL,
    sal_address varchar(100) NOT NULL,
    sal_city varchar(60) NOT NULL,
    sal_cep varchar(8) NOT NULL,
    sal_uf char(2) NOT NULL,
    sal_ddd varchar(3) NOT NULL,
    sal_tel varchar(9) NOT NULL,
    sal_salary float(10, 2) NOT NULL,
    sal_commission float(10, 2) NOT NULL,
    PRIMARY KEY (sal_idSalesman)
);

CREATE TABLE tbl_product(
    prod_idProduct int NOT NULL AUTO_INCREMENT,
    prod_description text NOT NULL,
    prod_availableAmount int NOT NULL,
    prod_unitPrice float(10, 2) NOT NULL,
    prod_minimalStock int NOT NULL,
    PRIMARY KEY (prod_idProduct)
);

CREATE TABLE tbl_order(
    ord_idOrder int NOT NULL AUTO_INCREMENT,
    ord_idClient int NOT NULL,
    ord_idSalesman int NOT NULL,
    ord_orderStatus varchar(15) NOT NULL,
    ord_orderDate date NOT NULL,
    ord_orderPay date NOT NULL,
	FOREIGN KEY (ord_idClient) REFERENCES tbl_client(cli_idClient),
	FOREIGN KEY (ord_idSalesman) REFERENCES tbl_salesman(sal_idSalesman),
    PRIMARY KEY (ord_idOrder, ord_idClient, ord_idSalesman)
);

CREATE TABLE tbl_itemOrder(
    item_idOrder int NOT NULL,
    item_idProduct int NOT NULL,
    item_soldAmount int NOT NULL,
    FOREIGN KEY (item_idOrder) REFERENCES tbl_order(ord_idOrder),
    FOREIGN KEY (item_idProduct) REFERENCES tbl_product(prod_idProduct),
    PRIMARY KEY (item_idOrder, item_idProduct)
);
