<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/job05/1.ico" >
    <title>Job 05</title>
</head>
<body>
    <nav>
    <img src="/job05/1.ico" alt="image logo" width="50px">
    <h4>job05</h4>
    </nav>
    <banner>
        <p style="font-family:sans"><i>Créez une variable de type string nommée $str et affectez y le texte :
    “On n’est pas le meilleur quand on le croit mais quand on le sait”.
    Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
    “consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
    nombre d'occurrences de consonnes et de voyelles de $str.
    Affichez ces résultats dans un tableau <em><table></em> html qui a comme “Voyelles” et
“Consonnes”..</i></p>
    </banner>
    <p><?php
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
    $consonnes = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');
    $voyelles = array('a' , 'e' , 'i' , 'o' , 'u' , 'y');
    $alphabet = array('Consonnes' => $consonnes, 'Voyelles' => $voyelles);
    $counCon = 0;
    $counVoy = 0;
 
    for ($i = 0; $i < strlen($str); $i++) {
        $char = strtolower($str[$i]);
        if (in_array($char, $consonnes)) {
            $counCon++;
        } elseif (in_array($char, $voyelles)) {
            $counVoy++;
        }
    }
    for ($i = 0; $i <= count($consonnes); $i++) {
        if (in_array(substr($str, $i, 1), $consonnes)) {
            $counCon++;
        }
        else {
            $counVoy++;
        }


    }
 
    echo '<table border = "1">';
     
    foreach ($alphabet as $key => $value) {
        echo '<tr>';
        echo "<th style='text-align:center;'> Voyelles </th>";
        echo "<th>Consonnes </th>";
        echo '</tr>';
        echo "<tr>";
        echo "<td > $counVoy</td>";
        echo "<td > $counCon</td>";
        echo "</tr>";

    }

    echo '</table>';

    ?></p>

</body>
</html>