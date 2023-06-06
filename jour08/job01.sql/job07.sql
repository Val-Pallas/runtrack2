une requête permettant de sélectionner l’ensemble
des informations des étudiants qui ont plus de 18 ans.

SELECT * FROM etudiants WHERE DATE_ADD(naissance, INTERVAL 18 YEAR) <= CURDATE();
+----+---------+-------------+------------+-------+-----------------------------+
| id | prenom  | nom         | naissance  | sexe  | email                       |
+----+---------+-------------+------------+-------+-----------------------------+
|  1 | Cyril   | Zimmermann  | 1989-01-02 | Homme | cyril@laplateforme.io       |
|  2 | Jessica | Soriano     | 1995-09-08 | Femme | jessica@laplateforme.io     |
|  4 | Pascal  | Assens      | 1999-12-31 | Homme | pascal@laplateforme.io      |
|  5 | Terry   | Cristinelli | 2005-02-01 | Homme | terry@laplateforme.io       |
|  6 | Ruben   | Habib       | 1993-05-26 | Homme | ruben.habib@laplateforme.io |
+----+---------+-------------+------------+-------+-----------------------------+
5 rows in set (0,02 sec)