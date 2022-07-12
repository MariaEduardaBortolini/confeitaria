CREATE DATABASE confeitaria;
use confeitaria;

create table item (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(200) NOT NULL,
   	descr varchar(200) NOT NULL,
    prec varchar(200) NOT NULL,
    cate varchar(200) NOT NULL,
    primary key(id)
    
);