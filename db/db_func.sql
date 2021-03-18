CREATE TABLE funcionario(
	id_funcionario INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR (100) NOT NULL,
    salario INT(10) NOT NULL,
    dt_nascimento DATE,
    cargo VARCHAR(40)
)