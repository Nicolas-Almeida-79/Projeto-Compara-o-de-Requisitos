create database if not exists EngSoft;
use EngSoft;

CREATE TABLE IF NOT EXISTS cpu (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    modelo VARCHAR(255) NOT NULL,
    freqBase DECIMAL NOT NULL,
    freqTurbo DECIMAL NOT NULL,
    cores INT NOT NULL,
    thread INT NOT NULL,
    cache_ INT NOT NULL,
    gpu_integrada BOOLEAN NOT NULL
);

CREATE TABLE IF NOT EXISTS gpu (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    modelo VARCHAR(255),
    memoria INT NOT NULL,
    coreClock INT NOT NULL,
    memoryClock INT NOT NULL,
    directX INT NOT NULL,
    openGL DECIMAL NOT NULL
);

CREATE TABLE IF NOT EXISTS ram (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    modelo VARCHAR(255) NOT NULL,
    capacidade INT NOT NULL,
    freq INT NOT NULL,
    latencia INT NOT NULL
);

CREATE TABLE IF NOT EXISTS jogo (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    cpu VARCHAR(255) NOT NULL,
    gpu VARCHAR(255) NOT NULL,
    ram VARCHAR(255) NOT NULL,
    FOREIGN KEY (cpu) REFERENCES cpu (modelo),
    FOREIGN KEY (gpu) REFERENCES gpu (modelo),
    FOREIGN KEY (ram) REFERENCES ram (modelo)
);
