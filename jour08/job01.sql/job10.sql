une requête permettant de calculer la superficie de l’ensemble des étages.

SELECT SUM(superficie) AS superficie_totale FROM etage;

+-------------------+
| superficie_totale |
+-------------------+
|              1000 |
+-------------------+
1 row in set (0,01 sec)