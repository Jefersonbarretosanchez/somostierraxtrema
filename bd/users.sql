CREATE DATABASE IF NOT EXISTS usuarios CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

use usuarios;

CREATE TABLE IF NOT EXISTS usuarios (
  id INT(11) NOT NULL PRIMARY KEY,
  nombres VARCHAR(30) NOT NULL,
  apellidos INT(3) NOT NULL,
  email varchar(30) not null,
  contraseña varchar(30) not null,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);