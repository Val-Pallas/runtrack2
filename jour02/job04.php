Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
(“<br />”) et en remplaçant certains nombres par un mot selon les conditions suivantes :
● Si le nombre est un multiple de 3, affichez “Fizz”.
● Si le nombre est un multiple de 5, affichez “Buzz”.
● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.

<?php
    $min = 0;
    $max =100;
    $i = $min;
    
    echo 'Les chiffres compris entre' . $min .'et' .$max .'sont' . $i++ . '<br />';

    for ($i = $min; $i <= $max; $i++ ) {
          if ($i % 3 == 0 && $i % 5 == 0) {
        echo '<em>' . $i . '-'.  'FizzBuzz'. '</em><br />'; 
        } if ($i % 3 == 0) {
            echo '<i>' . $i .'-'.'Fizz'. '</i><br/>';
        } elseif ($i % 5 == 0) {
            echo '<u>' . $i .'-'.'Buzz'. '</u><br />';
        }
    }
    ?>