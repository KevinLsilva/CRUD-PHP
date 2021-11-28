create database `usuarios`;

use usuarios;

CREATE TABLE IF NOT EXISTS `usuario` (
`id` int(11) AUTO_INCREMENT,
`nome` varchar(255) DEFAULT NULL,
`email` varchar(255) UNIQUE DEFAULT NULL,
`sexo` varchar(10) DEFAULT NULL,
`telefone` varchar(25) DEFAULT NULL,
`senha` varchar(255) DEFAULT NULL,
`dtnasc` varchar(25) DEFAULT NULL,
`tipo` varchar(25) DEFAULT NULL,
`avatar` blob NOT NULL,
`data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;