<?php
function calcule() {
$A = ($_GET["A"]);
$B = ($_GET["B"]);
$O = ($_GET["O"]);
if ($O == "*" ){
    return $A*$B;
    }elseif($O == "+"){
        return $A+$B;
    }elseif($O == "/"){
        return $A/$B;
    }elseif($O == "%"){
        return $A%$B;
    }else{
        echo "Write a new operator";
    }
}
$resultat = calcule();
echo "The result is = ".$resultat
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    Créez une fonction nommée “calcule()” qui prend 3 paramètres 
    <ul>
        <li>le premier est un nombre</li> 
        <li>le deuxième est un caractère (string) contenant le type d’opération (+, -, *, /, %)</li>
        <li>le troisième est un nombre</li>
    </ul>
    <b>fonction doit retourner le résultat de l’opération.</b> 
    </p>
    <form action="index.php" method="GET">
        <label for="number">Nombre A:</label>
        <input type="number" name="A"><br>
        <label for="string">(+, -, *, /, %) :</label>
        <input type="operator" name="O"><br>
        <label for="number">Nombre B:</label>
        <input type="number" name="B"><br>
        <input type="submit" value="Go!">
    </form>
</body>
</html>