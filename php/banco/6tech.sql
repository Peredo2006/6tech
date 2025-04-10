CREATE DATABASE contato;

USE contato;


CREATE TABLE `tbmensagens` (
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `assunto` varchar(100) DEFAULT NULL,
  `mensagem` varchar(100) DEFAULT NULL,
  `data_envio` DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SELECT * FROM tbmensagens;

TRUNCATE TABLE tbmensagens;