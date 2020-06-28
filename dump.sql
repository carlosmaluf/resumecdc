CREATE TABLE usuario
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    usuario VARCHAR(25) NOT NULL,
    senha VARCHAR(40) NOT NULL,
    nivel INT(1) UNSIGNED NOT NULL DEFAULT '1',
    ativo BOOL NOT NULL DEFAULT '1',
    cadastro DATETIME NOT NULL 
);

CREATE TABLE `empreend` (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nome varchar(100) DEFAULT NULL,
  rua varchar(60) DEFAULT NULL,
  valor varchar(50) NOT NULL,
  zona varchar(50) NOT NULL
);