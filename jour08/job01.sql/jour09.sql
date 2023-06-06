CREATE DATABASE jour09;
CREATE TABLE etudiants (
    ->   id INT AUTO_INCREMENT PRIMARY KEY,
    ->   prenom VARCHAR(255),
    ->   nom VARCHAR(255),
    ->   naissance DATE,
    ->   sexe VARCHAR(25),
    ->   email VARCHAR(255)
    -> );

CREATE TABLE etage (
    -> id INT AUTO_INCREMENT PRIMARY KEY,
    -> nom VARCHAR(255),
    -> numero INT,
    -> superficie INT
    -> );

CREATE TABLE salles (
    -> id INT AUTO_INCREMENT PRIMARY KEY,
    -> nom VARCHAR(255),
    -> numero INT,
    -> capacite INT
    -> );

  CREATE TABLE etudiants (    ->   id INT AUTO_INCREMENT PRIMARY KEY,    ->   prenom VARCHAR(255),    ->   nom VARCHAR(255),    ->   naissance DATE,    ->   sexe VARCHAR(25),    ->   email VARCHAR(255)    -> );  