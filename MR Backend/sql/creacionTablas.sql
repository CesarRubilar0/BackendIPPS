-- Creación de la base de datos
CREATE DATABASE IF NOT EXISTS consultoria_db;
USE consultoria_db;

-- Creación de la tabla de servicios
CREATE TABLE IF NOT EXISTS servicios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    valor_clp DECIMAL(10, 2) NOT NULL,
    valor_usd DECIMAL(10, 2) NOT NULL
);
