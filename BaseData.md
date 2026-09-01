CREATE DATABASE IF NOT EXISTS bioculture_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE bioculture_db;

CREATE TABLE IF NOT EXISTS ensayos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    microorganismo VARCHAR(100) NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    medio VARCHAR(100) NOT NULL,
    temperatura INT NOT NULL,
    horas INT NOT NULL,
    resultado VARCHAR(50) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
