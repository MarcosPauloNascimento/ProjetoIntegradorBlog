id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	datapublicacao DATE,
	conteudo VARCHAR(200),
	userid INT NOT NULL,
	FOREIGN KEY (userid) REFERENCES usuario(id) ON DELETE CASCADE