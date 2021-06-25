create database banco_patinhas;
use banco_patinhas;

create table tb_dog(
cd_dog int auto_increment primary key,
nm_dog varchar(30) not null,
qt_idade int not null,
st_vermifugado varchar(15),
st_castrado varchar(15),
nm_vacinas varchar(30),
ds_temperamento varchar(30),
nm_raca varchar(80) not null,
ds_porte varchar(80) not null,
ds_img varchar(80) not null,
email varchar(80) not null,
foreign key (email) references tb_login(email));
select * from tb_dog;

create table tb_login(
email varchar(80) primary key not null,
nm_perfil varchar(50) not null,
nr_idade int(2) not null,
nr_senha varchar(12) not null,
ds_img varchar(80));
select * from tb_login;

drop database banco_patinhas;