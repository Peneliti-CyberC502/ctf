CREATE DATABASE IF NOT EXISTS '{CTF-sekian}';
CREATE DATABASE IF NOT EXISTS if674_ctf;
USE if674_ctf;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

INSERT INTO users (name)
VALUES ('{CTF-sekian}');
