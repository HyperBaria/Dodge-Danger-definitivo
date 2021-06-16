create database ranking;

use ranking;

create table top10(

   id int primary key auto_increment,
   usuario VARCHAR (40),
   puntuacion int,
   posicion tinyint

);




insert into top10 (usuario, puntuacion, posicion) values ('Ayen', 50, 1);

insert into top10 (usuario, puntuacion, posicion) values ('Joelix', 20, 2);

insert into top10 (usuario, puntuacion, posicion) values ('Sebas', 10, 3);


insert into top10 (usuario, puntuacion, posicion) values ('Letal', 8, 4);

insert into top10 (usuario, puntuacion, posicion) values ('Pilates', 6, 5);

insert into top10 (usuario, puntuacion, posicion) values ('Cris', 5, 6);

insert into top10 (usuario, puntuacion, posicion) values ('Juan', 4, 7);

insert into top10 (usuario, puntuacion, posicion) values ('druida', 3, 8);

insert into top10 (usuario, puntuacion, posicion) values ('elia', 2, 9);

insert into top10 (usuario, puntuacion, posicion) values ('kristian', 1, 10);

delete from top10;

update top10 set posicion= posicion-1;
select * from top10;