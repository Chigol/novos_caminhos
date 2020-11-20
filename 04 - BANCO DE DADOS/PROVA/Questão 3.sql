-- ENUNCIADO

Os vírus estão evoluindo, porém uma nova pesquisa tem provado que trocando algumas proteínas a vacina se torna imbatível. 
A proteína H1 (Hemaglutinina) quando é substituída pela proteína X (Xenomorphina) tem efeitos interessantes no combate de quase todas as doenças virais.
Alguns conspiracionistas dizem que após a descoberta dessa vacina algumas criaturas de 3 metros de altura foram vistas perto do laboratório, 
mas claro, isso é mentira.

Portanto você deve substituir todo caractere 'H1' ( Hemaglutinina ) por 'X' ( Xenomorphina ).

-- ESQUEMA DAS TABELAS A SEREM CRIADAS

TABELA VIRUS
Coluna	        Tipo
id (PK)	        integer	
name            varchar

-- VALORES A SEREM INSERIDOS DENTRO DA TABELA VIRUS

id    name                             
1	  H1RT	        
2	  H7H1	    
3	  HUN8	    
4	  XH1HX	            
5	  XXXX	    	 

-- EXEMPLO DE SAÍDA ESPERADO
name
XRT
H7X
HUN8
XXHX
XXXX



-- resp

create table virus(
id integer primary key,
name varchar(255)
);


insert into virus (id, name) values (1, 'H1RT');
insert into virus (id, name) values (2, 'H7H1');
insert into virus (id, name) values (3, 'HUN8');
insert into virus (id, name) values (4, 'XH1HX');
insert into virus (id, name) values (5, 'XXXX');


select replace(name, 'H1', 'X') name from virus;