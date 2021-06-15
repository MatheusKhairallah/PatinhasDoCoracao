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
nm_raca varchar(30) not null,
ds_porte varchar(80) not null,
email varchar(80) not null,
foreign key (email) references tb_login(email));
select * from tb_dog;

create table tb_login(
email varchar(80) primary key not null,
nm_perfil varchar(50) not null,
nr_idade int(2) not null,
nr_senha varchar(12) not null);
select * from tb_login;

/*insert into tb_raca (nm_raca)values
('Pastor-alemão'), ('Buldogue'), ('Poodle'), ('Labrador retriever'), ('Golden retriever'), ('Husky siberiano'), 
('Chihuahua'), ('Dachshund'), ('Buldogue francês'), ('Dogue alemão'), ('Rottweiler'), ('Boiadeiro de Berna'),
('Zwergspitz'), ('Galdo inglês'), ('Shih-tzu'), ('Dobermann'), ('Welsh corgi pembroke'), ('Border collie'),
('Maltês'), ('Boston terrier'), ('Malumute-do-alasca'), ('Cão de crista chinês'), ('Cavalier king charles spaniel'),
('Basset Hound'), ('Braco alemão de pelo curto'), ('Staffordshire bull terrier'), ('Terra-nova'), ('Bull terrier'),
('Chow-chow'), ('Bichon frisé'), ('Setter irlandês'), ('São-bernado'), ('Springer spaniel inglês'), 
('Russell Terrier'), ('American staffordshire terrier'), ('Bichon havanês'), ('Basenji'), ('Pastor-de-shetland'), 
('Dálmata'), ('Galdo afegão'), ('Pointer inglês'), ('Galguinho italiano'), ('Cane corso'), ('Shiba inu'), 
('American pit bull terrier'), ('Samoieda'), ('Mastim persa'), ('Cocker spaniel inglês'), ('Pinscher miniatura'),
('Labradoodle'), ('Shar-pei'), ('Outros'), ('Sem Raça Definida-(SRD)');*/
select * from tb_raca;

drop database banco_patinhas;