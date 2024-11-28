CREATE DATABASE dwes_02_libros;

USE dwes_02_libros;

CREATE TABLE libros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    anio_edicion YEAR NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    fecha_adquisicion DATE NOT NULL
);
