une requête permettant de sélectionner l’ensemble
des informations des étudiants dont prenom commence par un “T”.

SELECT * FROM etudiants WHERE prenom LIKE 'T%';
+----+--------+-------------+------------+-------+-----------------------+
| id | prenom | nom         | naissance  | sexe  | email                 |
+----+--------+-------------+------------+-------+-----------------------+
|  5 | Terry  | Cristinelli | 2005-02-01 | Homme | terry@laplateforme.io |
|  7 | Toto   | Dupont      | 2019-11-07 | Homme | toto@laplateforme.io  |
+----+--------+-------------+------------+-------+-----------------------+
2 rows in set (0,01 sec)