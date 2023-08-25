DROP DATABASE IF EXISTS preteg2023;
CREATE DATABASE preteg2023;
USE preteg2023;

CREATE TABLE tipos(
    Id int(5) not null auto_increment,
    Nombre varchar(100),
    PRIMARY KEY (Id)
);
CREATE TABLE residuos(
    Id int(4) not null auto_increment,
    Nombre varchar(80) not null,
    Descripcion text,
    Tipo  int(3),
    PRIMARY KEY (Id),
    FOREIGN KEY (Tipo) REFERENCES tipos (Id)
);


CREATE TABLE Clientes(
    Id int(4) not null auto_increment,
    Nombre varchar(60),
    Apellidos varchar(100),
    Telefono varchar(15),
    Email varchar(100),
    TipoCliente varchar(50),
    foto varchar (10),
    PRIMARY KEY (Id)
);

CREATE TABLE Usuarios(
    Id int(5) not null auto_increment,
    Nombre varchar(50),
    Pass varchar(100),
    Tipo_Usuario varchar(15),
    Clientes int(4),
    PRIMARY KEY (Id),
    FOREIGN KEY (Clientes) REFERENCES Clientes (Id)
);

CREATE TABLE tieneResiduos(
    Id int(10) not null auto_increment,
    cantidad varchar(8),
    FechaRegistro date,
    residuo int(3),
    Cliente int(3),
    PRIMARY KEY (Id),
    FOREIGN KEY (residuo) REFERENCES residuos (Id),
    FOREIGN KEY (Cliente) REFERENCES Clientes (Id)
);
CREATE TABLE productos(
    Id int(10) not null auto_increment,
    Nombre varchar(100),
    Descripcion text,
    precio varchar(50),
    Foto blob,
    PRIMARY KEY (Id)
);
CREATE TABLE Compra(
    Id int(10) not null auto_increment,
    cantidad varchar(8),
    FechaRegistro date,
    precio varchar(20),
    producto int(3),
    Cliente int(3),
    PRIMARY KEY (Id),
    FOREIGN KEY (producto) REFERENCES productos (Id),
    FOREIGN KEY (Cliente) REFERENCES Clientes (Id)
);






