create database Matricula;
use Matricula;


create table Estudiante
(
IdEstudiante INT PRIMARY KEY NOT NULL auto_increment,
Nombres char(100),
Apellidos char(50),
CodigoEstudiante varchar(10),
FechaNacimiento  date,
Edad int,
InstitucionProviene varchar(100),
PoseeFacebook varchar(2),
NombreCuentaFB varchar(200),
NombreRecomienda char(200),
Sexo varchar(20),
telefono varchar(10),
Email varchar(100),
carnet varchar(20),
ViveCon char(100),
ViveOtros char(200),
NAcademico varchar(100)
);
create table Padres (
IdPadre  int primary key not null auto_increment,
NombrePadre char(200),
CorreoPadre varchar(300),
TelefonoPadre varchar(10),
DuiPadre varchar(10),
TrabajoPadre varchar(100),
NombreMadre char(200),
CorreoMadre varchar(300),
TelefonoMadre varchar(10),
DuiMadre varchar(10),
TrabajoMadre varchar(100),
RazonEstudio char(200),
NombreResponsable char(200),
TelefonoResponsable varchar(10),
DireccionR varchar(200),
NivelAcademico int

);

create table Estudiantes_Padres(
IdEstudiantes_Padres int primary key not null auto_increment,
IDestudiante int,
IDPadres int
);

create table Grados(
IdGrado INT PRIMARY KEY NOT NULL auto_increment,
grado varchar(50)
);

create table Maestros ( 
IdMaestro INT PRIMARY KEY NOT NULL auto_increment,
NombreM char(100),
ApellidoM char(100),
codigo varchar(20),
EdadM int,
TelefonoM varchar(10),
CorreoM varchar(50),
GradoID varchar(100),
TipoM varchar(100),
NivelAcademicoID varchar(100)
);
 create table TipoMaestro (
 IdTipo INT PRIMARY KEY NOT NULL auto_increment,
 TipoMaestro varchar(100)
 );

create table usuarios (
IdUsuario INT PRIMARY KEY NOT NULL auto_increment,
Nombre char(100),
Apellido char(100),
Usuario varchar(50),
pass varchar(50),
TipoRol varchar(100)
);

create table roles (
IdRol INT PRIMARY KEY NOT NULL auto_increment,
Rol varchar(50)
);


ALTER TABLE Estudiantes_Padres
ADD CONSTRAINT FK_IDEstudiante
FOREIGN KEY (IDEstudiante) REFERENCES padres(IdEstudiante);

ALTER TABLE Estudiantes_Padres
ADD CONSTRAINT FK_IDPadres
FOREIGN KEY (IDPadres) REFERENCES Grados(IdPadre);

ALTER TABLE Maestros
ADD CONSTRAINT FK_NivelAcademicoID
FOREIGN KEY (NivelAcademicoID) REFERENCES Grados(IdGrado);

ALTER TABLE Maestros
ADD CONSTRAINT FK_TipoM
FOREIGN KEY (TipoM) REFERENCES Grados(idTipo);

ALTER TABLE Estudiante
ADD CONSTRAINT FK_Academico
FOREIGN KEY (NAcademico) REFERENCES Grados(IdGrado);

ALTER TABLE usuarios
ADD CONSTRAINT FK_Rol
FOREIGN KEY (tipoRol) REFERENCES Grados(IdRol);