<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a_bool = TRUE; // un booléen
$a_str = "Vaca"; // une chaine de caractéres
$a_str = 'Lola'; // une chaine de caracteres
$an_int = 2023; // un entier

echo gettype($a_bool) ."\n"; // affiche : bolean
echo gettype($a_str) ."\n"; // affiche : string

var_dump($an_int);
var_dump($a_str);

?>
</body>
</html>
À l’aide de php, générer un tableau html qui contient dans son header trois colonnes (type, nom, valeur) et dans son body, une ligne pour chacune des variables et de leurs informations.