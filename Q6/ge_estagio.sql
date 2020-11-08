CREATE TABLE `aluno`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  `email` varchar(255) NULL,
  `telefone` varchar(255) NULL,
  `id_instituicao` int NULL,
  `id_curso` int NULL,
  `id_oportunidade` int NULL,
  `id_status` int NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `coordenador`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  `telefone` varchar(255) NULL,
  `email` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `curso`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  `id_insituicao` varchar(255) NULL,
  `id_coordenador` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `empresa`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  `endereco` varchar(255) NULL,
  `cnpj` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `instituicao`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  `endereco` varchar(255) NULL,
  `cnpj` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `oportunidades`  (
  `id` int NOT NULL,
  `nome_vaga` varchar(255) NULL,
  `qtde_vagas` int NULL,
  `id_empresa` int NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `status`  (
  `id` int NOT NULL,
  `nome` varchar(255) NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE `aluno` ADD CONSTRAINT `fk_aluno_oportunidades_1` FOREIGN KEY (`id_oportunidade`) REFERENCES `oportunidades` (`id`);
ALTER TABLE `aluno` ADD CONSTRAINT `fk_aluno_instituicao_1` FOREIGN KEY (`id_instituicao`) REFERENCES `instituicao` (`id`);
ALTER TABLE `aluno` ADD CONSTRAINT `fk_aluno_curso_1` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`);
ALTER TABLE `aluno` ADD CONSTRAINT `fk_aluno_status_1` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`);
ALTER TABLE `curso` ADD CONSTRAINT `fk_curso_instituicao_1` FOREIGN KEY (`id_insituicao`) REFERENCES `instituicao` (`id`);
ALTER TABLE `curso` ADD CONSTRAINT `fk_curso_coordenador_1` FOREIGN KEY (`id_coordenador`) REFERENCES `coordenador` (`id`);
ALTER TABLE `oportunidades` ADD CONSTRAINT `fk_oportunidades_empresa_1` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);

