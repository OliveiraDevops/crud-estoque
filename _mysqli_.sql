CREATE TABLE estoque(
    id_estoque int AUTO_INCREMENT,
    nroproduto int not null,
    nomeproduto varchar (200) not null,
    categoria varchar (200) not null,
    quantidade int not null,
    fornecedor varchar (200) not null,
    PRIMARY KEY (id_cadcategoria))

CREATE TABLE cadcategoria(
    id_cadcategoria int AUTO_INCREMENT,
    cadcategoria varchar (200) not null,
    PRIMARY KEY (id_cadcategoria))