Create database if not exists Alunos;

use Alunos;

create table if not exists pessoas
(
	id_pessoa int not null auto_increment,
    nome_pessoa varchar(40),
    idade_pessoa int,
    endereco_pessoa varchar(50),
    primary key(id_pessoa)
    
) engine=innoDB;

select * from pessoas;
-- show tables;
-- drop database Alunos;