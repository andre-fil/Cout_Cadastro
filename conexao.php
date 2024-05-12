<?php

$databasePath = __DIR__ .'/banco.sqlite';

#$pdo = new PDO('sqlite:C:\Users\Andre\Documents\Alura\PHP-BD\php-pdo-projeto-inicial\banco.sqlite');
$pdo = new PDO('sqlite:'. $databasePath);
#echo 'conectei!';


#$pdo->exec('CREATE TABLE Pessoa (nome TEXT, email TEXT, senha TEXT, cpf TEXT PRIMARY KEY, status TEXT)');
#$pdo->exec('UPDATE People SET sexo = "F" WHERE email = "laysmart24@gmail.com"');
#$pdo->exec('DROP TABLE Pessoa');

#$pdo->exec('UPDATE Pessoa SET cpf = "06673978333" WHERE email = "filipebarreto34@gmail.com"');

#$pdo->exec('CREATE TABLE Processo (id INTEGER PRIMARY KEY, cpf TEXT , descricao TEXT, parceiro TEXT, protocolo text,FOREIGN KEY (cpf) REFERENCES Pessoa(cpf))');

#$pdo->exec('DROP TABLE Processo');
#$pdo->exec('CREATE TABLE Processo (id INTEGER PRIMARY KEY, cpf TEXT , descricao TEXT, parceiro TEXT, protocolo text,dataAbertura TEXT,FOREIGN KEY (cpf) REFERENCES Pessoa(cpf))');
#$pdo->exec('CREATE TABLE LinhaTempo(id INTEGER PRIMARY KEY, protocolo TEXT, evento TEXT, descricao TEXT, FOREIGN kEY (protocolo) REFERENCES Processo(protocolo))');
#$pdo->exec('CREATE TABLE Pessoa (nome TEXT, email TEXT, senha TEXT, cpf TEXT PRIMARY KEY, categoria TEXT)');
#$pdo->exec('CREATE TABLE Processo (protocolo text PRIMARY KEY, cpf TEXT , descricao TEXT,status TEXT,assunto TEXT, parceiro TEXT,dataAbertura TEXT,FOREIGN KEY (cpf) REFERENCES Pessoa(cpf))');
#$pdo->exec('CREATE TABLE Prazo(id INTEGER PRIMARY KEY, protocolo TEXT, evento TEXT, descricao TEXT,dataEntrega TEXT, FOREIGN kEY (protocolo) REFERENCES Processo(protocolo))');