
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Job 04</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Créez une variable de type string nommée $str et affectez y le texte :
“Dans l'espace, personne ne vous entend crier”.
Créez un algorithme qui parcourt, compte et affiche le nombre de caractères présents
dans cette chaîne.</h5>
    <p class="card-text"><?php
    $str = "Dans l'espace, personne ne vous entend crier.";
    for ($i = 0 ; $i < strlen($str) ; $i++) {
        echo  $i . "<br>" ;
    }
  
for ($i = 0 ; $i < strlen($str) ; $i++) {
echo "Nombre de caractères présents :". $i ;}

    ?></p>
    <a href="https://www.php.net/manual/fr/language.variables.php" class="btn btn-primary">php</a>
  </div>
</div>
    <title>Document</title>
</head>
<body>
    
</body>
</html>