-- ENUNCIADO 
O setor financeiro da nossa empresa, está querendo saber os menores e maiores valores dos produtos, que vendemos.

Para isso exiba somente o maior e o menor preço da tabela produtos.

-- ESQUEMA DAS TABELAS A SEREM CRIADAS

TABELA PRODUCTS
Coluna	    Tipo
id (PK)	    numeric	
name    	varchar
amount  	numeric
price   	numeric 

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA 

id	    name                    amount      price
1       Two-doors wardrobe      100         800
2       Dining table            1000    	560
3   	Towel holder        	10000   	25.50
4   	Computer desk       	350	        320.50
5   	Chair               	3000    	210.64
6   	Single bed          	750     	460 

-- EXEMPLO DE SAÍDA ESPERADO
price	    price
800         25.50

-- resp

create table products(
id numeric primary key,
name varchar(255),
amount numeric,
price decimal(6, 2)
);

insert into products (id, name, amount, price) values (1, 'Two-door wardrobe', 100, 800);
insert into products (id, name, amount, price) values (2, 'Dining table', 1000, 560);
insert into products (id, name, amount, price) values (3, 'Towel holder', 10000, 25.50);
insert into products (id, name, amount, price) values (4, 'Computer desk', 350, 320.50);
insert into products (id, name, amount, price) values (5, 'Chair', 3000, 210.64);
insert into products (id, name, amount, price) values (6, 'Single bed', 750, 460);

select max(price) price, min(price) price from products;