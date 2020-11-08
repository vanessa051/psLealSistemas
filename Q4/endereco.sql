CREATE TABLE `bairro`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  `id_cidade` int NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `cidade`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  `id_estado` int NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `estado`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  `id_pais` int NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `logradouro`  (
  `cep` int NOT NULL,
  `nome` varchar(255) NULL,
  `id_bairro` int NULL,
  PRIMARY KEY (`cep`)
);

CREATE TABLE `pais`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  `ddi` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE `bairro` ADD CONSTRAINT `fk_bairro_cidade_1` FOREIGN KEY (`id_cidade`) REFERENCES `cidade` (`id`);
ALTER TABLE `cidade` ADD CONSTRAINT `fk_cidade_estado_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id`);
ALTER TABLE `estado` ADD CONSTRAINT `fk_estado_pais_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id`);
ALTER TABLE `logradouro` ADD CONSTRAINT `fk_logradouro_bairro_1` FOREIGN KEY (`id_bairro`) REFERENCES `bairro` (`id`);

