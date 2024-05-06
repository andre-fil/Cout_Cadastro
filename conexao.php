<?php

$databasePath = __DIR__ .'/banco.sqlite';

#$pdo = new PDO('sqlite:C:\Users\Andre\Documents\Alura\PHP-BD\php-pdo-projeto-inicial\banco.sqlite');
$pdo = new PDO('sqlite:'. $databasePath);
#echo 'conectei!';


#$pdo->exec('CREATE TABLE Pessoa (nome TEXT, email TEXT, senha TEXT, cpf TEXT PRIMARY KEY, status TEXT)');
#$pdo->exec('UPDATE People SET sexo = "F" WHERE email = "laysmart24@gmail.com"');
#$pdo->exec('DROP TABLE Peolpe');

#$pdo->exec('UPDATE Pessoa SET cpf = "06673978333" WHERE email = "filipebarreto34@gmail.com"');

#$pdo->exec('CREATE TABLE Processo (id INTEGER PRIMARY KEY, cpf TEXT , descricao TEXT, parceiro TEXT, protocolo text,FOREIGN KEY (cpf) REFERENCES Pessoa(cpf))');

#$pdo->exec('DROP TABLE Processo');
#$pdo->exec('CREATE TABLE Processo (id INTEGER PRIMARY KEY, cpf TEXT , descricao TEXT, parceiro TEXT, protocolo text,dataAbertura TEXT,FOREIGN KEY (cpf) REFERENCES Pessoa(cpf))');