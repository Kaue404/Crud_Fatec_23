CREATE TABLE `fatec_professores` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `salario` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
