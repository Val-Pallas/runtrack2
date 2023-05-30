<?php
function getHello() {
    if(($_GET["salut"]) == ("Hello LaPlateforme!")) {
        return $_GET["salut"];
        }else {
        return "You are writing other thing";
    }
}
$salut = getHello();
echo $salut

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
    <p>Créez une fonction nommée “getHello()”<br>
Cette fonction doit retourner <em>“Hello LaPlateforme!”.</em><br>
Appelez cette fonction dans votre page en récupérant sa valeur de retour et affichez-la.</p>
<form action="index.php" method="get">
<label for="salut">Hello LaPlateforme!</label>
<input type="text" name="salut" >
<input type="submit" vamlue="submit">
</form>
</body>
</html>