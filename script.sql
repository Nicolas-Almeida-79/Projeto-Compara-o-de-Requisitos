create database EngSoft;
use EngSoft;

CREATE TABLE processador (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    modelo VARCHAR(255) NOT NULL,
    freqBase DECIMAL NOT NULL,
    freqTurbo DECIMAL NOT NULL,
    cores INT NOT NULL,
    thread INT NOT NULL,
    cache_ INT NOT NULL,
    gpu_integrada BOOLEAN NOT NULL
);

CREATE TABLE gpu (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    modelo VARCHAR(255),
    memoria INT NOT NULL,
    coreClock INT NOT NULL,
    memoryClock INT NOT NULL,
    directX INT NOT NULL,
    openGL DECIMAL NOT NULL
);

CREATE TABLE ram (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    modelo VARCHAR(255) NOT NULL,
    capacidade INT NOT NULL,
    freq INT NOT NULL,
    latencia INT NOT NULL
);