

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Job 02 </h5>
    <h6 class="card-subtitle mb-2 text-muted">PHP</h6>
    <p class="card-text">Créez une variable de type string nommée $str et affectez y le texte :
“Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.”
Parcourir cette chaîne en affichant seulement un caractère sur deux.
Ex. : Tu e ntnssrn edsdn etmscmelslre osl li.</p>
    <a href="https://www.php.net/manual/fr/index.php" class="card-link">php tutoriel </a>
  <p><?php
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    for ( $i = 0; $i < strlen($str); $i += 2) {
        echo $str[$i];
    }
    ?></p>
  </div>
</div>

</body>
</html>