create database ranking;

use ranking;

create table top10(

   id int primary key auto_increment,
   usuario VARCHAR (40),
   puntuacion int,
   posicion tinyint

);


