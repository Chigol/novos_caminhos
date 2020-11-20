-- ENUNCIADO

O setor de vendas quer fazer uma promoção para todos os clientes que são pessoas jurídicas. 
Para isso você deve exibir o nome dos clientes que sejam pessoa jurídica.

-- ESQUEMA DAS TABELAS A SEREM CRIADAS

TABELA CUSTOMERS
Coluna	        Tipo
id (PK) 	    numeric
name    	    varchar(255)
street          varchar(255)
city    	    varchar(255)
state   	    varchar(2)
credit_limit    numeric   

TABELA LEGAL_PERSON

Coluna	            Tipo
id_customers (FK)	numeric
cnpj                varchar(18)
contact             varchar(25) 

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA CUSTOMERS

id    name                      street          city	        state   credit_limit
1	  Nicolas Diogo Cardoso	    Acesso Um	    Porto Alegre	RS	    475
2	  Cecília Olivia Rodrigues	Rua Sizuka  	Cianorte	    PR	    3170
3	  Augusto F. C. E. Cardoso	Rua Baldomiro 	Palhoça	        SC	    1067
4	  Nicolas Diogo Cardoso	    Acesso Um	    Porto Alegre	RS	    475
5     Sabrina H. G. Barros      Rua Engenheiro  Porto Alegre	RS	    4312
6	  Joaquim D. L. Araújo      Rua Vitorino	Novo Hamburgo	RS	    231 

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA LEGAL_PERSON
id_customers	cnpj        	contact
4	            85883842000191	99767-0562	
5	            47773848000117	99100-8965 

-- EXEMPLO DE SAÍDA ESPERADO
name	
Nicolas Diogo Cardoso	
Sabrina Heloisa Gabriela Barros

-- resp 

create table customers(
id numeric primary key,
name varchar(255),
street varchar(255),
city varchar(255),
state varchar(2),
credit_limit numeric
);

create table legal_person(
id_customers numeric references customers(id),
cnpj varchar(18),
contact varchar(25)
);

insert into customers (id, name, street, city, state, credit_limit) values (1, 'Nicolas Diogo Cardoso', 'Acesso Um', 'Porto Alegre', 'RS', 475);
insert into customers (id, name, street, city, state, credit_limit) values (2, 'Cecília Olivia Rodrigues', 'Rua Sizuka', 'Cianorte', 'PR', 3170);
insert into customers (id, name, street, city, state, credit_limit) values (3, 'Augusto F. C. E. Cardoso', 'Rua Baldomiro', 'Palhoça', 'SC', 1067);
insert into customers (id, name, street, city, state, credit_limit) values (4, 'Nicolas Diogo Cardoso', 'Acesso Um', 'Porto Alegre', 'RS', 475);
insert into customers (id, name, street, city, state, credit_limit) values (5, 'Sabrina H. G. Barros', 'Rua Engenheiro', 'Porto Alegre', 'RS', 4312);
insert into customers (id, name, street, city, state, credit_limit) values (6, 'Joaquim D. L. Araújo', 'Rua Vitorino', 'Novo Hamburgo', 'RS', 231);

insert into legal_person (id_customers, cnpj, contact) values (4, 85883842000191, 99767-0562);
insert into legal_person (id_customers, cnpj, contact) values (5, 47773848000117, 99100-8965);

select cs.name from customers cs, legal_person Ip where cs.id = Ip.id_customers;