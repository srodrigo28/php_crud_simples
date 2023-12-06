CREATE TABLE IF NOT EXISTS categoria (
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) unique NOT NULL,
    descricao VARCHAR(100),

    criado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS produto(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) unique NOT NULL,
    descricao VARCHAR(100),

    id_categoria INTEGER ,
    criado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE produto
	ADD CONSTRAINT id_categoria
	FOREIGN KEY (id_categoria) REFERENCES categoria (id) ;