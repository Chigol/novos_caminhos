
-- ENUNCIADO
Todos os meses a empresa pede um relatório das cidades que os fornecedores estão cadastrados. 
Dessa vez não vai ser diferente, faça uma consulta no Banco de Dados que retorne todas as cidades dos fornecedores, 
mas em ordem alfabética.

OBS: Você não deve mostrar cidades repetidas.

-- ESQUEMA DAS TABELAS A SEREM CRIADAS

TABELA PROVIDERS
Coluna	        Tipo
id (PK)	        numeric	
name            varchar
street      	varchar
city        	varchar
state       	char

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA PROVIDERS

id	name                street	        city	        state	
1	Henrique	        Av Brasil	    Rio de Janeiro	RJ	
2	Marcelo Augusto	    Rua Imigrantes	Belo Horizonte	MG
3	Caroline Silva	    Av São Paulo	Salvador	    BA	
4	Guilerme Staff      Rua Central	    Porto Alegre	RS	
5	Isabela Moraes	    Av Juiz Grande	Curitiba	    PR	
6	Francisco Accerr	Av Paulista	    São Paulo	    SP 	    	 

-- EXEMPLO DE SAÍDA ESPERADO
city	
Belo Horizonte	
Curitiba	
Porto Alegre	
Rio de Janeiro	
Salvador	
São Paulo

-- resp

create table providers(
id int primary key,
name varchar(255),
street varchar(255),
city varchar(255),
state char
);

insert into providers (id, name, street, city, state) values (1, 'Henrique', 'Av Brasil', 'Rio de Janeiro', 'RJ');
insert into providers (id, name, street, city, state) values (2, 'Marcelo Augusto', 'Rua Imigrantes', 'Belo Horizonte', 'MG');
insert into providers (id, name, street, city, state) values (3, 'Caroline Silva', 'Av São Paulo', 'Salvador', 'BA');
insert into providers (id, name, street, city, state) values (4, 'Guilherme Staff', 'Rua Central', 'Porto Alegre', 'RS');
insert into providers (id, name, street, city, state) values (5, 'Isabela Moraes', 'Av Juiz Grande', 'Curitiba', 'PR');
insert into providers (id, name, street, city, state) values (6, 'Francisco Accerr', 'Av Paulista ', 'São Paulo', 'SP');



select distinct city from providers order by city asc;