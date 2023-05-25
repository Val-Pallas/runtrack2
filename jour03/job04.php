
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
    <Li>JOB 04</Li>
    <h4>chaine de caractères</h4>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Créez une variable de type string nommée $str et affectez y le texte :
“Dans l'espace, personne ne vous entend crier”.
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne.</h5>
    <p class="card-text"><?php
    $str = "Dans l'espace, personne ne vous entend crier.";
    $alphabet = '';

    for ($i = ord('a'); $i <= ord('z'); $i++) {
        $alphabet .= chr($i);
        /**we use the chr() function to convert the ASCII value back to its corresponding character and append it to the $alphabet string. /**
         * 
         */
    }

    $count = 0;

    for ($j= 0; $j < strlen($str); $j++) {
        if ($str[$j] != ' ') {
            $count++;
        }
    }    
echo "Nombre de caractères : " . $count. "<br>";

for ($i = 0; $i < strlen($alphabet); $i++) {
    
    $charCount = 0;
    for ($j = 0; $j < strlen($str); $j++) {
        if (strtolower($str[$j]) == strtolower($alphabet[$i])) {
            $charCount++;
        }
    }
    if ($charCount > 0) {
        echo "La lettre " . $alphabet[$i] . "est présente " . $charCount . " fois.<br>";
    }
}
 
    ?></p>
    <a href="https://www.php.net/manual/fr/language.variables.php" class="btn btn-primary">php</a>
  </div>
</div>
    <title>Document</title>
</head>
<body>
    
</body>
</html>