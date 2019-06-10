DROP DATABASE IF EXISTS blogNotas;
CREATE DATABASE blogNotas;
USE blogNotas;

CREATE TABLE Usuario
(
	usuarioID INT NOT NULL AUTO_INCREMENT,
    nombre NVARCHAR(30) NOT NULL,
    aPaterno NVARCHAR(30) NOT NULL,
    aMaterno NVARCHAR(30) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    contrasena CHAR(60) NOT NULL,
    direccion NVARCHAR(50) NOT NULL,
    PRIMARY KEY(usuarioID)
);

CREATE TABLE Nota
(
	notaID INT NOT NULL AUTO_INCREMENT,
    usuarioID INT NOT NULL,
    titulo NVARCHAR(50) NOT NULL,
    descripcion MEDIUMTEXT NOT NULL,
    PRIMARY KEY(notaID),
    FOREIGN KEY(usuarioID) REFERENCES Usuario(usuarioID) ON DELETE CASCADE
);
    
CREATE VIEW vwNotas AS
SELECT u.nombre AS Usuario, n.titulo AS Titulo, n.descripcion AS Contenido FROM Nota n, Usuario u WHERE u.usuarioID = n.usuarioID;