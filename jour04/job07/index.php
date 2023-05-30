
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
<fieldset style="border-color:brown;">
<legend>Form pour maison</legend>
<hr>
<form action="test.php" method="GET">
    <br>
    <label for="hauteur"> Hauteur:</label> 
    <input type="number" id="hauteur" name="hauteur"><br>
    <br>
    <label for="largeur"> Largeur:</label>
    <input type="number" id="largueur" name="largueur"><br>
    <br><hr><input type="submit" value="🏠">
   
    <br><hr><input type="reset" value="Delete">
</form>

</fieldset>

</body>
</html>