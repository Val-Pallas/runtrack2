Maintenant que vous avez créé une base de données, des tables et que vous y avez
ajouté des données, vous allez pouvoir les manipuler.
Écrivez dans le fichier “job03.sql” une requête permettant de sélectionner l’ensemble
des champs de la table etudiants.

SELECT * FROM etudiants;
+----+---------+-------------+------------+-------+-----------------------------+
| id | prenom  | nom         | naissance  | sexe  | email                       |
+----+---------+-------------+------------+-------+-----------------------------+
|  1 | Cyril   | Zimmermann  | 1989-01-02 | Homme | cyril@laplateforme.io       |
|  2 | Jessica | Soriano     | 1995-09-08 | Femme | jessica@laplateforme.io     |
|  3 | Roxan   | Roumégas    | 2016-09-08 | Homme | roxan@laplateforme.io       |
|  4 | Pascal  | Assens      | 1999-12-31 | Homme | pascal@laplateforme.io      |
|  5 | Terry   | Cristinelli | 2005-02-01 | Homme | terry@laplateforme.io       |
|  6 | Ruben   | Habib       | 1993-05-26 | Homme | ruben.habib@laplateforme.io |
|  7 | Toto    | Dupont      | 2019-11-07 | Homme | toto@laplateforme.io        |
+----+---------+-------------+------------+-------+-----------------------------+
7 rows in set (0,02 sec)
