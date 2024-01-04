CREATE DATABASE IF NOT EXISTS mahasiswa_db;

USE mahasiswa_db;

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    alamat TEXT NOT NULL,
    minat VARCHAR(50) NOT NULL,
    foto_path VARCHAR(255)
);
