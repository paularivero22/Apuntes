CREATE DATABASE dwes_05_hospital;

USE dwes_05_hospital;

CREATE TABLE turnos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50)
);

CREATE TABLE medicos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    edad INT,
    turno_id INT,
    tipo ENUM('familia', 'urgencia'),
    FOREIGN KEY (turno_id) REFERENCES turnos(id)
);

CREATE TABLE familia (
    medico_id INT PRIMARY KEY,
    numPacientes INT,
    FOREIGN KEY (medico_id) REFERENCES medicos(codigo)
);

CREATE TABLE urgencias (
    medico_id INT PRIMARY KEY,
    unidad VARCHAR(50),
    FOREIGN KEY (medico_id) REFERENCES medicos(codigo)
);
