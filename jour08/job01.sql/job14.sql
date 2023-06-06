“job14.sql” une requête permettant de sélectionner le prenom, le
nom et la date de naissance des étudiants qui sont nés entre 1998 et 2018.

SELECT prenom, nom, naissance FROM etudiants WHERE YEAR(naissance) BETWEEN 1998 AND 2018;
+--------+-------------+------------+
| prenom | nom         | naissance  |
+--------+-------------+------------+
| Roxan  | Roumégas    | 2016-09-08 |
| Pascal | Assens      | 1999-12-31 |
| Terry  | Cristinelli | 2005-02-01 |
+--------+-------------+------------+
3 rows in set (0,02 sec)