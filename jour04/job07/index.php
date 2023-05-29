<?php
if (isset($_GET["hauteur"]) && isset($_GET["largeur"])) {
    $largeur = $_GET["largeur"];
    $hauteur = $_GET["hauteur"];

    // Display the roof
    for ($i = 0; $i < $hauteur; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($i < $hauteur / 2 && ($j >= ($largeur / 2 - $i) && $j <= ($largeur / 2 + $i))) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }

    // Display the walls
    for ($i = 0; $i < $hauteur / 2; $i++) {
        for ($j = 0; $j < $largeur; $j++) {
            if ($j == 0 || $j == $largeur - 1) {
                echo "|";
            } else {
                echo " ";
            }
        }
        echo "<br>";
    }
}

if (isset($_GET["hauteur"])&&($_GET["largeur"])) {
    $largeur = $_GET["hauteur"];
    $hauteur = $_GET["largeur"];
    for ($i = 0; $i < $largeur; $i++) {
        echo "/";
    } 
    for ($j = 0; $j < $hauteur; $j++) {

        echo "\\";
    }
    
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
<body>
    <p style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Faire un formulaire avec deux &LT;input&gt; de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :

Si on entre les valeurs largeur = 20 et hauteur = 10 dans les champs,
la maison qui s’affiche sur la page doit ressembler à ceci : /÷\</p>
<fieldset style="border: aqua;">
<legend>Form pour maison</legend>
<form action="index.php" method="GET">
    <label for="largeur"> Largeur:</label>
    <input type="number" id="largueur" name="largueur"><br>
    <br>
    <label for="hauteur"> Hauteur:</label> 
    <input type="number" id="hauteur" name="hauteur"><br>
    <br>
    <input type="submit" value="🏠">
</form>

</fieldset>

</body>
</html>