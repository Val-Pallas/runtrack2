Ajoutez maintenant des informations dans votre base de données.
Créez les champs et les étudiants suivants dans une table “etudiants”:
prenom, nom, naissance, sexe, email :
● Cyril, Zimmermann, 1989-01-02, Homme, cyril@laplateforme.io
● Jessica, Soriano, 1995-09-08, Femme, jessica@laplateforme.io
● Roxan, Roumégas, 2016-09-08, Homme, roxan@laplateforme.io
● Pascal, Assens, 1999-12-31, Homme, pascal@laplateforme.io
● Terry, Cristinelli, 2005-02-01, Homme, terry@laplateforme.io
● Ruben, Habib, 1993-05-26, Homme, ruben.habib@laplateforme.io
● Toto, Dupont, 2019-11-07, Homme, toto@laplateforme.io
Créez les champs et les étages suivants dans une table “etages”:
id, nom, numero, superficie :
● 1, RDC, 0, 500
● 2, R+1, 1, 500

Créez les champs et les salles suivantes dans une table “salles”:
id, nom, etage, capacite :
● 1, Lounge, 1, 100
● 2, Studio Son, 1, 5
● 3, Broadcasting, 2, 50
● 4, Bocal Peda, 2, 4
● 5, Coworking, 2, 80
● 6, Studio Video, 2, 5
Exportez votre base de données en utilisant la méthode d’exportation rapide, renommez
là "job 02.sql" et ajoutez la à votre répertoire de rendu.

INSERT INTO etudiants (prenom, nom, naissance, sexe, email) VALUES
  ('Cyril', 'Zimmermann', '1989-01-02', 'Homme', 'cyril@laplateforme.io'),
  ('Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
  ('Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
  ('Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
  ('Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
  ('Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
  ('Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');

INSERT INTO etages (id, nom, numero, superficie) VALUES
  (1, RDC, 0, 500),
  (2, R+1, 1, 500);

INSERT INTO salles (id, nom, numero, capacite) VALUES
  ('1', 'Lounge', '1', '100'),
  ('2', 'Studio Son', '1', '5'),
  ('3', 'Broadcasting', '2', '50'),
  ('4', 'Bocal Peda', '2', '4'),
  ('5', 'Coworking', '2', '80'),
  ('6', 'Studio Video', '2', '5');

mysql> INSERT INTO etudiants (prenom, nom, naissance, sexe, email) VALUES
    -> ('Jessica', 'Soriano', '1995-09-08', 'Femme', 'jessica@laplateforme.io'),
    -> ('Roxan', 'Roumégas', '2016-09-08', 'Homme', 'roxan@laplateforme.io'),
    -> ('Pascal', 'Assens', '1999-12-31', 'Homme', 'pascal@laplateforme.io'),
    -> ('Terry', 'Cristinelli', '2005-02-01', 'Homme', 'terry@laplateforme.io'),
    -> ('Ruben', 'Habib', '1993-05-26', 'Homme', 'ruben.habib@laplateforme.io'),
    -> ('Toto', 'Dupont', '2019-11-07', 'Homme', 'toto@laplateforme.io');
Query OK, 6 rows affected (0,02 sec)
Records: 6  Duplicates: 0  Warnings: 0

mysql> INSERT INTO etage (id, nom, numero, superficie) VALUES ('1', 'RDC',' 0',' 500'), ('2',' R+1',' 1',' 500');
Query OK, 2 rows affected (0,00 sec)
Records: 2  Duplicates: 0  Warnings: 0

mysql> INSERT INTO salles (id, nom, numero, capacite) VALUES
    -> ('1', 'Lounge', '1', '100'),
    -> ('2', 'Studio Son', '1', '5'),
    -> ('3', 'Broadcasting', '2', '50'),
    -> ('4', 'Bocal Peda', '2', '4'),
    -> ('5', 'Coworking', '2', '80'),
    -> ('6', 'Studio Video', '2', '5');
Query OK, 6 rows affected (0,02 sec)
Records: 6  Duplicates: 0  Warnings: 0