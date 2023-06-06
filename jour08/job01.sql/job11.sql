une requête permettant de sélectionner la somme des capacités des salles.

SELECT SUM(capacite) AS somme_capacites FROM salles;
+-----------------+
| somme_capacites |
+-----------------+
|             244 |
+-----------------+
1 row in set (0,01 sec)