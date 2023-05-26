<?php
if (isset($_GET["fname"])) {
    echo $_GET["fname"];
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
    <h5>Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’arguments GET envoyé est : “</h5>
<form action="index.php" method="get">
    <label for="First-name">First name:</label><br>
    <input type="text" id="First-name" name="fname" value=" "><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>