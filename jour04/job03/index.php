<?php
if (isset($_POST["fname"]) && isset($_POST["Lname"])){
echo "Le nombre d’arguments POST envoyé est : ".count($_POST);
echo "<h1>bienvenue ".$_POST["fname"]."".$_POST["Lname"]."!</h1>";
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
    <h3>Job 03</h3>
    <p>
Développez un algorithme qui affiche le nombre d’arguments $_POST.<br>
Tips :<br>
Pour tester votre code, créez un formulaire html &lt;form&gt; de type POST avec différents
champs &lt;input&gt; de type “text” et un &lt;input&gt; de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’arguments POST envoyé est : “
    </p>
    
<fieldset>
    <legend>Info</legend>
    <div class="form-container">
        <form action="index.php" method="POST">
            <label for="First-name">First name:</label><br>
            <input type="text" id="First-name" name="fname" value=" "><br>
            <label for="Last-name">Last name:</label><br>
            <input type="text" id="Last-name" name="Lname" value=" "><br>
            <input type="submit" value="Submit">
        </form>
    </div>    

</fieldset>    
</body>
</html>