<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 04</title>
</head>
<body>
    <p>
    Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau :

Argument Valeur
prenom Stephane
nom Dupont
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
    <fieldset>
        <legend>Form Post</legend>
        <form action="index.php" method="POST">
            <label for="text"name="firstn">name</label>
            <input type="text" name="Lastn">
            <input type="button" value="ok">
            <input type="datetime" name="date" id="date">
            <input type="submit" value="submit"></label>
        </form>
    </fieldset>
</body>
</html>