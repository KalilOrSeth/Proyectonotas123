create database Notas23;
use Notas23;
create table usuarios(
id_usuario int auto_increment not null primary key,
Nombreusu varchar(60)not null,
Apellidousu varchar(60) not null,
Usuario varchar (40) not null unique,
Passwoord varchar (80) not null,
Perfil varchar(30) not null,
Estado varchar(20) not null
);
select * from usuarios;
create table materias(
Idmateria int (15) primary key auto_increment not null,
Materia varchar(30) not null
);
select * from materias;
create table estudiantes(
IdEstudiante  int(15) auto_increment not null primary key,
NombreEst varchar(60) not null,
ApellidoEst varchar(60) not null,
DocumentoEs varchar (12) not null,
Correo varchar(60) not null,
MateriaEs varchar(30) not  null,
Docente varchar(60)  not  null,
Promedio int(3) not null,
FRegistro date not null
);
select * from estudiantes;
create table docentes(
id_docente int(15) not null auto_increment primary key,
Nombredoc varchar (60) not  null,
Apellidodoc varchar(60) not null,
Documentodoc varchar(12) not null,
Correodoc varchar (40) not null,
Materiadoc varchar(30) not null,
Notas decimal (5,1) not null
);
select * from docentes;
create table notas_estudiantes(
id int auto_increment primary key,
id_estu int(15) not null,
id_mate int (15) not null,
id_doce int(15) not null,
Puntaje decimal (5,1) not null,
foreign key (id_estu) references estudiantes(IdEstudiante) on delete cascade on update cascade,
foreign key (id_mate) references materias(Idmateria) on delete cascade on update cascade,
foreign key(id_doce) references docentes(id_docente) on delete cascade on update cascade
);
select * from notas_estudiantes;

