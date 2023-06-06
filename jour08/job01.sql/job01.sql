

À l’aide de phpmyadmin, créez une base de données nommée “jour09”.
Créez une table nommée “etudiants” ayant comme champs :
● id, int, clé primaire et Auto Incrément
● prenom, varchar de taille 255
● nom, varchar de taille 255
● naissance, date
● sexe, varchar de taille 25
● email, varchar de taille 255
Créez une table nommée “etage” ayant comme champs :
● id, int, clé primaire et Auto Incrément
● nom, varchar de taille 255
● numero, int
● superficie, int
Créez une table nommée “salles” ayant comme champs :
● id, int, clé primaire et Auto Incrément
● nom, varchar de taille 255
● id_etage, int
● capacite, int
Exportez votre base de données en utilisant la méthode d’exportation rapide, renommez
là "job 01.sql" et ajoutez la à votre répertoire de rendu.

mysql> CREATE DATABASE jour09;
Query OK, 1 row affected (0,19 sec)

mysql> USE jour09;
Database changed

mysql> CREATE TABLE `etudiants` (
    ->   `id` INT AUTO_INCREMENT PRIMARY KEY,
    ->   `prenom` VARCHAR(255),
    ->   `nom` VARCHAR(255),
    ->   `naissance` DATE,
    ->   `sexe` VARCHAR(25),
    ->   `email` VARCHAR(255)
    -> );
Query OK, 0 rows affected (0,23 sec)

mysql> CREATE TABLE etage (
    -> id INT AUTO_INCREMENT PRIMARY KEY,
    -> nom VARCHAR(255),
    -> numero INT,
    -> superficie INT
    -> );
Query OK, 0 rows affected (0,08 sec)

mysql> CREATE TABLE salles (
    -> id INT AUTO_INCREMENT PRIMARY KEY,
    -> nom VARCHAR(255),
    -> numero INT,
    -> capacite INT
    -> );
Query OK, 0 rows affected (0,08 sec)
INSERT INTO salles (id, nom, etage, capacite) VALUES

Exporter la base des donnes:
mysqldump -u username -p password database_name > job01.sql
