CREATE TABLE funcionario(
	idfuncionario INT(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR (100) NOT NULL,
    salario INT(10) NOT NULL,
    dtNascimento DATE,
    cargo VARCHAR(40)
)