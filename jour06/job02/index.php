<?php
function bonjour($jour){
$s =  ($_POST["salut"]);
    if($s == "Bonjour") {
        echo "Bonjour";
    }else{
        echo "Bonsoir";
    }
}
   
    
bonjour($jour);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Job 02</title>
</head>
<body>
<div class="container">   
<p>
Créez une fonction nommée “bonjour()”.
Cette fonction prend en paramètre un booléen nommé “$jour”.
<ul>
<li> Si le paramètre vaut true, la fonction doit afficher : “Bonjour”,</li>
<br>
<li>Si le paramètre vaut false, la fonction doit afficher : “Bonsoir”.</li>
</ul>
</p>
</div> 
<form action="index.php" method="post">
    <input type="text" name="salut" id="salut">
    <input type="submit" value="Go!">
</form>
</body>
</html>