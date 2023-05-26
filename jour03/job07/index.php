<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>Créez une variable de type string nommée $str et affectez y le texte :
“Certaines choses changent, et d'autres ne changeront jamais.”
Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le
deuxième, le deuxième par le troisième etc.. et le dernier par le premier.
Ex. : Ertaines choses changent, et d'autres ne changeront jamais.c</p>
 <h2><?php
    $str = "Certaines choses changent, et d'autres ne changeront jamais.";
    $newstr = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $newchar = $str[$i];
        $newchar++;
        $newstr .= $newchar;
    }

    echo $newstr;
?>
 </h2> 
 <h2>
 <?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$newstr = "";
for ($i = 0; $i < strlen($str); $i++) {
    if ($i < strlen($str) - 1) {
        $newstr .= $str[$i + 1];
    } else {
        $newstr .= $str[0];
    }
}

echo $newstr;
?>

 </h2>
</body>
</html>