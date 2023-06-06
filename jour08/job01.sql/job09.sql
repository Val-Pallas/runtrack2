une requête permettant de sélectionner l’ensemble des informations des étudiants qui ont moins de 18 ans.

SELECT * FROM etudiants WHERE DATE_ADD(naissance, INTERVAL 18 YEAR) > CURDATE();
+----+--------+-----------+------------+-------+-----------------------+
| id | prenom | nom       | naissance  | sexe  | email                 |
+----+--------+-----------+------------+-------+-----------------------+
|  3 | Roxan  | Roumégas  | 2016-09-08 | Homme | roxan@laplateforme.io |
|  7 | Toto   | Dupont    | 2019-11-07 | Homme | toto@laplateforme.io  |
+----+--------+-----------+------------+-------+-----------------------+
2 rows in set (0,01 sec)