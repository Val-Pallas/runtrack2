<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <img class="card-img-top" src="/1.png" alt="Card image cap">
  
  <div class="card-body">
    <h5 class="card-title">Job 03</h5>
    <p class="card-text">Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
</p>
  </div>
  <div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><i>Ex. : IoyaeIaaiIaoa</i></li>
  </ul>
  <title>Job 03</title>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><?php
    $txt = "I'm sorry Dave I'm afraid I can't do that";
    $tab = ['a', 'e', 'i', 'o', 'u', 'y'];
    $tot = 0;
    foreach($tab as $voyelle){
    $tot += substr_count(strtolower($txt), $voyelle);
    }
    echo $tot.' voyelles';  // Affiche le total si tu veux, sinon autre chose
    ?></li>
    <li><?php
    $str = "I'm sorry Dave I'm afraid I can't do that";
    $voyelles = ['y','a', 'e', 'i', 'o', 'u' ];
    for ($i=0; $i < strlen($str);$i++){
        $char = strtolower($str[$i]);
        if(in_array($char, $voyelles)) {
            echo $str[$i];
        }
    }
    ?></li>
  </ul>
  
    </div>
</head>
<body>
    
</body>
</html>