DROP DATABASE IF EXISTS slam01;
CREATE DATABASE IF NOT EXISTS slam01;
USE slam01;

CREATE TABLE IF NOT EXISTS todos(
    ktodo int not null auto_increment primary key,
    title varchar(50) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO todos VALUES
(1, 'Préparer cours POO'),
(2, 'Faire les TD de POO'),
(3, 'Imaginer le TP'),
(4, 'Penser à un sujet de DS'),
(5, 'Écrire le DS');


CREATE TABLE `users` (
  `kuser` int NOT NULL,
  `login` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`kuser`, `login`) VALUES
(1, 'Luc'),
(2, 'toto');