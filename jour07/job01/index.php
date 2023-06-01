<?php 


session_start();
if (isset($_SESSION["nbvisites"])){
    $_SESSION["nbvisites"]++;
}elseif(isset($_POST["reset"])){
    $_SESSION["nbvisites"]= 0 ;
}else{
    $_SESSION["nbvisites"]=1;
}
$nbvisites = $_SESSION["nbvisites"];

echo "Nombre de visites : " . $nbvisites ;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job 01</title>
</head>
<body>
    <p>Créez une variable de session nommée “nbvisites”. À chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur.</p>
<fieldset>
    <legend>Session</legend>
    <form action="index.php" method="post">
        <label for="name"> Name: </label>
        <input type="text" name="name" ><br>
        <input type="submit" value="submit"><br>
        <input type="reset" name="reset"value="reset">
    </form>
</fieldset>
</body>
</html>