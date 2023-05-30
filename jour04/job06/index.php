<?php
if ($_GET["nombre"]%2 == 0) {


        echo "$nombre Nombre pair";
    } else{
        echo "$nombre Nombre impair";
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><p style="color: red">
Faire un formulaire de type GET avec un champ &lt;input&gt; text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. </p>
<fieldset style="box-decoration-break: slice;">
    <legend>form</legend>
    <form action="index.php" method="$_GET">
        <input type="number" name="nombre">
        <input type="submit" value="Go!">
    </form>
</fieldset>
</body>
</html>