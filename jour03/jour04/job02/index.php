<?php
if (isset($_GET["fname"])) {
    echo '<table border = "1">';
    echo '<tr>';
    echo "<th> Argument </th>";
    echo '<th> Valeur </th>';
    echo "</tr>";
    echo '<tr>';
    echo '<td> name </td>';
    echo '<td>' .$_GET["fname"] .'</td>';
    echo "</tr>";


    echo '</table>';
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
    <p>Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur.
Tips :
Pour tester votre code, créez un formulaire HTML <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :
<table border="1">
    <tr>Valeur
        <th>prenom </th>
        <th>nom</th>
    </tr>
    <tr>  
        <td>Stephane</td>
        <td> Dupont</td>
    </tr>  
    </tr>
</table>
 </p>

<form action="index.php" method="$_GET">
    <label for="First-name">First name:</label><br>
    <input type="text" id="First-name" name="fname" value=" "><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>