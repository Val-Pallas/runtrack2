une requête permettant de sélectionner le prenom, le
nom et la date de naissance des étudiants de sexe féminin.


SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme';
+---------+---------+------------+
| prenom  | nom     | naissance  |
+---------+---------+------------+
| Jessica | Soriano | 1995-09-08 |
+---------+---------+------------+
1 row in set (0,01 sec)